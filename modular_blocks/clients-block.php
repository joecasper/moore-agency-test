<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $show_all = get_sub_field('show_all');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="bar-slider" data-aos="fade-left">
    <h2 class="bar-slider__headline"><?= $heading ?></h2>
    <div class="bar-slider__slider">
            <button class="client-quotes__control client-quotes__control--prev js-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#EA168C" stroke-linecap="square"></path>
            </svg>
        </button>
        <div class="bar-slider__slides js-clients-slider">
            <?php
                if ( $show_all ) {
                    $args = array(
                        'post_type'   => array( 'clients' ),
                        'post_status' => array( 'publish' ),
                        'orderby'     => 'menu_order', 
                        'order'       => 'ASC',
                        'nopaging'    => true,
                    );
                    $clients = new WP_Query( $args );

                    while( $clients->have_posts() ) {
                        $clients->the_post();  
                        include('partials/client.php');
                    }
                    wp_reset_postdata();
                } else {
                    $clients = get_sub_field('clients');

                    if ( $clients ) {
                        foreach( $clients as $post ) {
                            setup_postdata($post);
                            include('partials/client.php');
                        }
                        wp_reset_postdata();
                    }
                }
            ?>
        </div>
            <button class="client-quotes__control client-quotes__control js-next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#EA168C" stroke-linecap="square"></path>
            </svg>
        </button>
    </div>
</section>