<?php // Properly registers and enqueues scripts/styles

// Register scripts/styles
add_action('wp_enqueue_scripts', function() {
    // Load styles and scripts from dist
    wp_register_style(
        'ns-style',
        get_template_directory_uri() . '/dist/styles/main.css',
        [],
        '1.0'
    );
    wp_register_script(
        'ns-script',
        get_template_directory_uri() . '/dist/scripts/main.js',
        [],
        '1.0',
        true
    );
});

// Enqueue scripts/styles
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('ns-style');
    wp_enqueue_script('ns-script');
});

// Enqueue backend scripts/styles
add_action('enqueue_block_editor_assets', function() {
    // Enqueue Block Styles
    wp_enqueue_style(
        'block-editor-styles',
        get_template_directory_uri() . '/dist/styles/block-editor-styles.css',
        false,
        '1.0',
        'all'
    );

    // No need to register, we can't use this script on the frontend
    wp_enqueue_script(
        'gutenberg-blocks',
        get_template_directory_uri() . '/src-admin/scripts/gutenberg-blocks.js',
        [ 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ]
    );
});
