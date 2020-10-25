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
        <nav class="header__nav container">
            <a href="#" class="header__main-nav-link">One</a>
            <a href="#" class="header__main-nav-link">Two</a>
            <a href="#" class="header__main-nav-link"><div class="header__logo"></div></a>
            <a href="#" class="header__main-nav-link">Three</a>
            <a href="#" class="header__main-nav-link">Four</a>
        </nav>
    </header>