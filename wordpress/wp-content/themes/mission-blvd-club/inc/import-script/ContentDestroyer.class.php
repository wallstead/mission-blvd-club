<?php
    global $wpdb;
    class ContentDestroyer {
        var $wpdb;

        function __construct() {
            global $wpdb;
            $this->wpdb = $wpdb;

            $deleted_posts = 0;
            $deleted_terms = 0;
            $deleted_attachments = 0;

            WP_CLI::confirm("Are you sure you want to destroy all migrated content?");

            // Clean up migrated posts
            WP_CLI::log("Looking for posts to delete...");
            $post_ids = $this->wpdb->get_col("SELECT post_id FROM {$this->wpdb->prefix}postmeta WHERE meta_key = '_migrated_post_id'");
            foreach($post_ids as $post_id) {
                wp_delete_post($post_id, true);
                $deleted_posts++;
            }
            WP_CLI::success("Deleted $deleted_posts post(s).");

            // Clean up migrated terms
            WP_CLI::log("Looking for terms to delete...");
            $term_ids = $this->wpdb->get_col("SELECT term_id FROM {$this->wpdb->prefix}termmeta WHERE meta_key = '_migrated_term_id'");
            foreach($term_ids as $term_id) {
                $term = get_term($term_id);
                wp_delete_term($term_id, $term->taxonomy);
                $deleted_terms++;
            }
            WP_CLI::success("Deleted $deleted_terms term(s).");

            // Clean up migrated attachments
            WP_CLI::log("Looking for attachments to delete...");
            $attachment_ids = $this->wpdb->get_col("SELECT post_id FROM {$this->wpdb->prefix}postmeta WHERE meta_key = '_migrated_attachment_id'");
            foreach($attachment_ids as $attachment_id) {
                wp_delete_attachment($attachment_id, true);
                $deleted_attachments++;
            }
            WP_CLI::success("Deleted $deleted_attachments attachment(s).");
        }
    }

    new ContentDestroyer();
?>
