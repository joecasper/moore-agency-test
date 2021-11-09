<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $subheading = get_sub_field('subheading');
    $content = get_sub_field('content');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="main-padding main-bottom-margin">
    <div class="divided-block">
        <div class="divided-block__left">
            <div data-aos="fade-right"  >
                <h2 class="divided-block__headline"><?= $heading ?></h2>
            </div>
            <div class="divided-block__divider " data-aos="fade"  ></div>
        </div>
        <div class="divided-block__right" data-aos="fade-left"  >
            <!-- <div class="divided-block__divider divided-block__divider--mobile"></div> -->
            <div class="text-block">
                <?php if( $subheading ): ?>
                    <h3 class="text-block__bold-headline"><?= $subheading ?></h3>
                <?php endif; ?>
                <?= $content ?>
            </div>
            <?php if( have_rows('accordion_content') ): ?>
                <div class="services">
                    <?php while( have_rows('accordion_content') ) : the_row(); ?>
                        <?php
                            $accordion_item_title = get_sub_field('accordion_item_title');
                            $accordion_item_content = get_sub_field('accordion_item_content');
                        ?>
                        <?php if ( $accordion_item_content ): ?>
                            <div class="service">
                                <button class="service__button js-service">
                                    <h3 class="service__text"><?= $accordion_item_title ?></h3>
                                </button>
                                <div class="service__content text-block">
                                    <?= $accordion_item_content ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <h3 class="service__text"><?= $accordion_item_title ?></h3>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>