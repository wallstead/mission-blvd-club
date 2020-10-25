<?php
    global $wpdb;
    class ContentImporter {
        var $wpdb;
        var $config_data; //array of json objects used to store configuration data for posts, fields, and taxonomies
        var $current_config; //json object containing the configuration data currently being used
        var $current_data; //json object containing the import file data currently being used
        var $current_item; //json object containing the post or taxonomy data currently being imported
        var $current_post; //post id of the newly imported post (set once created)
        var $current_term; //term id of the newly imported term (set once created)
        var $current_attachment; //attachment id of the newly imported attachment item (set once created)

        //TODO: test document attachments
        function __construct() {
            global $wpdb;
            $this->wpdb = $wpdb;

            //load the config file
            $this->config_data = $this->loadJSONFile('config');

            //for each config item
            foreach($this->config_data as $config_item_key => $config_item_data) {
                //set the current config data
                $this->current_config = [
                    'key' => $config_item_key,
                    'data' => $config_item_data
                ];

                WP_CLI::success("Starting to import \"{$this->current_config['key']}\"...");

                //load the current data file in
                $this->current_data = $this->loadJSONFile("https://staging-tahoesouth.pantheonsite.io/wp-content/uploads/content-exports/{$this->current_config['key']}.json");

                //loop through each term
                if(isset($this->current_data['taxonomy'])) {
                    foreach($this->current_data['taxonomy']['terms'] as $current_item) {
                        $this->current_item = $current_item;
                        if(!empty($this->getCurrentID('term', $this->current_item['ID']))) { continue; }

                        $this->createTerm();
                        $this->saveMigrationID('term');
                    }

                    //assign term parents
                    foreach($this->current_data['taxonomy']['terms'] as $current_item) {
                        $this->current_item = $current_item;

                        $this->setTermParent();
                    }
                }

                //loop through each post
                foreach($this->current_data['posts'] as $current_item) {
                    $this->current_item = $current_item;
                    if(!empty($this->getCurrentID('post', $this->current_item['post_meta']['ID']))) { continue; }

                    $this->createPost();
                    $this->createACFFields();
                    $this->createYoastFields();
                    $this->saveMigrationID('post');
                    $this->setFeaturedImage();
                    $this->setTerms();
                }
            }
        }

        function setTerms() {
            $terms = [];

            if(isset($this->current_item['taxonomy_terms'])) {
                foreach($this->current_item['taxonomy_terms'] as $term) {
                    $terms[] = $this->getCurrentID('term', $term);
                }

                wp_set_post_terms($this->current_post, $terms, $this->current_config['data']['taxonomy']);
            }
        }

        function setTermParent() {
            if($this->current_item['parent'] != 0) {
                wp_update_term($this->getCurrentID('term', $this->current_item['ID']), $this->current_config['data']['taxonomy'], [
                    'parent' => $this->getCurrentID('term', $this->current_item['parent'])
                ]);
            }
        }

        function createTerm() {
            $term_data = wp_insert_term($this->current_item['name'], $this->current_config['data']['taxonomy'], [
                'slug' => $this->current_item['slug'],
                'description' => $this->current_item['description'],
                'parent' => 0
            ]);
            $this->current_term = $term_data['term_id'];
            $this->logCreate('term');
        }

        function setFeaturedImage() {
            $this->importAttachment('url', $this->current_item['post_meta']['featured_image_url']);
            set_post_thumbnail($this->current_post, $this->current_attachment['id']);
        }

        function importAttachment($type, $value) {
            if(empty($value)) {
                $this->current_attachment = [
                    'id' => '',
                    'url' => ''
                ];

                return;
            }

            //download the current attachment metadata using the attachment export tool
            $attachment_metadata = $this->loadJSONFile("https://tahoesouth.com/wp-json/attachment-export-tool/?$type=$value");

            if(empty($attachment_metadata)) {
                WP_CLI::error("Attachment import error: no attachment metadata found -> [$value]", false);
                $this->current_attachment = [
                    'id' => '',
                    'url' => ''
                ];

                return;
            }

            //determine if we already have the media id stored
            $existing_current_id = $this->getCurrentID('attachment', $attachment_metadata['id']);
            if(!empty($existing_current_id)) {
                WP_CLI::log("Attachment import note: content already exists -> [$existing_current_id]");
                $this->current_attachment = [
                    'id' => $existing_current_id,
                    'url' => wp_get_attachment_url($existing_current_id)
                ];

                return;
            }

            //otherwise, continue importing as usual
            $upload_dir = wp_upload_dir();
            try {
                $attachment_data = file_get_contents($attachment_metadata['url']);
            } catch (Exception $e) {
                WP_CLI::error("Attachment import error: Could not get contents of url -> [{$attachment_metadata['url']}]", false);
                $this->current_attachment = [
                    'id' => '',
                    'url' => ''
                ];
                return;
            }
            $filename = basename($attachment_metadata['url']);

            if(wp_mkdir_p($upload_dir['path'])) {
                $file = $upload_dir['path'] . '/' . $filename;
            } else {
                $file = $upload_dir['basedir'] . '/' . $filename;
            }

            file_put_contents($file, $attachment_data);

            $wp_filetype = wp_check_filetype($filename, null);

            $attachment = [
                'post_mime_type' => $wp_filetype['type'],
                'post_title' => $attachment_metadata['title'],
                'post_content' => $attachment_metadata['description'],
                'post_excerpt' => $attachment_metadata['caption'],
                'post_status' => 'inherit'
            ];

            $attach_id = wp_insert_attachment($attachment, $file);
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            $attach_data = wp_generate_attachment_metadata($attach_id, $file);
            wp_update_attachment_metadata($attach_id, $attach_data);

            if(!empty($attachment_metadata['alt'])) {
                update_post_meta($attach_id, '_wp_attachment_image_alt', $attachment_metadata['alt']);
            }

            $this->current_attachment = [
                'id' => $attach_id,
                'url' => wp_get_attachment_url($attach_id),
                'migrated_id' => $attachment_metadata['id']
            ];

            $this->saveMigrationID('attachment');
            $this->logCreate('attachment');
        }

        function updateContentAttachments() {
            $content = $this->current_item['content'];
            $regex = '/(https?:\/\/tahoesouth\.com\/)([a-zA-Z0-9-_\/]+)\.([a-zA-Z]+)/mi';
            $matches = [];

            while(preg_match($regex, $content, $matches)) {
                $this->importAttachment('url', $matches[0]);
                $content = preg_replace($regex, $this->current_attachment['url'], $content, 1);
            }

            $this->current_item['content'] = $content;
        }

        function createYoastFields() {
            update_post_meta($this->current_post, '_yoast_wpseo_metadesc', $this->current_item['yoast_params']['meta']['description']);
            update_post_meta($this->current_post, '_yoast_wpseo_focuskw', $this->current_item['yoast_params']['meta']['keyphrase']);
            update_post_meta($this->current_post, '_yoast_wpseo_title', $this->current_item['yoast_params']['meta']['title']);

            $this->importAttachment('url', $this->current_item['yoast_params']['facebook']['image']);
            update_post_meta($this->current_post, '_yoast_wpseo_opengraph-description', $this->current_item['yoast_params']['facebook']['description']);
            update_post_meta($this->current_post, '_yoast_wpseo_opengraph-image', $this->current_attachment['url']);
            update_post_meta($this->current_post, '_yoast_wpseo_opengraph-title', $this->current_item['yoast_params']['facebook']['title']);

            $this->importAttachment('url', $this->current_item['yoast_params']['twitter']['image']);
            update_post_meta($this->current_post, '_yoast_wpseo_twitter-description', $this->current_item['yoast_params']['twitter']['description']);
            update_post_meta($this->current_post, '_yoast_wpseo_twitter-image', $this->current_attachment['url']);
            update_post_meta($this->current_post, '_yoast_wpseo_twitter-title', $this->current_item['yoast_params']['twitter']['title']);
        }

        function saveMigrationID($type) {
            if($type == 'post') {
                update_post_meta($this->current_post, "_migrated_post_id", $this->current_item['post_meta']['ID']);
            } else if($type == 'term') {
                update_term_meta($this->current_term, "_migrated_term_id", $this->current_item['ID']);
            } else if($type == 'attachment') {
                update_post_meta($this->current_attachment['id'], "_migrated_attachment_id", $this->current_attachment['migrated_id']);
            }
        }

        function createACFFields() {
            foreach($this->current_config['data']['acf'] as $metabox_key => $field_data) {
                $field_value = $this->current_item['metabox_fields'][$metabox_key];

                if($field_data['field_type'] == 'attachment') {
                    $this->importAttachment('id', $field_value);
                    $field_value = $this->current_attachment['id'];
                } else if($field_data['field_type'] == 'gallery') {
                    $this->importAttachment('id', $field_value);
                    $field_value = serialize([$this->current_attachment['id']]);
                } else if($field_data['field_type'] == 'post_ref') {
                    $field_value = $this->getCurrentID('post', $field_value);
                }

                if(!empty($field_value)) {
                    update_field($field_data['acf_key'], $field_value, $this->current_post);
                }
            }
        }

        function getCurrentID($type, $migration_id) {
            if($type == "term") {
                $table_name = "term";
            } else {
                $table_name = "post";
            }
            return $this->wpdb->get_var("SELECT {$table_name}_id FROM {$this->wpdb->prefix}{$table_name}meta WHERE meta_key = '_migrated_{$type}_id' AND meta_value = '$migration_id'");
        }

        function createPost() {
            $this->updateContentAttachments();
            $this->current_post = wp_insert_post([
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_status' => 'publish',
                'post_content' => $this->current_item['content'],
                'post_name'	=> $this->current_item['post_meta']['slug'],
                'post_title' => $this->current_item['post_meta']['title'],
                'post_excerpt' => $this->current_item['post_meta']['excerpt'],
                'post_date_gmt' => $this->current_item['post_meta']['published_date'],
                'post_modified_gmt' => $this->current_item['post_meta']['modified_date'],
                'post_type'	=> $this->current_config['data']['post_type']
            ]);
            $this->logCreate('post');
        }

        function logCreate($type) {
            if($type == 'post') {
                WP_CLI::log("Imported a post [{$this->current_item['post_meta']['ID']}]->[{$this->current_post}]");
            } else if($type == 'term') {
                WP_CLI::log("Imported a term [{$this->current_item['ID']}]->[{$this->current_term}]");
            } else if($type == 'attachment') {
                WP_CLI::log("Imported an attachment [{$this->current_attachment['migrated_id']}]->[{$this->current_attachment['id']}]");
            }
        }

        function loadJSONFile($file_name) {
            if(strpos($file_name, "http") !== false) {
                return json_decode(file_get_contents($file_name), true);
            } else {
                return json_decode(file_get_contents(get_template_directory() . "/inc/import-script/$file_name.json"), true);
            }
        }
    }

    new ContentImporter();
?>
