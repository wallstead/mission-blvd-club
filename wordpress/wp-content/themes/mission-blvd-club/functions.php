<?php
namespace NobleStudios;

// This thing includes everything in a folder...yay.
function includeFilesInFolder($folder)
{
    if (!empty($folder)) {
        foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . '*') as $path) {
            if (preg_match('/\.php$/', $path)) {
                require_once $path;
            }
        }
    }
}

/**** Include all the theme customization files. ****/

// Set up assets, menus, and other defaults
includeFilesInFolder('inc/core');

// Set up Custom Taxonomies
includeFilesInFolder('inc/taxonomies');

// Set up Post Types
includeFilesInFolder('inc/post-types');

// Add all our custom block
includeFilesInFolder('inc/blocks');

// Include custom classes and features
includeFilesInFolder('inc/custom');

// Include our helper functions
includeFilesInFolder('inc/helpers');

/**** Beyond here exist Hooks and Filters to make the theme go zoom.  ****/

// Move Yoast to bottom of admin interface
add_filter( 'wpseo_metabox_prio', function() {
    return 'low';
});
