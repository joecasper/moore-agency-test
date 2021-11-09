<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="main-padding">
    <h2 class="bar-slider__headline " data-aos="fade-up"><?= $heading ?></h2>
    <?php if( have_rows('callouts') ):?>
        <?php while( have_rows('callouts') ) : the_row(); ?>
            <?php
                $title = get_sub_field('title');
                $content = get_sub_field('content');
            ?>
            <div class="card" data-aos="fade-up">
                <h3 class="card__title"><?= $title ?></h3>
                <div class="text-block">
                    <?= $content ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>