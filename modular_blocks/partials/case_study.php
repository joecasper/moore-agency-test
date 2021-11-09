<?php
    $thumbnail = get_field('thumbnail_image');
    
    $type = get_field('type');
    if ( $type == 'product' ) {
        $label = 'Product';
    } else {
        $label = 'Work';
    }
?>

<div class="alternating-block js-ab-<?= $counter ?>">
    <a href="<?= the_permalink() ?>" class="alternating-block__visual" data-aos-anchor=".js-ab-<?= $counter ?>" <?php if($counter % 2 == 0) { echo 'data-aos="fade-right"'; } else { echo 'data-aos="fade-left"'; } ?>>
        <div class="alternating-block__visual-pattern"></div>
        <img src="<?php echo esc_url($thumbnail['url']); ?>" class="w-full" alt="<?php echo esc_attr($thumbnail['alt']); ?>">
    </a>
    <div class="alternating-block__text">
        <h2 class="alternating-block__headline" data-aos-anchor=".js-ab-<?= $counter ?>" <?php if($counter % 2 == 0) { echo 'data-aos="fade-right"'; } else { echo 'data-aos="fade-left"'; } ?> data-aos-delay="200">
            <?= the_title() ?>
        </h2>
        <p class="alternating-block__copy" data-aos-anchor=".js-ab-<?= $counter ?>" <?php if($counter % 2 == 0) { echo 'data-aos="fade-right"'; } else { echo 'data-aos="fade-left"'; } ?> data-aos-delay="400">
            <?php echo get_the_excerpt() ?>
        </p>
        <a href="<?= the_permalink() ?>" class="arrow-link " data-aos-anchor=".js-ab-<?= $counter ?>" <?php if($counter % 2 == 0) { echo 'data-aos="fade-right"'; } else { echo 'data-aos="fade-left"'; } ?> data-aos-delay="600">View <?= $label ?> Case Study<div class="arrow-link__arrow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                    <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                </svg>
            </div>
        </a>
    </div>
</div>