<?php
    $bg_image = $args['bg_image'];
    $tagline = get_field('hero_tagline');
    $title = get_field('hero_title');
    $num_columns = get_field('hero_num-columns');
    $single_column = get_field('hero_single-col');
    $left_column = get_field('hero_left-col');
    $right_column = get_field('hero_right-col');
    $images = get_field('hero_images');
    $num_images = 0;

    if(is_array($images)) {
        $num_images = sizeof($images);
    }
?>
<section class="basic-hero js-hero <?= $num_images == 0 ? '--no-images' : ''; ?> <?= "--$bg_image" ?>">
    <div class="basic-hero__overlay"></div>
    <div class="basic-hero__content container">
        <div class="basic-hero__text-content">
            <div class="basic-hero__intro-content">
                <?php if(!empty($tagline)) : ?>
                    <p class="basic-hero__subtitle"><?= $tagline; ?></p>
                <?php endif; ?>
                <?php if(!empty($title)) : ?>
                    <p class="basic-hero__title"><?= $title; ?></p>
                <?php endif; ?>
            </div>
            <?php if($num_columns != 0) : ?>
                <div class="basic-hero__more-content">
                    <?php if($num_columns == 1) : ?>
                        <div class="basic-hero__more-content-column">
                            <p><?= $single_column; ?></p>
                        </div>
                    <?php elseif($num_columns == 2) : ?>
                        <div class="basic-hero__more-content-column">
                            <p><?= $left_column; ?></p>
                        </div>
                        <div class="basic-hero__more-content-column">
                            <p><?= $right_column; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if($num_images != 0): ?>
            <div class="basic-hero__images-container">
                <?php if($num_images == 1): ?>
                    <img class="basic-hero__image" src="<?= $images[0]['url']; ?>" alt="<?= $images[0]['alt']; ?>">
                <?php else: ?>
                    <?php nsGetTemplatePart('template-parts/components/image-slider', null, [
                        'images' => $images
                    ]); ?>
                <?php endif; ?>
                <div class="basic-hero__blank-space"></div>
                <div class="basic-hero__images-tree"></div>
            </div>
        <?php else: ?>
            <div class="basic-hero__tree"></div>
        <?php endif; ?>
    </div>
    <div class="basic-hero__dynamic-border js-hero-border"></div>
</section>
