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
$linkCount = count($mainNav);
$logoIndex = $linkCount/2 ;
?>

<body <?php body_class(); ?>>
    <header id="masthead" class="header js-header" role="banner">
        <a class="screen-reader-text skip-link" href="#content">Skip to content</a>
        <nav class="header__nav container">
            <?php if (isset($mainNav) && !empty($mainNav)) : ?>
                <?php for ($i=0; $i < $linkCount + 1; $i++): ?>
                    <?php if ($i == $logoIndex): ?>
                        <div class="header__main-nav-link-container">
                            <a href="#" class="header__main-nav-link"><div class="header__logo"></div></a>
                        </div>
                    <?php elseif ($i < $logoIndex): ?>
                        <div class="header__main-nav-link-container">
                            <a href="#" class="header__main-nav-link"><?= $mainNav[$i]->title; ?></a>
                        </div>
                    <?php elseif ($i > $logoIndex): ?>
                        <div class="header__main-nav-link-container">
                            <a href="#" class="header__main-nav-link"><?= $mainNav[$i-1]->title; ?></a>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php endif; ?>
        </nav>
    </header>