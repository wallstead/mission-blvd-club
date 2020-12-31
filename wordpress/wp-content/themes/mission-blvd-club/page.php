<?php get_header(); ?>

<?php 
    $fields = get_fields();
    
    $images = $fields['slider_images'];
?>

<main id="content" class="js-body">
    <div class="open-content">
        <div class="open-content__container container">
            <div class="open-content__constrained-container">
                <?php if (!empty($images)): ?>
                    <section class="slider-hero js-slider-hero swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                        </div>
                    </section>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();

