<?php
/* Template Name: Homepage */
?>
<?php get_header(); ?>
<main id="content" class="js-body">
    <div class="open-content">
        <div class="open-content__container container">
            <div class="open-content__constrained-container">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();
