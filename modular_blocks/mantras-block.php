<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
    $show_all = get_sub_field('show_all');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="mantras-section">
    <header class="mantras-section__header" data-aos="fade-up">
        <h2 class="mantras-section__headline">
            <?= $heading ?>
        </h2>
        <p class="text-center">
            <?= $content ?>
        </p>
    </header>
    <div class="mantras main-padding">
        <?php
            $counter = 1; 

            if ( $show_all ) {
                $args = array(
                    'post_type'   => array( 'mantras' ),
                    'post_status' => array( 'publish' ),
                    'orderby'     => 'menu_order', 
                    'order'       => 'ASC',
                    'nopaging'    => true,
                );
                $mantras = new WP_Query( $args );

                while( $mantras->have_posts() ) {
                    $mantras->the_post();  
                    include('partials/mantra.php');
                    $counter++;
                }
                wp_reset_postdata();
            } else {
                $mantras = get_sub_field('mantras');

                if ( $mantras ) {
                    foreach( $mantras as $post ) {
                        setup_postdata($post);
                        include('partials/mantra.php');
                        $counter++;
                    }
                    wp_reset_postdata();
                }
            }
        ?>
    </div>
</section>