<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="hero hero--home">
            <h1 class="hero__home-headline">
                <div class="hero__home-subtext">
                    <span>Expect</span>
                </div>
                <div class="hero__home-subtext hero__home-subtext--white">
                    <span>Expect</span>
                </div>
                <div class="hero__home-moore">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 89 638" xml:space="preserve">
                        <title>MOORE.</title>
                        <style>
                        .st0 {
                            fill: #ea168c
                        }
                        </style>
                        <path id="Path" class="st0" d="M87.1.8v10.3l-47.2 33L87.1 77v10.3H.5V77h70.1L24.2 44.1v-.6l46.4-32.9H.5V.5z" />
                        <path id="Shape" class="st0" d="M44.2 136.9c23.8 0 44.3 18.1 44.3 44.9s-20.4 44.7-43.7 44.7h-.3c-23.6 0-44-18.1-44-44.9s20.2-44.7 43.7-44.7zm0 79.6c19.6 0 35.4-14.6 35.4-34.6s-15.5-34.4-34.8-34.4h-.3c-19.4 0-35.1 14.6-35.1 34.6s15.5 34.4 34.8 34.4z" />
                        <path id="Shape_1_" class="st0 hero__home-moore-o" d="M44.2 272c23.8 0 44.3 18.1 44.3 44.9 0 26.8-20.4 44.7-43.7 44.7h-.3c-23.6 0-44-18.1-44-44.9 0-26.8 20.2-44.7 43.7-44.7zm0 79.3c19.6 0 35.4-14.6 35.4-34.6s-15.5-34.4-34.8-34.4h-.3c-19.4 0-35.1 14.6-35.1 34.6s15.5 34.4 34.8 34.4z" />
                        <g class="hero__home-moore-re">
                            <path id="Shape_2_" class="st0" d="M87.1 408.4v38.7c0 11.1-3.2 19.9-8.8 25.5-4.3 4.4-10.4 6.9-17 6.9H61c-14.3 0-22.6-10.2-25.2-24.3L.5 482.9v-12.4l33.5-26v-25.7H.5v-10.2h86.6v-.2zm-43.8 37.7c0 13.6 6.6 23.2 17.8 23.2h.3c10.6 0 17-8.6 17-23v-27.7H43.3v27.5z" />
                            <path id="Path_1_" class="st0" d="M85.8 527v66.6h-8.6v-56.1H48.5v50.2h-8.6v-50.2H10.4v57H1.9v-67.3h83.9z" />
                            <path id="Rectangle" class="st0" d="M.5 624h13.4v13.5H.5z" />
                        </g>
                    </svg>
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
                                    <iframe src="<?= $iframe_src ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
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
            <?php if ( $slide_cta_link_url != '' ): ?>
                <div class="hero__scroller"></div>
            <?php endif; ?>
            <h1 class="hero__home-mobile-headline">
                <div class="relative">
                  <span class="hero__home-mobile-subtext">Expect</span>
                <span class="hero__home-mobile-subtext hero__home-mobile-subtext--white">Expect</span>
               </div>  <div class="hero__home-mobile-moore">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 233 32" xml:space="preserve">
                                    <style>
                                    .st0 {
                                        fill: #ea168c
                                    }
                                    </style>
                                    <path id="Path" class="st0" d="M.1.5h3.8l12 17.2L28 .5h3.8V32H28V6.5L15.9 23.4h-.2L3.7 6.5V32H0z" />
                                    <path id="Shape" class="st0" d="M49.9 16.1C49.9 7.4 56.5 0 66.3 0s16.3 7.4 16.3 15.9v.1c0 8.6-6.6 16-16.4 16s-16.3-7.3-16.3-15.9zm29.1 0C79 9 73.7 3.2 66.3 3.2S53.8 8.9 53.8 15.9v.1c0 7 5.3 12.8 12.7 12.8S79 23.1 79 16.1z" />
                                    <path id="Shape_1_" class="st0" d="M99.3 16.1c0-8.7 6.6-16.1 16.4-16.1S132 7.4 132 15.9v.1c0 8.6-6.6 16-16.4 16s-16.3-7.3-16.3-15.9zm29 0c0-7.1-5.3-12.9-12.7-12.9S103 8.8 103 15.9v.1c0 7 5.3 12.8 12.7 12.8s12.6-5.7 12.6-12.7z" />
                                    <path id="Shape_2_" class="st0" d="M149.2.5h14.2c4 0 7.3 1.2 9.3 3.2 1.6 1.5 2.5 3.8 2.5 6.2v.1c0 5.2-3.7 8.2-8.9 9.2L176.4 32h-4.6l-9.5-12.2H153V32h-3.7V.5h-.1zM163 16.4c5 0 8.5-2.4 8.5-6.5 0-3.9-3.1-6.2-8.4-6.2H153v12.8h10z" />
                                    <path id="Path_1_" class="st0" d="M192.6 1H217v3.1h-20.6v10.5h18.4v3.1h-18.4v10.7h20.9v3.1h-24.6V1z" />
                                    <path id="Rectangle" class="st0" d="M228.1 27.1h4.9V32h-4.9z" />
                                </svg>
                </div>
            </h1> 
        </header>
        <div class="home-top-line" data-aos data-aos-offset="300">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1576 419" xml:space="preserve"><style>.st99{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path class="st99" d="M1181.9 405.1l6.5 10.1-.2-11.3c-5.1-41.4-39.8-60.9-103.6-63.8-27.1-1.2-59.3.5-99.1 4.9-2.7.3-5.3.6-7.9.9l-1.7.2c-1.7.2-3.5.4-5.2.6l-1.7.3c-23.3 2.8-47.6 6.3-97.3 13.6-8.1 1.2-13.5 2-19.1 2.8-86.1 12.6-136.2 18-183.1 18-58.5 0-120.2-14.1-166.8-39.2-2.6-1.4-5.2-2.9-7.8-4.4l-5-2.8c-44.9-27.8-70.5-65.3-71-110.1v-1.5c0-28.7 11.6-50.8 32.2-64.6 18.8-12.6 44.2-17.5 70.6-14.3 26.5 3.2 51.8 14.4 70.5 31.7 20.6 19 32.1 44.2 32.1 73.6 0 41.1-33 69.8-89.5 81.7-11.9 2.5-24.6 4.2-37.9 5.2l-5.1.4c-45.4 2.5-97.7-3.9-149.4-18.6l-2.1-.6C264.9 296 196.6 258 147.4 208 91 150.8 61.4 80.7 63.8 0"/><path class="st99" d="M1195.3 404.3l-5.4 11.1-1.7-11.5c-5.1-41.4-39.8-60.9-103.6-63.8-27.1-1.2-59.3.5-99.1 4.9-2.7.3-5.3.6-7.9.9l-1.7.2c-1.7.2-3.5.4-5.2.6l-1.7.3c-23.3 2.8-47.6 6.3-97.3 13.6-8.1 1.2-13.5 2-19.1 2.8-86.1 12.6-136.2 18-183.1 18-58.5 0-120.2-14.1-166.8-39.2-2.6-1.4-5.2-2.9-7.8-4.4l-5-2.8c-44.9-27.8-70.5-65.3-71-110.1v-1.5c0-28.7 11.6-50.8 32.2-64.6 18.8-12.6 44.2-17.5 70.6-14.3 26.5 3.2 51.8 14.4 70.5 31.7 20.6 19 32.1 44.2 32.1 73.6 0 41.1-33 69.8-89.5 81.7-11.9 2.5-24.6 4.2-37.9 5.2l-5.1.4c-45.4 2.5-97.7-3.9-149.4-18.6l-2.1-.6C264.9 296 196.6 258 147.4 208 91 150.8 61.4 80.7 63.8 0"/></svg>
        </div>
        <div class="home-mobile-top-line" data-aos data-aos-offset="100">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 390 415" xml:space="preserve"><style>.stxx{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path id="Path-3_2_" class="stxx" d="m154.2 404.2 9.3 7.3-3.9-9.6c-33-82.6-39.8-162.6-23.2-226.8l1.1-4.1c.6-2 1.1-4 1.8-6l.6-2c19-60.3 58.2-97.7 101.9-97.3 20 .2 36.5 7.7 47.7 20.8 10.4 12.1 15.5 28.4 14.4 44.9-1.2 17-8.8 33-22.1 44.7-14.7 13-35.6 20.2-61.4 20.1-27.3-.1-55.6-7.2-80.8-20.8l-1.1-.6-2.2-1.2c-10.3-5.8-20-12.7-28.9-20.7l-.9-.9C68.7 117.5 48.2 66.4 50.2 0"/><path id="Path-3_3_" class="stxx" d="m166.7 399-1.5 12.5-5.6-9.6c-33-82.6-39.8-162.6-23.2-226.8l1.1-4.1c.6-2 1.1-4 1.8-6l.6-2c19-60.3 58.2-97.7 101.9-97.3 20 .2 36.5 7.7 47.7 20.8 10.4 12.1 15.5 28.4 14.4 44.9-1.2 17-8.8 33-22.1 44.7-14.7 13-35.6 20.2-61.4 20.1-27.3-.1-55.6-7.2-80.8-20.8l-1.1-.6-2.2-1.2c-10.3-5.8-20-12.7-28.9-20.7l-.9-.9C68.7 117.5 48.2 66.4 50.2 0"/></svg>
        </div>
        <section class="ticker">
            <?php
                $case_studies = get_field('case_studies');
                $show_services_cta_button = get_field('show_services_cta_button');
            ?>
            <?php if( have_rows('services_top') ): ?>
                <h2 class="ticker__line js-ticker-top">
                <?php while( have_rows('services_top') ) : the_row(); ?>
                    <?= the_sub_field('title') ?><span class="ticker__dot"></span>
                <?php endwhile; ?>
                </h2>
            <?php endif; ?>
            <?php if( have_rows('services_bottom') ): ?>
                <h2 class="ticker__line js-ticker-bottom">
                <?php while( have_rows('services_bottom') ) : the_row(); ?>
                    <?= the_sub_field('title') ?><span class="ticker__dot"></span>
                <?php endwhile; ?>
                </h2>
            <?php endif; ?>
            <?php if ( $show_services_cta_button ): ?>
                <a href="<?= the_field('services_cta_link_url') ?>" class="arrow-link mt-4"><?= the_field('services_cta_link_text') ?><div class="arrow-link__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                            <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                        </svg>
                    </div>
                </a>
            <?php endif; ?>            
        </section>
        <div class="home-middle-line" data-aos data-aos-offset="300">
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1574 472" xml:space="preserve"><style>.st22{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path class="st22" d="m422.2 457 5 11.2 1.8-10.4c5.8-28.1 33.4-45.8 82.4-56.5 20.8-4.6 45.3-7.9 75.5-10.6 1.4-.1 52.5-3.8 87-5.6 12.5-.7 18.2-1 23.4-1.3h1.6c1.4-.1 2.8-.2 4.4-.2 41.9-2.3 71.3-4.5 98.9-7.8l1.8-.2c34.8-4.2 63.7-9.7 87.7-17.4 56-17.9 85-47 85-91.8 0-25.4-7.4-47.2-21.4-65.8l-.3-.4-2-2.6c-3-3.7-6.2-7.3-9.8-10.7l-.7-.6c-19.4-18.7-46.5-33.1-79.9-43.8-27.7-8.8-58.7-14.8-91.8-18.3-83.3-8.4-131.2 2.9-151.6 14.3-18.6 10.4-29.4 24.4-30.6 38.7-1.2 14.5 7.5 28.3 25.3 38.6 19.8 11.4 49.6 17.8 87.5 17.8 76.9 0 170.3-12.4 251.8-35.2l3.1-.8c15.8-4.5 31.2-9.4 45.9-14.6l2.7-1c54-19.6 98-43.7 129.1-72.2 34.3-31.4 52.7-67.5 53-108.4V.2"/><path class="st22" d="m435.7 458.3-7 10.1.2-10.6c5.8-28.1 33.4-45.8 82.4-56.5 20.8-4.6 45.3-7.9 75.5-10.6 1.4-.1 52.5-3.8 87-5.6 12.5-.7 18.2-1 23.4-1.3h1.6c1.4-.1 2.8-.2 4.4-.2 41.9-2.3 71.3-4.5 98.9-7.8l1.8-.2c34.8-4.2 63.7-9.7 87.7-17.4 56-17.9 85-47 85-91.8 0-25.4-7.4-47.2-21.4-65.8l-.3-.4-2-2.6c-3-3.7-6.2-7.3-9.8-10.7l-.7-.6c-19.4-18.7-46.5-33.1-79.9-43.8-27.7-8.8-58.7-14.8-91.8-18.3-83.3-8.4-131.2 2.9-151.6 14.3-18.6 10.4-29.4 24.4-30.6 38.7-1.2 14.5 7.5 28.3 25.3 38.6 19.8 11.4 49.6 17.8 87.5 17.8 76.9 0 170.3-12.4 251.8-35.2l3.1-.8c15.8-4.5 31.2-9.4 45.9-14.6l2.7-1c54-19.6 98-43.7 129.1-72.2 34.3-31.4 52.7-67.5 53-108.4V.2"/></svg>
        </div>
        <div class="home-mobile-middle-line" data-aos data-aos-offset="100">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 390 596" xml:space="preserve"><style>.stmm{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path id="Path-4_1_" class="stmm" d="m215.2 580.4.2 11.9 5.9-10c16.6-31.1 35-70.5 51-110.2 20.1-50 35.3-97.7 43.5-140 9.8-50 9.5-90.8-2.2-119.9-11.7-29.1-34.7-46.1-70.2-49.8l-3.7-.3c-3.3-.3-6.7-.4-10.2-.4h-1.3c-37.8 0-82.9 21.3-119.2 55.4-37.9 35.5-61 79.8-61 121.3 0 33.5 14.6 55.1 38.3 60.4 23.5 5.2 53.1-6.3 79.4-32.2 29.8-29.4 53.2-74.4 65.6-131.1 4.9-22.4 8.1-46.4 9.5-71.7l.2-4.5c2.1-47.4-2.1-99.7-13.2-156.5l-.6-2.8"/><path id="Path-4_2_" class="stmm" d="m227.1 586.8-10.5 6.6 4.6-11.1c16.6-31.1 35-70.5 51-110.2 20.1-50 35.3-97.7 43.5-140 9.8-50 9.5-90.8-2.2-119.9-11.7-29.1-34.7-46.1-70.2-49.8l-3.7-.3c-3.3-.3-6.7-.4-10.2-.4h-1.3c-37.8 0-82.9 21.3-119.2 55.4-37.9 35.5-61 79.8-61 121.3 0 33.5 14.6 55.1 38.3 60.4 23.5 5.2 53.1-6.3 79.4-32.2 29.8-29.4 53.2-74.4 65.6-131.1 4.9-22.4 8.1-46.4 9.5-71.7l.2-4.5c2.1-47.4-2.1-99.7-13.2-156.5l-.5-2.8"/></svg>
        </div>
        <section class="alternating-blocks">
            <?php
                $case_studies = get_field('case_studies');
                $show_cta_button = get_field('show_cta_button');

                if ( $case_studies ) {
                    $counter = 1;
                    foreach( $case_studies as $post ) {
                        setup_postdata($post);
                        include('modular_blocks/partials/case_study.php');
                        $counter++;
                    }
                    wp_reset_postdata();
                }
            ?>
            <?php if ( $show_cta_button ): ?>
                <a href="<?= the_field('cta_button_link') ?>" class="button self-center" data-aos="fade-up"><?= the_field('cta_button_text') ?></a>
            <?php endif; ?>
        </section>
        <div class="home-bottom-line" data-aos data-aos-offset="300">
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1574 539" xml:space="preserve"><style>.st66{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path class="st66" d="m692.9 523.7 5.1 11.1 1.6-10.5c2.8-31.3 5.8-56.3 10-80.5l.7-3.7c1.2-7 2.6-13.9 4.1-20.9l.3-1.2c9.4-44.2 22.8-83.8 41.5-118.6 22.1-41 51-74.4 87.9-99 41.5-27.7 92.5-43.9 153.9-47.3 47.9-2.7 85.1 3 111.4 16.2 23.9 12 38.4 30 43.3 52.4 9 40.8-15.1 93.2-57.6 130-63.3 54.9-151.2 86.9-252.9 94.5-41.5 3.1-84.7 2.1-128.2-2.8l-2.2-.3-3.9-.4c-54.7-6.7-109.8-19.5-162.9-38.1l-2.9-1C442 368.1 354.2 313.9 291.2 247.2 223.8 175.8 186.7 92.5 186 2.7V0"/><path class="st66" d="m706.6 525-7.1 10.1.2-10.8c2.8-31.3 5.8-56.3 10-80.5l.7-3.7c1.2-7 2.6-13.9 4.1-20.9l.3-1.2c9.4-44.2 22.8-83.8 41.5-118.6 22.1-41 51-74.4 87.9-99 41.5-27.7 92.5-43.9 153.9-47.3 47.9-2.7 85.1 3 111.4 16.2 23.9 12 38.4 30 43.3 52.4 9 40.8-15.1 93.2-57.6 130-63.3 54.9-151.2 86.9-252.9 94.5-41.5 3.1-84.7 2.1-128.2-2.8l-2.2-.3-3.9-.4c-54.7-6.7-109.8-19.5-162.9-38.1l-2.9-1c-100.1-35.5-187.9-89.7-250.9-156.4C223.8 175.8 186.7 92.5 186 2.7V0"/></svg>
        </div>
        <div class="home-mobile-bottom-line" data-aos data-aos-offset="100">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 396 523" xml:space="preserve"><style>.stbb{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path id="Path-5_1_" class="stbb" d="m202 507.4 2.7 11.9 3.8-10.2c12.7-44.5 16.1-84.3 11.9-122.7-2.6-24-7.4-44.7-16.2-72l-1-3.2c-1.7-5.1-3.4-10.4-5.4-16l-.4-1.2c-.4-1.2-1.3-3.7-2.2-6.3l-.2-.7-.2-.6c-1.1-3.1-2.1-6-2.1-6.1-1.9-5.4-3.3-9.4-4.6-13.3-3.3-10-5.9-18.3-8.1-26.3-5-18.5-7.5-34.8-7.5-51 0-29.2 9-52.7 25.1-68.7 14.6-14.6 34.5-22.2 55.2-21.8 20.6.4 40.3 8.7 54.8 23.5 15.8 16.2 24.4 39.2 23.9 67-.5 27.1-17.6 58.8-44.7 83.9-23.7 22-52.3 36.5-80.4 40l-3 .3c-4 .4-8 .5-12 .5h-1c-38.3-1.1-71.8-23.8-96.1-69.3-27.8-52-43-132.2-43.3-241.8V0"/><path id="Path-5_2_" class="stbb" d="m214.9 511.3-8.8 8.5 2.3-10.7c12.7-44.5 16.1-84.3 11.9-122.7-2.6-24-7.4-44.7-16.2-72l-1-3.2c-1.7-5.1-3.4-10.4-5.4-16l-.4-1.2c-.4-1.2-1.3-3.7-2.2-6.3l-.1-.7-.2-.6c-1.1-3.1-2.1-6-2.1-6.1-1.9-5.4-3.3-9.4-4.6-13.3-3.3-10-5.9-18.3-8.1-26.3-5-18.5-7.5-34.8-7.5-51 0-29.2 9-52.7 25.1-68.7 14.6-14.6 34.5-22.2 55.2-21.8 20.6.4 40.3 8.7 54.8 23.5 15.8 16.2 24.4 39.2 23.9 67-.5 27.1-17.6 58.8-44.7 83.9-23.7 22-52.3 36.5-80.4 40l-3 .3c-4 .4-8 .5-12 .5h-1c-38.3-1.1-71.8-23.8-96.1-69.3-27.8-52-43-132.2-43.3-241.8V0"/></svg>
        </div>
        <section class="nav-padding">
            <div class="divided-block">
                <div class="divided-block__left">
                    <div data-aos="fade-right">
                        <h2 class="divided-block__headline">Fresh Insights</h2>
                        <a href="/blog/" class="arrow-link ">View Our Blog<div class="arrow-link__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                    <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="divided-block__divider" data-aos="fade"></div>
                </div>
                <div class="divided-block__right" data-aos="fade-left">
                    <?php
                        $args = array(
                            'post_type'      => array( 'post' ),
                            'category_name'  => 'blog',
                            'post_status'    => array( 'publish' ),
                            'orderby'        => 'date', 
                            'order'          => 'DESC',
                            'posts_per_page' => 1,
                        );
                        $posts = get_posts( $args );

                        foreach( $posts as $post ) : setup_postdata( $post );
                            $post_link_text = 'Read Post';
                            include('modular_blocks/partials/featured-post.php');
                            
                            wp_reset_postdata(); 
                        endforeach;
                    ?>
                </div>
            </div>
            <div class="divided-block">
                <div class="divided-block__left">
                    <div data-aos="fade-right">
                        <h2 class="divided-block__headline">Recent News</h2>
                        <a href="/news/" class="arrow-link ">See All News<div class="arrow-link__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                    <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="divided-block__divider" data-aos="fade"></div>
                </div>
                <div class="divided-block__right" data-aos="fade-left">
                    <?php
                        $args = array(
                            'post_type'      => array( 'post' ),
                            'category_name'  => 'news',
                            'post_status'    => array( 'publish' ),
                            'orderby'        => 'date', 
                            'order'          => 'DESC',
                            'posts_per_page' => 1,
                        );
                        $posts = get_posts( $args );

                        foreach( $posts as $post ) : setup_postdata( $post );
                            $post_link_text = 'Read News';
                            $anim_delay = true;
                            include('modular_blocks/partials/featured-post.php');
                            
                            wp_reset_postdata(); 
                        endforeach;
                    ?>
                </div>
            </div>
        </section>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>