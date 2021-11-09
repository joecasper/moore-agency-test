<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="hero">
            <h1 class="hero__title hero__title--slider">
                <div class="hero__title-text" itemprop="name">
                    <span>Work</span>
                </div>
                <div class="hero__title-text hero__title-text--white" itemprop="name">
                    <span>Work</span>
                </div>
            </h1>
            <div class="hero__slider js-work-slider">
                <?php
                    $args = array(
                        'post_type'  => array( 'case_study' ),
                        'meta_query' => array(
                            'relation'		=> 'AND',
                            array(
                                'key'	 	=> 'type',
                                'value'	  	=> 'work',
                                'compare' 	=> '=',
                            ),
                            array(
                                'key'	  	=> 'featured',
                                'value'	  	=> '1',
                                'compare' 	=> '=',
                            ),
                        ),
                        'post_status' => array( 'publish' ),
                        'orderby'     => 'menu_order', 
                        'order'       => 'ASC',
                        'nopaging'    => true,
                    );
                    $case_studies = get_posts( $args );

                    foreach( $case_studies as $post ) : setup_postdata( $post );
                        $link_url = get_permalink();
                        $slide_type = get_field('slide_type');
                        $title = get_the_title();

                        if ( $slide_type == 'image'):
                            $slider_image = get_field('slider_image');
                            $image_url = $slider_image['url'];

                            echo '
                                <div class="hero__slide">
                                    <img src="' . $image_url . '" class="w-full" alt="'. $title . '">
                                    <a href="'. $link_url . '" class="arrow-link arrow-link--slide">'. $title . '
                                        <div class="arrow-link__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            ';
                        elseif ( $slide_type == 'video'):
                            $slider_video = get_field('slider_video');

                            if ( strpos($slider_video , '?') ) {
                                $iframe_src = 'https://player.vimeo.com/video/'. $slider_video . '&autoplay=1&loop=1&background=1';
                            } else {
                                $iframe_src = 'https://player.vimeo.com/video/'. $slider_video . '?autoplay=1&loop=1&background=1';
                            }

                            echo '
                                <div class="hero__slide">
                                    <div class="hero__video">
                                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="' . $iframe_src . '" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
                                        <script src="https://player.vimeo.com/api/player.js"></script>
                                    </div>
                                    <a href="'. $link_url . '" class="arrow-link arrow-link--slide ">'. $title . '
                                        <div class="arrow-link__arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            ';
                        endif;
                        wp_reset_postdata(); 
                    endforeach;
                ?>
            </div>
            <div class="hero__slider-controls">
                <button class="hero__slider-button hero__slider-button--prev js-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#fff" stroke-linecap="square" />
                    </svg>
                </button>
                <button class="hero__slider-button js-next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#fff" stroke-linecap="square" />
                    </svg>
                </button>
            </div>
            <div class="hero__scroller"></div>
        </header>
        <section class="portfolio" data-aos="fade-up">
            <?php
                $args = array(
                    'post_type'   => array( 'case_study' ),
                    'meta_key'    => 'type',
	                'meta_value'  => 'work',
                    'post_status' => array( 'publish' ),
                    'orderby'     => 'menu_order', 
                    'order'       => 'ASC',
                    'nopaging'    => true,
                );
                $case_studies = get_posts( $args );
                $large_case_studies = array(1, 8, 11, 18, 21, 28, 31, 38, 41, 48, 51, 58, 61, 68, 71, 78, 81, 88, 91, 98);
                $counter = 1;

                foreach( $case_studies as $post ) : setup_postdata( $post );
                    $link_url = get_permalink();
                    $thumbnail = get_field('thumbnail_image');
                    $thumbnail_url = $thumbnail['url'];
                    $title = get_the_title();
                    $css_class = 'portfolio__piece ';

                    if ( in_array( $counter, $large_case_studies ) ):
                        $css_class .= 'portfolio__piece--large';
                    endif;

                    echo '
                        <a href="'. $link_url . '" class="' . $css_class . '">
                            <div class="portfolio__photo">
                                <img src="' . $thumbnail_url . '" class="portfolio__image" alt="'. $title . '">
                            </div>
                            <h2 class="portfolio__client">'. $title . '</h2>
                        </a>
                    ';

                    wp_reset_postdata(); 

                    $counter++;

                endforeach;
            ?>
        </section>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>