<?php 
    global $post;
    $post_slug = $post->post_name;
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
            $banner_type = get_field('banner_type');
            $page_title_length = strlen( get_the_title() )
        ?>
        <?php if ( $banner_type == 'image' ): ?>
            <?php 
                $has_cta_link = get_field('has_cta_link');
            ?>
            <header class="hero <?php if ($post_slug == 'careers'): ?>hero--careers<?php endif; ?>">
                <?php if ( $has_cta_link || $page_title_length > 8 ): ?>
                    <div class="relative">
                <?php endif; ?>
                <h1 class="hero__title <?php if ( $page_title_length > 8 ): ?>hero__title--small<?php endif; ?> <?php if ( $has_cta_link ): ?>hero__title--cta<?php endif; ?>">
                    <div class="hero__title-text <?php if ( $page_title_length > 8 ): ?>hero__title-text--small<?php endif; ?>" itemprop="name">
                        <span><?php the_title(); ?></span>
                    </div>
                    <div class="hero__title-text hero__title-text--white <?php if ( $page_title_length > 8 ): ?>hero__title-text--small<?php endif; ?>" itemprop="name">
                        <span><?php the_title(); ?></span>
                    </div>
                </h1>
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'hero__image', 'itemprop' => 'image' ) ); } ?>
                <?php if ( $has_cta_link || $page_title_length > 8 ): ?>
                    </div>
                <?php endif; ?>
                <?php if ( $has_cta_link ): ?>
                    <a href="<?= the_field('cta_link_url') ?>" class="arrow-link arrow-link--cta">
                        <?= the_field('cta_link_text') ?>
                        <div class="arrow-link__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                            </svg>
                        </div>
                    </a>
                    <div class="hero__scroller"></div>
                <?php else: ?>
                    <div class="hero__bar"></div>
                <?php endif; ?>
            </header>
        <?php elseif ( $banner_type == 'slider' ): ?>
            <header class="hero">
                <h1 class="hero__title hero__title--slider">
                    <div class="hero__title-text <?php if ( $page_title_length > 8 ): ?>hero__title-text--small<?php endif; ?>" itemprop="name">
                        <span><?php the_title(); ?></span>
                    </div>
                    <div class="hero__title-text hero__title-text--white <?php if ( $page_title_length > 8 ): ?>hero__title-text--small<?php endif; ?>" itemprop="name">
                        <span><?php the_title(); ?></span>
                    </div>
                </h1>
                <div class="hero__slider js-slider">
                    <?php while( have_rows('slides') ) : the_row(); ?>
                        <?php
                            $slide_type = get_sub_field('slide_type');
                            $slide_cta_link_text = get_sub_field('slide_cta_link_text');
                            $slide_cta_link_url = get_sub_field('slide_cta_link_url');
                        ?>
                        <?php if ( $slide_type  == 'video' ): ?>
                            <?php
                                $background_video_id = get_sub_field('background_video_id');

                                if ( strpos($background_video_id , '?') ) {
                                    $iframe_src = 'https://player.vimeo.com/video/'. $background_video_id . '&autoplay=1&loop=1&background=1';
                                } else {
                                    $iframe_src = 'https://player.vimeo.com/video/'. $background_video_id . '?autoplay=1&loop=1&background=1';
                                }
                            ?>
                            <div class="hero__slide">
                                <div class="hero__video">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="<?= $$iframe_src ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div> 
                                <a href="<?= $slide_cta_link_url ?>" class="arrow-link arrow-link--slide arrow-link--slide-home <?php if ( $slide_cta_link_url == '' ): ?>invisible<?php endif; ?>"><?= $slide_cta_link_text ?><div class="arrow-link__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                            <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        <?php else: ?>
                            <?php
                                $background_image = get_sub_field('background_image');
                            ?>
                            <div class="hero__slide">
                                <img src="<?= $background_image['url'] ?>" class="w-full" alt="<?= $background_image['alt'] ?>">
                                <a href="<?= $slide_cta_link_url ?>" class="arrow-link arrow-link--slide arrow-link--slide-home <?php if ( $slide_cta_link_url == '' ): ?>invisible<?php endif; ?>"><?= $slide_cta_link_text ?><div class="arrow-link__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                            <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
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
        <?php endif; ?>
        <!-- Modular Content Blocks -->
        <?php include( 'modular_blocks/_master.php' ); ?>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>