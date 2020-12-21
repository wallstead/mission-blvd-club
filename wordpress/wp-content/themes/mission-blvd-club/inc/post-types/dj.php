<?php
add_action('init', function() {
    register_post_type('dj', [
        'public' => true,
        'labels' => [
            'name' => 'DJs',
            'singular_name' => 'DJ',
            'add_new_item' => 'Add New DJ',
            'all_items' => 'All DJs',
            'edit_item' => 'Edit DJ',
        ],
        'show_ui' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
    ]);
});
