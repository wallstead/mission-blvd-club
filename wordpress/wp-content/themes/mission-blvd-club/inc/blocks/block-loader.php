<?php
/**** Register our blocks ****/
function register_acf_block_types() {

    // acf_register_block_type(array(
    //     'name'              => 'hero-section',
    //     'title'             => __('Hero Section'),
    //     'description'       => __('Custom Hero section block'),
    //     'render_template'   => 'inc/blocks/templates/hero-section.php',
    //     'category'          => 'common',
    //     'icon'              => 'format-image',
    //     'keywords'          => array( 'hero', 'section' ),
    //     'align'             => 'full',
    //     'supports'          => array(
    //         'align'         => array('wide', 'full'),
    //         'multiple'      => false
    //     ),
    //     'mode'              => 'auto',
    // ));


    
}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
