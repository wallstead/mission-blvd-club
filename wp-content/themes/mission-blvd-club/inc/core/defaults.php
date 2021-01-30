<?php // Sets up base defaults which impact the theme globally

add_action('after_setup_theme', function() {
    // Let WordPress automatically generate the <head>'s <title> tag for SEO
    add_theme_support('title-tag');

    // Add RSS feed links to the document <head>
    add_theme_support('automatic-feed-links');

    // Enable featured images (post thumbnails)
    add_theme_support('post-thumbnails');
    update_option( 'thumbnail_size_w', 70 );
    update_option( 'thumbnail_size_h', 70 );
    update_option( 'thumbnail_crop', 1 );

    // For wide gutenberg blocks
    add_theme_support( 'align-wide' );

    // Update WP Core markup tags to modern HTML5 code for these items
    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        )
    );

    // Add support for responsive embeds (from gutenberg)
    add_theme_support( 'responsive-embeds' );
});
