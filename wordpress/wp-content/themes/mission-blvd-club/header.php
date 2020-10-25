<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<?php
$menuBuilder = new MenuBuilder();
$mainNav = $menuBuilder->buildNav('Main Navigation');
?>

<body <?php body_class(); ?>>
    <header id="masthead" class="header js-header" role="banner">
        <a class="screen-reader-text skip-link" href="#content">Skip to content</a>
        <p>header</p>
    </header>