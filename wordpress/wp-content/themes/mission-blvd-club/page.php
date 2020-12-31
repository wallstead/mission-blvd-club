<?php get_header(); ?>

<?php 
    $fields = get_fields();
    
    $images = $fields['slider_images'];
?>

<main id="content" class="js-body">
    <?php if (!empty($images)): ?>
        <section class="slider-hero js-slider-hero swiper-container">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($images as $image) : ?>
                    <?php $image_data = $image['slider_image']; ?>
                    <div class="swiper-slide">
                        <img src="<?= $image_data['sizes']['large'] ?>" alt="<?= $image_data['alt'] ?>" class="slider-hero__image">
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
    <div class="open-content">
        <div class="open-content__container container --bottom-fade">
            <div class="open-content__constrained-container">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();

