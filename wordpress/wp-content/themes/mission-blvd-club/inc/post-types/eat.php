<?php
add_action('init', function() {
    register_post_type('eat', [
        'public' => true,
        'labels' => [
            'name' => 'Eat',
            'singular_name' => 'Eat',
            'add_new_item' => 'Add New Eat',
            'all_items' => 'All Eat',
            'edit_item' => 'Edit Eat',
        ],
        'show_ui' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-carrot',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'page-attributes'
        ],
        'taxonomies' => ['place-to-eat']
    ]);
});
