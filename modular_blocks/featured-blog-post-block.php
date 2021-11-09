<?php
    $anchor_id = get_sub_field('anchor_id');
    $heading = get_sub_field('heading');
    $featured_category = get_sub_field('featured_category');
    $featured_tag = get_sub_field('featured_tag');
    $archive_link_text = get_sub_field('archive_link_text');
    $post_link_text = get_sub_field('post_link_text');
?>

<section <?php if ( $anchor_id ): ?> id="<?= $anchor_id ?>" <?php endif; ?> class="nav-padding">
    <div class="divided-block">
        <div class="divided-block__left">
            <div data-aos="fade-right"  >
                <h2 class="divided-block__headline"><?= $heading ?></h2>
                <a href="<?php echo esc_url( get_term_link( $featured_category ) ); ?>" class="arrow-link "><?= $archive_link_text ?><div class="arrow-link__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                            <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="divided-block__divider" data-aos="fade"></div>
        </div>
        <div class="divided-block__right" data-aos="fade-left"  >
            <?php
                $args = array(
                    'post_type'      => array( 'post' ),
                    'cat'            => $featured_category->term_id,
                    'tag_id'         => $featured_tag->term_id,
                    'post_status'    => array( 'publish' ),
                    'orderby'        => 'date', 
                    'order'          => 'DESC',
                    'posts_per_page' => 1,
                );
                $posts = get_posts( $args );

                foreach( $posts as $post ) : setup_postdata( $post );
                    include('partials/featured-post.php');
                    
                    wp_reset_postdata(); 
                endforeach;
            ?>
        </div>
    </div>
</section>