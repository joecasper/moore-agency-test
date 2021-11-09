<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $show_all = get_sub_field('show_all');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="client-quotes" data-aos="fade-up">
    <h2 class="client-quotes__headline">
        <?= $heading ?>
    </h2>
    <div class="client-quotes__slider">
        <button class="client-quotes__control client-quotes__control--prev js-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#EA168C" stroke-linecap="square"></path>
            </svg>
        </button>
        <div class="client-quotes__slides js-pattern js-testimonials-slider">
            <?php
                if ( $show_all ) {
                    $args = array(
                        'post_type'   => array( 'testimonials' ),
                        'post_status' => array( 'publish' ),
                        'orderby'     => 'menu_order', 
                        'order'       => 'ASC',
                        'nopaging'    => true,
                    );
                    $testimonials = new WP_Query( $args );

                    while( $testimonials->have_posts() ) {
                        $testimonials->the_post();  
                        include('partials/testimonial.php');
                    }
                    wp_reset_postdata();
                } else {
                    $testimonials = get_sub_field('testimonials');

                    foreach( $testimonials as $post ) {
                        setup_postdata($post);
                        include('partials/testimonial.php');
                    }
                    wp_reset_postdata();
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