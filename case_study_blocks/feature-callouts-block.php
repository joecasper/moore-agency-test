<?php
    $heading = get_sub_field('heading');
?>

<section class="main-padding">
    <h2 class="bar-slider__headline "><?= $heading ?></h2>
    <?php if( have_rows('callouts') ):?>
        <?php while( have_rows('callouts') ) : the_row(); ?>
            <?php
                $title = get_sub_field('title');
                $content = get_sub_field('content');
            ?>
            <div class="card">
                <h3 class="card__title"><?= $title ?></h3>
                <div class="text-block">
                    <?= $content ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>