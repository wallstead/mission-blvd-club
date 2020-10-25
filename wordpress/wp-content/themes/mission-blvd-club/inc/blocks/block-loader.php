<?php
/**** Register our blocks ****/
function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'hero-section',
        'title'             => __('Hero Section'),
        'description'       => __('Custom Hero section block'),
        'render_template'   => 'inc/blocks/templates/hero-section.php',
        'category'          => 'common',
        'icon'              => 'format-image',
        'keywords'          => array( 'hero', 'section' ),
        'align'             => 'full',
        'supports'          => array(
            'align'         => array('wide', 'full'),
            'multiple'      => false
        ),
        'mode'              => 'auto',
    ));


    acf_register_block_type(array(
        'name'              => 'cta-section',
        'title'             => __('CTA Section'),
        'description'       => __('For people to click on.'),
        'render_template'   => 'inc/blocks/templates/cta-section.php',
        'category'          => 'common',
        'icon'              => 'editor-insertmore',
        'keywords'          => array( 'cta', 'section' ),
        'align'             => 'full',
        'supports'          => array(
            'align'         => array('wide', 'full'),
            'multiple'      => false
        ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'youtube-with-copy',
        'title'             => __('Video Intro'),
        'description'       => __('Simple YouTube video embed with copy.'),
        'render_template'   => 'template-parts/blocks/video-intro.php',
        'category'          => 'common',
        'icon'              => 'video-alt3',
        'keywords'          => array( 'YouTube', 'Embed', 'Video', 'Intro' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'circle-image-cta',
        'title'             => __('Circle Image CTA'),
        'description'       => __('CTA over an image'),
        'render_template'   => 'template-parts/blocks/circle-image-cta.php',
        'category'          => 'common',
        'icon'              => 'megaphone',
        'keywords'          => array( 'Circle', 'Image', 'CTA', 'Call To Action' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'color-block-cta',
        'title'             => __('Color Block CTA'),
        'description'       => __('CTA over an image'),
        'render_template'   => 'template-parts/blocks/color-block-cta.php',
        'category'          => 'common',
        'icon'              => 'megaphone',
        'keywords'          => array('Image', 'CTA', 'Call To Action' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'feature-blogs',
        'title'             => __('Blog Feed'),
        'description'       => __('Feature blogs in your content.'),
        'render_template'   => 'template-parts/blocks/article-feed.php',
        'category'          => 'common',
        'icon'              => 'welcome-write-blog',
        'keywords'          => array( 'Feature', 'Blog', 'Article', 'Feed' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'feature-events',
        'title'             => __('Events Feed'),
        'description'       => __('Feature events in your content.'),
        'render_template'   => 'template-parts/blocks/event-feed.php',
        'category'          => 'common',
        'icon'              => 'calendar-alt',
        'keywords'          => array( 'Feature', 'Event', 'Calendar', 'Feed' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'crowdriff-feed',
        'title'             => __('Crowdriff'),
        'description'       => __('Insert a Crowdriff feed into your content.'),
        'render_template'   => 'template-parts/blocks/crowdriff.php',
        'category'          => 'common',
        'icon'              => 'images-alt',
        'keywords'          => array( 'Crowdriff', 'Gallery', 'Feed' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'card-slider',
        'title'             => __('Card Slider'),
        'description'       => __('Insert a card slider into your content.'),
        'render_template'   => 'template-parts/blocks/card-slider.php',
        'category'          => 'common',
        'icon'              => 'admin-page',
        'keywords'          => array( 'Card', 'Slider', 'Feed' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'subpage-links',
        'title'             => __('Subpage Link Block'),
        'description'       => __('Insert a list of links into your content.'),
        'render_template'   => 'template-parts/blocks/subpage-links.php',
        'category'          => 'common',
        'icon'              => 'admin-links',
        'keywords'          => array( 'Subpage', 'Link' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'weather-madlib',
        'title'             => __('Weather Madlib'),
        'description'       => __('Insert a weather madlib into your content.'),
        'render_template'   => 'template-parts/blocks/weather-madlib.php',
        'category'          => 'common',
        'icon'              => 'cloud',
        'keywords'          => array( 'Weather', 'Madlib', 'Widget' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'full-width-cta',
        'title'             => __('Full Width Image CTA'),
        'description'       => __('Insert a full width call to action into your content.'),
        'render_template'   => 'template-parts/blocks/full-width-cta.php',
        'category'          => 'common',
        'icon'              => 'megaphone',
        'keywords'          => array( 'Full Width', 'Image', 'CTA', 'Call to Action' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'fifty-fifty',
        'title'             => __('50/50 Image & Content'),
        'description'       => __('Insert a 50/50 container with content and an image into your content.'),
        'render_template'   => 'template-parts/blocks/fifty-fifty.php',
        'category'          => 'common',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'Fifty Fifty', '50', 'Image' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'card-ctas',
        'title'             => __('Card CTAs'),
        'description'       => __('Insert a large call to action into your content.'),
        'render_template'   => 'template-parts/blocks/card-ctas.php',
        'category'          => 'common',
        'icon'              => 'format-aside',
        'keywords'          => array( 'CTA', 'Card', 'Call to Action' ),
        'mode'              => 'auto',
    ));

    acf_register_block_type(array(
        'name'              => 'image-slider',
        'title'             => __('Image Slider'),
        'description'       => __('Insert an image slider into your content.'),
        'render_template'   => 'template-parts/blocks/image-slider.php',
        'category'          => 'common',
        'icon'              => 'images-alt',
        'keywords'          => array( 'Image', 'Slider', 'Gallery' ),
        'mode'              => 'auto',
    ));
}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
