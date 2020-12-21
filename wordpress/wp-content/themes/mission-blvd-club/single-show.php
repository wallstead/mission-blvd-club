<?php get_header(); ?>

<?php 
    $fields = get_fields();
    $socials = $fields['show_social-links'];

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
<main id="content" class="js-body">
    <div class="open-content">
        <div class="open-content__container container --bottom-fade">
            <div class="open-content__constrained-container">
                <section class="detail --show animate__animated animate__fadeIn">
                    <div class="detail__inner-container container">
                        <div class="detail__info-container">
                            <div class="detail__info">
                                <div class="detail__title-container">
                                    <h1 class="detail__title" data-bg-title="<?= get_the_title() ?>"><?= get_the_title() ?></h1>
                                </div>
                                <picture class="detail__image-container">
                                    <img class="detail__image" src="<?= get_the_post_thumbnail_url(null, 'medium_large') ?>" alt="<?= the_title() ?>">
                                </picture>

                                <?php if (!empty($socials)) : ?>
                                    <div class="detail__socials">
                                        <?php foreach ($socials as $social_name => $social_link) : ?>
                                            <?php $clean_social_name = str_replace('show_', '', $social_name); ?>
                                            <?php if (!empty($social_link)) : ?>
                                                <a href="<?= $social_link; ?>" class="detail__social-link" title="<?= $clean_social_name; ?>">
                                                    <div class="detail__social-icon">
                                                        <i class="fab fa-<?= $clean_social_name; ?>"></i>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="detail__details">
                            <?php if ($dj_query->post_count > 1) : ?>
                                <div class="detail__associated-with">
                                    <p class="detail__associated-with-title">Hosted by</p>
                                    <?php foreach ($dj_query->posts as $index => $dj) : ?>
                                        <?php
                                            $extra_text = '';
                                            
                                            if ($dj_query->post_count == 1) {
                                                $extra_text = '';
                                            } else if ($dj_query->post_count == 2) {
                                                if ($index == 0) {
                                                    $extra_text = ' and ';
                                                }
                                            } else {
                                                // last show
                                                if ($index == $dj_query->post_count - 1) {
                                                    $extra_text = '';
                                                } else if ($index == $dj_query->post_count - 2) {
                                                    $extra_text = ', and ';
                                                } else {
                                                    $extra_text = ', ';
                                                }
                                            }
                                        ?>
                                        <a href="<?= get_the_permalink($dj->ID) ?>" class="detail__associated-link">
                                            <div class="detail__associated">
                                                <img class="detail__associated-image" src="<?= get_the_post_thumbnail_url($dj->ID, 'medium') ?>" alt="<?= the_title($dj->ID) ?>" title="<?= the_title($dj->ID) ?>">
                                                <p class="detail__associated-name"><span class="detail__associated-name-only"><?= $dj->post_title ?></span><span class="detail__associated-name-extra"><?= $extra_text ?></span></p>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <div class="detail__content open-content__entry-point">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php get_footer();
