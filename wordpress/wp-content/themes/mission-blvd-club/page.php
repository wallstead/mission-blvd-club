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
                            <?php foreach ($images as $image) : ?>
                                <?php $image_data = $image['slider_image']; ?>
                                <img src="<?= $image_data['sizes']['large'] ?>" alt="<?= $image_data['alt'] ?>" class="slider-hero__image swiper-slide">
                            <?php endforeach; ?>
                        </div>
                    </section>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();

