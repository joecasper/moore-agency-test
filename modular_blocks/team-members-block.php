<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $show_all = get_sub_field('show_all');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="team mb-32" >
    <header class="text-center mb-8" data-aos="fade-up">
        <h2 class="divided-block__headline"><?= $heading ?></h2>
    </header>
    <div class="team-members">
        <?php
            if ( $show_all ) {
                $args = array(
                    'post_type'   => array( 'team_members' ),
                    'post_status' => array( 'publish' ),
                    'orderby'     => 'menu_order', 
                    'order'       => 'ASC',
                    'nopaging'    => true,
                );
                $team_members = new WP_Query( $args );

                while( $team_members->have_posts() ) {
                    $team_members->the_post();  
                    include('partials/team-member.php');
                }
                wp_reset_postdata();
            } else {
                $team_members = get_sub_field('team_members');

                if ( $team_members ) {
                    foreach( $team_members as $post ) {
                        setup_postdata($post);
                        include('partials/team-member.php');
                    }
                    wp_reset_postdata();
                }
            }
        ?>
    </div>
</section>