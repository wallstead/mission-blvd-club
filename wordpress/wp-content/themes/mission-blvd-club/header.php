
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div class="site js-site" id="site">
        <?php
        $menuBuilder = new MenuBuilder();
        $mainNav = $menuBuilder->buildNav('Main Navigation');
        global $wp;
        $current_url = home_url($wp->request) . '/';
        ?>
        <header id="masthead" class="site__header js-header" role="banner">
            <a class="screen-reader-text skip-link" href="#content">Skip to content</a>
            <div class="header">
                <div class="header__container">
                    <div class="header__main">
                        <a href="<?= esc_url(home_url('/')) ?>" class="header__logo gtm-header-logo">
                            <div class="logo <?php if ($blue_logo) : ?>--blue<?php endif; ?>"></div>
                        </a>
                        <div class="header__main-content js-main-content">
                            <nav class="header__main-nav" aria-label="Main Navigation">
                                <?php if (isset($mainNav) && !empty($mainNav)) : ?>
                                    <ul class="header__main-nav-items js-header-main-items">
                                        <?php foreach ($mainNav as $key => $navItem) : ?>
                                            <li class="header__main-nav-item js-header-main-item <?php if ($navItem->url == $current_url) { echo '--active'; } ?>" data-item-key="<?= $key ?>">
                                                <?php if (isset($navItem->url) && !empty($navItem->url) && empty($navItem->children)) : ?>
                                                    <div href="<?= $navItem->url ?>" class="header__main-nav-item-link" <?php if ($navItem->target != '') { echo 'target="' . $navItem->target . '"'; } ?>><?= $navItem->title; ?></div>
                                                <?php else : ?>
                                                    <div href="<?= $navItem->url ?>" class="header__main-nav-item-link --children" <?php if ($navItem->target != '') { echo 'target="' . $navItem->target . '"'; } ?>><?= $navItem->title; ?></div>
                                                <?php endif; ?>
                                                <?php if (isset($navItem->children) && !empty($navItem->children)) : ?>
                                                    <button type="button" class="header__main-nav-item-button js-header-dropdown-button" data-key="<?= $key ?>">
                                                        <?= $navItem->title; ?>
                                                        <svg class="carat-icon" width="12" height="22" viewBox="0 0 12 22" xmlns="http://www.w3.org/2000/svg"><path d="M-1.144 3.357L2.052.144l7.845 7.804.051-.048 3.196 3.213-.034.032.034.03-3.196 3.212-.05-.045-7.846 7.802-3.196-3.214 7.83-7.785z" fill="#242726" fill-rule="evenodd"/></svg>
                                                    </button>
                                                    <div class="header__main-nav-dropdown js-header-dropdown" data-dropdown-key="<?= $key ?>">
                                                        <ul class="dropdown__container">
                                                            <?php foreach ($navItem->children as $child) : ?>
                                                                <div class="dropdown__section">
                                                                    <li class="dropdown__item --big">
                                                                        <a href="<?= $child->url; ?>" class="dropdown__item-link gtm-header-nav-item" <?php if ($child->target != '') { echo 'target="' . $child->target . '"'; } ?>>
                                                                            <?= $child->title; ?>
                                                                            <svg class="carat-icon" width="12" height="22" viewBox="0 0 12 22" xmlns="http://www.w3.org/2000/svg"><path d="M-1.144 3.357L2.052.144l7.845 7.804.051-.048 3.196 3.213-.034.032.034.03-3.196 3.212-.05-.045-7.846 7.802-3.196-3.214 7.83-7.785z" fill="#242726" fill-rule="evenodd"/></svg>
                                                                        </a>
                                                                    </li>

                                                                    <?php if (count($child->children) > 0) : ?>
                                                                        <div class="dropdown__link-collection">
                                                                            <?php foreach ($child->children as $grandChild) : ?>
                                                                                <li class="dropdown__item">
                                                                                    <a href="<?= $grandChild->url; ?>" class="dropdown__item-link gtm-header-sub-nav-item" <?php if ($grandChild->target != '') { echo 'target="' . $grandChild->target . '"'; } ?>><?= $grandChild->title; ?></a>
                                                                                </li>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                        <button class="header__main-nav-item --search js-search" type="button" aria-label="Open Search">
                                            <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path d="M5.199 9.197c0-4.05 3.295-7.345 7.345-7.345s7.345 3.295 7.345 7.345-3.295 7.346-7.345 7.346-7.345-3.296-7.345-7.346zM1.309 22l5.57-5.571a9.144 9.144 0 005.665 1.966c5.071 0 9.198-4.126 9.198-9.198S17.616 0 12.544 0C7.473 0 3.346 4.125 3.346 9.197c0 2.268.83 4.344 2.196 5.95L0 20.69 1.31 22z" fill="#242726" fill-rule="evenodd"/></svg>
                                        </button>
                                        <?php nsGetTemplatePart('template-parts/components/global/mini-search'); ?>
                                    </ul>
                                <?php endif; ?>
                            </nav>
                        </div>
                        <button class="header__button --menu js-toggle-menu" aria-label="Toggle Menu"></button>
                    </div>
                </div>
            </div>
            <div class="conversion-header">
                <a href="<?= esc_url(home_url('/')) ?>" class="conversion-header__logo gtm-header-conversion-logo">
                    <div class="conversion-logo"></div>
                </a>
                <div class="nav-collection">
                    <a href="#" class="nav-link gtm-header-guides">Plan</a>
                    <a href="#" class="nav-link newsletter gtm-header-newsletter" aria-label="Newsletter"><span class="extra-text">Subscribe</span></a>
                    <a href="#" class="nav-link accommodations gtm-header-accommodations" aria-label="Accommodations"><span class="extra-text">Accommodations</span></a>
                </div>
            </div>
            <div class="weather-widget">
                <div class="weather-widget__weather">
                    <img class="weather-widget__weather-icon" src="<?= nsGetImageUrl('weather/sun-1.svg'); ?>" alt="">
                    <p class="weather-widget__temperature">73</p>
                    <p class="weather-widget__weather-quip">Psst. It’s gorgeous as F.</p>
                    <svg class="weather-widget__carat-icon" width="12" height="22" viewBox="0 0 12 22" xmlns="http://www.w3.org/2000/svg"><path d="M-1.144 3.357L2.052.144l7.845 7.804.051-.048 3.196 3.213-.034.032.034.03-3.196 3.212-.05-.045-7.846 7.802-3.196-3.214 7.83-7.785z" fill="#ffffff" fill-rule="evenodd"/></svg>
                    <a href="#" class="weather-widget__weather-link"></a>
                </div>
                <div class="weather-widget__other-info">
                    <div class="weather-widget__other">
                        <img src="<?= nsGetImageUrl('icons/car.svg'); ?>" alt="Road Conditions" class="weather-widget__other-icon">
                        <p class="weather-widget__other-title">Roads</p>
                        <a href="#" class="weather-widget__other-link"></a>
                    </div>
                    <div class="weather-widget__other">
                        <img src="<?= nsGetImageUrl('icons/webcam.svg'); ?>" alt="Webcams" class="weather-widget__other-icon">
                        <p class="weather-widget__other-title">Webcams</p>
                        <a href="#" class="weather-widget__other-link"></a>
                    </div>
                </div>
            </div>
            <div class="search-modal js-search-modal">
                <button class="search-modal__cancel js-search-cancel" type="button">
                    Cancel
                    <svg class="cancel-icon" width="23" height="23" viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg"><path d="M20.91 0L23 2.09l-9.41 9.41L23 20.91 20.91 23l-9.41-9.41L2.09 23 0 20.91l9.41-9.41L0 2.09 2.09 0l9.41 9.41L20.91 0z" fill="#FFF" fill-rule="evenodd"/></svg>
                </button>

                <form class="search-modal__form" method="get" action="<?php echo home_url('/'); ?>">
                    <input type="text" class="search-field" name="s" placeholder="What are you looking for?" value="<?php the_search_query(); ?>">
                    <button class="search-submit" type="submit">

                        <svg class="search-icon"  width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path d="M5.199 9.197c0-4.05 3.295-7.345 7.345-7.345s7.345 3.295 7.345 7.345-3.295 7.346-7.345 7.346-7.345-3.296-7.345-7.346zM1.309 22l5.57-5.571a9.144 9.144 0 005.665 1.966c5.071 0 9.198-4.126 9.198-9.198S17.616 0 12.544 0C7.473 0 3.346 4.125 3.346 9.197c0 2.268.83 4.344 2.196 5.95L0 20.69 1.31 22z" fill="#242726" fill-rule="evenodd"/></svg>

                    </button>
                </form>
            </div>
            <div class="dynamic-border js-nav-border"></div>
        </header>
