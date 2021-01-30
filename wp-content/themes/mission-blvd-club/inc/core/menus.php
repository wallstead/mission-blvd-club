<?php // Set up meganavs, footer navs, and other menus

add_action('after_setup_theme', function() {
    // Menu registration example:
    register_nav_menu('main-nav', 'Main Navigation');
});
