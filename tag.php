<?php get_header(); ?>

<?php
    $term_title_length = strlen( single_term_title('', 0) )
?>

<header class="hero ">
    <div class="relative">
        <h1 class="hero__title <?php if ( $term_title_length > 8 ): ?>hero__title--small<?php endif; ?> hero__title--cta">
            <div class="hero__title-text <?php if ( $term_title_length > 8 ): ?>hero__title-text--small<?php endif; ?>" itemprop="name">
                <span><?php single_term_title(); ?></span>
            </div>
            <div class="hero__title-text hero__title-text--white <?php if ( $term_title_length > 8 ): ?>hero__title-text--small<?php endif; ?>" itemprop="name">
                <span><?php single_term_title(); ?></span>
            </div>
        </h1>
        <?php
            $tag = get_queried_object();
            
            $args = array(
                'post_type'      => array( 'post' ),
                'tag_id'         => $tag->term_id,
                'post_status'    => array( 'publish' ),
                'orderby'        => 'date', 
                'order'          => 'DESC',
                'posts_per_page' => 1,
            );
            $featured_post = get_posts( $args );
        ?>
        <?php foreach( $featured_post as $post ) : setup_postdata( $post ); ?>
            <?php the_post_thumbnail('full', array('class' => 'hero__image')); ?>
            </div>
            <a href="<?= the_permalink() ?>" class="arrow-link arrow-link--cta">
                <?= the_title() ?>
                <div class="arrow-link__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                    </svg>
                </div>
            </a>
            <div class="hero__scroller"></div>
            <?php wp_reset_postdata(); ?>
        <?php endforeach; ?>
</header>
<section class="blog-feed">
    <header class="blog-filters js-pattern" data-aos="fade-up">
        <button class="button js-filters blog-filters__button">Filter Categories:</button>
        <div class="blog-filters__content js-filters-list">
            <ul class="blog-filters__list">
                <?php
                    $tags = get_tags();
                    
                    foreach ( $tags as $tag ) :
                        $tag_link = get_tag_link( $tag->term_id );
                        echo '<li class="blog-filter"><button class="js-filter" data-term-id="' . $tag->term_id . '">' . $tag->name . '</button></li>';
                    endforeach;
                ?>
            </ul>
            <button class="button js-filters-apply mb-8">Apply Filters</button>
        </div>
    </header>
    <div class="blog-posts">
        <?php
            $tag = get_queried_object();

            if ( $_GET['term_ids'] ) {
                $tags = explode (",", $_GET['term_ids']);

                $args = array(
                    'post_type'      => array( 'post' ),
                    'tag'            => $tag->term_id,
                    'tag__in'        => $tags,
                    'post_status'    => array( 'publish' ),
                    'orderby'        => 'date', 
                    'order'          => 'DESC',
                    'posts_per_page' => -1,
                );
            } else {
                $args = array(
                    'post_type'      => array( 'post' ),
                    'tag_id'         => $tag->term_id,
                    'post_status'    => array( 'publish' ),
                    'orderby'        => 'date', 
                    'order'          => 'DESC',
                    'posts_per_page' => -1,
                );
            }
            
            $posts = get_posts( $args );
        ?>
        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-excerpt'); ?> data-aos="fade-up" <?php if($counter % 2 == 0) { echo 'data-aos-delay="300"'; } ?>>
                <a href="<?php the_permalink(); ?>" class="blog-excerpt__image-link">
                    <?php the_post_thumbnail('medium', array('class' => 'blog-excerpt__image')); ?>
                </a>
                <h3 class="blog-excerpt__title">
                    <?php the_title(); ?>
                </h3>
                <p class="blog-excerpt__copy">
                    <?= the_field('subheading') ?>
                </p>
                <p class="blog-excerpt__author">
                    <?php
                        $author = get_field('author');
                        $post_tags = get_the_tags();
                        
                        if ( $post_tags ) {
                            $tags_html = '';
                            $total_tags = count( $post_tags );
                            $count = 0;

                            foreach ( $post_tags as $tag ) {
                                $tag_link = get_tag_link( $tag->term_id );     

                                $tags_html .= "<a href='{$tag_link}'>";
                                $tags_html .= "{$tag->name}</a>";

                                if ( $count != ($total_tags - 1) ) {
                                    $tags_html .= ", ";
                                }
                                
                                $count++;
                            }

                            $meta_string = 'By: ' . $author . ', ' . $tags_html;
                            echo $meta_string;
                        } else {
                            echo 'By: ' . $author;
                        }
                    ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="arrow-link" title="<?php the_title_attribute(); ?>" rel="bookmark">Read Post<div class="arrow-link__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                            <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                        </svg>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="flex justify-center"> 
        <button class="button">Load More Posts</button>
    </div>
</section>

<?php get_footer(); ?>