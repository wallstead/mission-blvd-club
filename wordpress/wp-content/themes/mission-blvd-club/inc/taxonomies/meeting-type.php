<?php
add_action('init', function() {
    $labels = [
        'name' => __( 'Meeting Types' ),
        'singular_name' => __( 'Meeting Type' ),
        'search_items' => __( 'Search Meeting Types' ),
        'all_items' => __( 'All Meeting Types' ),
        'parent_item' => __( 'Parent Meeting Type' ),
        'parent_item_colon' => __( 'Parent Meeting Type:' ),
        'edit_item' => __( 'Edit Meeting Type' ),
        'update_item' => __( 'Update Meeting Type' ),
        'add_new_item' => __( 'Add New Meeting Type' ),
        'new_item_name' => __( 'New Meeting Type' ),
        'menu_name' => __( 'Meeting Types' ),

    ];

    register_taxonomy(
        'meeting-type',
        [],
        [
            'labels' => $labels,
            'show_in_rest' => true,
            'hierarchical' => true,
            'public' => true
        ]
    );
}, 0);
