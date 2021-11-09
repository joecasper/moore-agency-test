<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php               
            $current_cat = get_the_category( $post->ID );
            $cat_name = $current_cat[0]->name;
            $cat_slug = $current_cat[0]->slug;
            $cat_link = get_term_link( $current_cat[0] );
            $author = get_field('author');
            $post_tags = get_the_tags();
            $post_cat = get_the_category( $post->ID );
            
            if ( $post_tags ) {
                $tags_html = '';
                $total_tags = count( $post_tags );
                $count = 0;

                foreach ( $post_tags as $tag ) {
                    $tags_html .= '<a href="/category/' . $post_cat[0]->slug . '/?term_ids=' . $tag->term_id . '">';
                    $tags_html .= "{$tag->name}</a>";

                    if ( $count != ($total_tags - 1) ) {
                        $tags_html .= ", ";
                    }
                    
                    $count++;
                }

                $meta_string = 'By: <span itemprop="name">' . $author . '</span>, ' . $tags_html;
            } else {
                $meta_string = 'By: <span itemprop="name">' . $author . '</span>';
            }
        ?>
        <header class="hero ">
            <div class="relative">
                <h1 class="hero__title hero__title--cta">
                    <div class="hero__title-text" itemprop="name">
                        <span><?= $cat_name ?></span>
                    </div>
                    <div class="hero__title-text hero__title-text--white" itemprop="name">
                        <span><?= $cat_name ?></span>
                    </div>
                </h1>
                <?php the_post_thumbnail('full', array('class' => 'hero__image')); ?>
            </div>
            <a href="<?= $cat_link ?>" class="arrow-link arrow-link--cta">View All<div class="arrow-link__arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                    </svg>
                </div>
            </a>
            <div class="hero__scroller"></div>
        </header>
        <section class="blog-post " data-aos="fade-up">
            <header class="mb-6">
                <h2 class="blog-post__title" itemprop="headline">
                    <?php the_title(); ?>
                </h2>
                <h3 class="blog-post__summary">
                    <?= the_field('subheading') ?>
                </h3>
                <p class="blog-post__author" itemprop="author" itemscope itemtype="https://schema.org/Person"><?= $meta_string ?></p>
            </header>
            <div class="text-block" itemprop="mainEntityOfPage">
                <?php the_content(); ?>
            </div>
        </section>
    </article>
    <!-- Recent Posts -->
    <?php               
        $current_cat = get_the_category( $post->ID );
        $cat_slug = $current_cat[0]->slug;

        $cta_label = 'Post';
        if ( $cat_slug == 'news') {
            $cta_label = $current_cat[0]->name;
        }

        $args = array(
            'post_type'      => array( 'post' ),
            'cat'            => $current_cat[0]->term_id,
            'post_status'    => array( 'publish' ),
            'post__not_in'   => array($post->ID),
            'orderby'        => 'date', 
            'order'          => 'ASC',
            'posts_per_page' => 2,
            'nopaging'       => true,
        );

        $posts = get_posts( $args );
    ?>
    <?php if ( $posts ): ?>
        <section class="blog-feed">
            <header class="text-center" data-aos="fade-up">
                <h2 class="blog-posts__headline">Other Recent Posts</h2>
                <div class="blog-posts__bar"></div>
            </header>
            <div class="blog-posts">
                <?php      
                    $counter = 0;
                    $delay = $counter * 100;

                    foreach( $posts as $post ) : setup_postdata( $post );
                        $title = get_the_title();
                        $subheading = get_field('subheading');
                        $permalink = get_the_permalink();
                        $author = get_field('author');
                        $post_tags = get_the_tags();
                        $post_cat = get_the_category( $post->ID );
                        
                        if ( $post_tags ) {
                            $tags_html = '';
                            $total_tags = count( $post_tags );
                            $count = 0;

                            foreach ( $post_tags as $tag ) {
                                $tags_html .= '<a href="/category/' . $post_cat[0]->slug . '/?term_ids=' . $tag->term_id . '">';
                                $tags_html .= "{$tag->name}</a>";

                                if ( $count != ($total_tags - 1) ) {
                                    $tags_html .= ", ";
                                }
                                
                                $count++;
                            }

                            $meta_string = 'By: ' . $author . ', ' . $tags_html;
                        } else {
                            $meta_string = 'By: ' . $author;
                        }

                        echo '
                            <div class="blog-excerpt" data-aos="fade-up" data-aos-delay="' . $delay . '">
                                <a href="' . $permalink . '" class="blog-excerpt__image-link">
                                    ' . get_the_post_thumbnail($post->ID, 'full', array('class' => 'blog-excerpt__image')) . '
                                </a>
                                <h3 class="blog-excerpt__title">' . $title .'</h3>
                                <p class="blog-excerpt__copy">' . $subheading .'</p>
                                <p class="blog-excerpt__author">' . $meta_string . '</p>
                                <a href="' . $permalink . '" class="arrow-link ">Read ' . $cta_label . '
                                    <div class="arrow-link__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                            <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        ';

                        wp_reset_postdata(); 

                        $counter++;
                    endforeach;
                ?>
            </div>
        </section>
    <?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>


