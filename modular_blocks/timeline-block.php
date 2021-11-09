<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="centered-block" data-aos="xzoom-in"  >
    <h2 class="centered-block__headline">
        How We Got Here
    </h2>
    <div class="text-block">
        <p>
            A milestone of nearly 30 years is one that many businesses don’t celebrate. About 50 percent of businesses fail within their first five years. As one of the largest privately owned agencies in the nation, we’re stronger than ever and ready to forge ahead into the next 30 years with boldness steeped in a longstanding history of results. Take a walk down memory lane with us.
        </p>
    </div>
</section>
<?php 
    $num_events = count( get_sub_field('timeline_events') );
    $counter = 1;
?>
<?php if ( $num_events ): ?>
    <section class="timeline">
        <?php while( have_rows('timeline_events') ) : the_row(); ?>
            <?php
                $event_image = get_sub_field('image');
                $event_heading = get_sub_field('heading');
                $event_subheading = get_sub_field('subheading');
                $event_content = get_sub_field('content');
            ?>
            <div class="timeline-block">
                <div class="timeline-block__image <?php if ( $counter == 1 ): ?> pt-8 <?php elseif ( $counter == ($num_events - 1) ): ?> mb-6 <?php endif; ?>" <?php if ( $counter % 2 == 0 ): ?> data-aos="fade-left" <?php else: ?> data-aos="fade-right" <?php endif; ?>>
                    <img src="<?= $event_image['url'] ?>" alt="<?= $event_image['alt'] ?>">
                </div>
                <div class="timeline-block__line">
                    <div class="timeline-block__dot <?php if ( $counter == 1 ): ?>timeline-block__dot--first<?php endif; ?>" <?php if ( $counter != 1 ): ?> data-aos="xzoom-in" <?php endif; ?>></div>
                </div>
                <div class="timeline-block__content <?php if ( $counter == 1 ): ?> pt-8 <?php elseif ( $counter == ($num_events - 1) ): ?> mb-6 <?php endif; ?>" <?php if ( $counter % 2 == 0 ): ?> data-aos="fade-right" <?php else: ?> data-aos="fade-left" <?php endif; ?>>
                    <h2 class="timeline-block__date"><?= $event_heading ?></h2>
                    <div class="timeline-block__pattern"></div>
                    <h3 class="timeline-block__headline">
                        <?= $event_subheading ?>
                    </h3>
                    <div class="text-block">
                        <?= $event_content ?>
                    </div>
                </div>
            </div>
            <?php $counter++ ?>
        <?php endwhile; ?>
    </section>
<?php endif; ?>