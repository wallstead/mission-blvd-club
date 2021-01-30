<?php
add_action('init', function() {
    register_post_type('show', [
        'public' => true,
        'labels' => [
            'name' => 'Shows',
            'singular_name' => 'Show',
            'add_new_item' => 'Add New Show',
            'all_items' => 'All Shows',
            'edit_item' => 'Edit Show',
        ],
        'show_ui' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-microphone',
        'supports' => [
            'title',
            'thumbnail',
            'editor',
            'excerpt',
        ],
    ]);
});
