<?php
    $anchor_id = get_sub_field('anchor_id');
    $show_cta_button = get_sub_field('show_cta_button');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="alternating-blocks">
    <?php
        $case_studies = get_sub_field('case_studies');

        if ( $case_studies ) {
            $counter = 1;
            foreach( $case_studies as $post ) {
                setup_postdata($post);
                include('partials/case_study.php');
                $counter++;
            }
            wp_reset_postdata();
        }
    ?>
    <?php if ( $show_cta_button ): ?>
        <a href="<?= the_sub_field('cta_button_link'); ?>" class="button self-center"><?= the_sub_field('cta_button_text'); ?></a>
    <?php endif; ?>
</section>