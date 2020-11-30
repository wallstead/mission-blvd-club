<?php
/* Template Name: Show Listing */
?>
<?php get_header(); ?>

<?php 
    $fields = get_fields();
    $prefix = 'listing_';
    
    $description = $fields[$prefix . 'description'];

    // get the shows
    $query = new WP_Query( array(
        'post_type' => 'show',
    ) );
?>  
<main id="content" class="js-body">
    <div class="open-content">
        <div class="open-content__container container">
            <div class="open-content__constrained-container">
                <section class="listing">
                    <div class="listing__inner-container container">
                        <div class="listing__info-container">
                            <div class="listing__info animate__animated animate__fadeIn">
                                <div class="listing__title-container">
                                    <h1 class="listing__title" data-bg-title="<?= get_the_title() ?>"><?= get_the_title() ?></h1>
                                </div>
                                <div class="listing__description"><?= $description ?></div>
                            </div>
                        </div>
                        <div class="listing__listing">
                            <?php if ( $query->have_posts() ) : ?>
                                <?php while( $query->have_posts() ) : $query->the_post() ?>
                                    <?php 
                                        $dj_query = new WP_Query( array(
                                            'post_type' => 'dj',
                                            'meta_query' => array(
                                                array(
                                                    'key' => 'dj_shows', // name of custom field
                                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                                    'compare' => 'LIKE'
                                                )
                                            )
                                        ) );
                                    ?>
                                    <div class="detail-card animate__animated animate__fadeIn">
                                        <a href="<?= get_the_permalink() ?>" class="detail-card__link">
                                            <div class="detail-card__inner-container">
                                                <picture class="detail-card__image-container">
                                                    <img class="detail-card__image" src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?= the_title() ?>">
                                                </picture>
                                                <p class="detail-card__title"><?= the_title() ?></p>
                                                <?php if (!empty(get_the_excerpt())): ?>
                                                    <p class="detail-card__description"><?= get_the_excerpt() ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                        <div class="detail-card__pairings-container">
                                            <p class="detail-card__pairings-title">Host<?= $dj_query->post_count > 1 ? 's' : '' ?>:</p>
                                            <div class="detail-card__pairings-collection">
                                                <?php if ( $dj_query->have_posts() ) : ?>
                                                    <?php while( $dj_query->have_posts() ) : $dj_query->the_post() ?>
                                                        <div class="detail-card__pairing-container">
                                                            <a href="<?= get_the_permalink() ?>" class="detail-card__pairing-link">
                                                                <img class="detail-card__pairing-image" src="<?= get_the_post_thumbnail_url(null, 'thumbnail') ?>" alt="<?= the_title() ?>" title="<?= the_title() ?>">
                                                            </a>
                                                        </div>
                                                    <?php endwhile ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php get_footer();
