<?php
/* Template Name: Show Listing */
?>
<?php get_header(); ?>

<?php 
    $fields = get_fields();
    $prefix = 'listing_';
    
    $description = $fields[$prefix . 'description'];
?>
<main id="content" class="js-body">
    <div class="open-content">
        <div class="open-content__container container">
            <div class="open-content__constrained-container">
                <section class="listing-hero">
                    <div class="listing-hero__inner-container container">
                        <div class="listing-hero__info-container">
                            <div class="listing-hero__info animate__animated animate__fadeIn">
                                <div class="listing-hero__title-container">
                                    <h1 class="listing-hero__title" data-bg-title="<?= get_the_title() ?>"><?= get_the_title() ?></h1>
                                </div>
                                <div class="listing-hero__description"><?= $description ?></div>
                            </div>
                        </div>
                        <div class="listing-hero__listing">
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Pleasing Sounds for Human Ears</p>
                                        <p class="show-card__description">Hip-hop classics. Lorem ipsum.</p>
                                    </div>
                                </a>
                                
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.50.54-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Beneath the Surface</p>
                                        <p class="show-card__description">Hip-hop classics. Lorem ipsum dolor.</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.54.16-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Lost in Japan</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.55.49-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Still Spinning</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="">
                                        </picture>
                                        <p class="show-card__title">The Devil's Hour</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.50.54-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Sustainable Chatter</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.54.16-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Matters of Life</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.55.49-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Uppity</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Cinesthesia</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.50.54-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Ears to the Ground</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.54.16-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">Sinister Tales</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show-card animate__animated animate__fadeIn">
                                <a href="#" class="show-card__link">
                                    <div class="show-card__inner-container">
                                        <picture class="show-card__image-container">
                                            <img class="show-card__image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-4.55.49-PM.png" alt="">
                                        </picture>
                                        <p class="show-card__title">4 on the Floor</p>
                                    </div>
                                </a>
                                <div class="show-card__hosts-container">
                                    <p class="show-card__hosts-title">Hosts:</p>
                                    <div class="show-card__hosts-collection">
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy1" title="Guy1">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy2" title="Guy2">
                                            </a>
                                        </div>
                                        <div class="show-card__host-container">
                                            <a href="#" class="show-card__host-link">
                                                <img class="show-card__host-image" src="/wp-content/uploads/2020/11/Screen-Shot-2020-11-27-at-3.56.11-PM-e1606525247493.png" alt="Guy3" title="Guy3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php get_footer();
