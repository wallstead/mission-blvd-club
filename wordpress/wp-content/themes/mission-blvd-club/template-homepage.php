<?php
    /* Template Name: Homepage */
?>
<?php get_header(); ?>
<main id="content" class="site__body js-site-body home-content">
    <?php nsGetTemplatePart('template-parts/components/heros/homepage-hero'); ?>

    <div class="open-content">
        <div class="open-content__container container">
            <div class="open-content__constrained-container">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();
