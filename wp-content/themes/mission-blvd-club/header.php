<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/85d0c6c3ac.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&display=block" rel="stylesheet">

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
        <div class="header__mobile-logo-container">
            <a href="/" class="">
                <div class="header__mobile-logo"></div>
            </a>
        </div>
        <nav class="header__nav container">
            <?php if (isset($mainNav) && !empty($mainNav)) : ?>
                <?php for ($i=0; $i < $linkCount + 1; $i++): ?>
                    <?php if ($i == $logoIndex): ?>
                        <div class="header__main-nav-link-container --logo">
                            <a href="/" class=""><div class="header__logo"></div></a>
                        </div>
                    <?php elseif ($i < $logoIndex): ?>
                        <div class="header__main-nav-link-container">
                            <a href="<?= $mainNav[$i]->url; ?>" class="header__main-nav-link"><?= $mainNav[$i]->title; ?></a>
                        </div>
                    <?php elseif ($i > $logoIndex): ?>
                        <div class="header__main-nav-link-container">
                            <?php if (!empty($mainNav[$i-1]->children)): ?>
                                <div class="header__main-nav-link">
                                    <?= $mainNav[$i-1]->title; ?>
                                    <div class="header__nav-dropdown">
                                        <?php foreach ($mainNav[$i-1]->children as $child) : ?>
                                            <a href="<?= $child->url; ?>" class="header__dropdown-link"><?= $child->title; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <a href="<?= $mainNav[$i-1]->url; ?>" class="header__main-nav-link"><?= $mainNav[$i-1]->title; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php endif; ?>
        </nav>
        <div class="player js-player">
            <div
                class="radioplayer"
                data-src="http://streamer.radio.co/s01995b9a1/listen"
                data-playbutton="false"
                data-volumeslider="false"
                data-elapsedtime="false"
                data-nowplaying="false"
                data-showplayer="false"
                data-showartwork="false"
            >
                <div class="player__track-artwork-container">
                    <img src="" class="player__track-artwork js-artwork">
                </div>
                <div class="player__track-info">
                    <p class="player__now-playing"><span class="player__track-status js-track-status">Listen Live</span>: <span class="player__track-title js-track-title"></span><span class="player__track-time js-track-time"></span></p>
                </div>
                <button class="player__toggle-play js-toggle-play">
                    <i class="fas fa-play-circle js-play-icon player__toggle-play-icon --shown"></i>
                    <i class="fas fa-pause-circle js-pause-icon player__toggle-play-icon"></i>
                </button>

            </div>
        </div>
    </header>
