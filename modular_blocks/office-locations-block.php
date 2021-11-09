<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
    $show_all = get_sub_field('show_all');
    $show_cta_button = get_sub_field('show_cta_button');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="main-bottom-margin">
    <div class="centered-block centered-block--narrow" data-aos="fade-up"  >
        <h2 class="centered-block__headline">
            <?= $heading ?>
        </h2>
        <div class="text-block">
            <?= $content ?>
        </div>
    </div>
    <div class="offices">
        <?php
            if ( $show_all ) {
                $args = array(
                    'post_type'   => array( 'locations' ),
                    'post_status' => array( 'publish' ),
                    'orderby'     => 'menu_order', 
                    'order'       => 'ASC',
                    'nopaging'    => true,
                );
                $locations = new WP_Query( $args );
                $counter = 0;

                while( $locations->have_posts() ) {
                    $locations->the_post();  
                    include('partials/office-location.php');
                }
                wp_reset_postdata();
            } else {
                $locations = get_sub_field('locations');
                
                if ( $locations ) {
                    foreach( $locations as $post ) {
                        setup_postdata($post);
                        include('partials/office-location.php');
                    }
                    wp_reset_postdata();
                }
            }
        ?>
    </div>
    <?php if ( $show_cta_button ): ?>
        <div class="flex justify-center">
            <a href="<?= the_sub_field('cta_button_link'); ?>" class="button"><?= the_sub_field('cta_button_text'); ?></a>
        </div>
    <?php endif; ?>
</section>