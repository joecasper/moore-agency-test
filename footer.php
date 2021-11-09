            <div class="modal-bg js-modal-bg"></div>
            <footer class="footer">
                <?php 
                    global $post;
                    $post_slug = $post->post_name;
                ?>
                <?php if ( $post_slug != 'contact' ):?>
                    <div class="mb-8 footer-line" data-aos data-aos-offset="300">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1574 567" xml:space="preserve"><style>.stx{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path class="stx" d="m780 552.9 6.2 10.5.5-11c-1.8-68.7-19.6-130.9-51.6-185.7l-2.7-5.1c-14-23.2-30.5-45.1-49.4-65.5l-2-2.1c-56.8-60.7-133.3-106.8-216-133.9-74.3-24.3-148-31-198.2-18.7-51.6 12.6-71.9 43.1-52.5 86 20.4 45.1 96.1 81.7 211.2 106 89.2 18.8 197.7 29.1 306.1 29.7l3.9.2h3.8c16.8 0 33.5-.2 50.2-.7l3.8-.1c131.7-3.9 246.4-22.3 318.7-52.6 80.4-33.7 104.9-80 64.1-136.8-17.2-23.8-53.5-36.9-109.6-41.9-23.8-2.1-51-2.9-83.8-2.5-2.5 0-4.9.1-7.3.1h-8.6c-19.1.4-39.6 1.1-76.6 2.6-3 .1-4.6.2-6.4.3-60.6 2.4-91.9 3.2-125.2 2.5-43.3-.9-77.7-4.5-105-11.9-64.8-17.4-89.1-55.7-67.7-122.3"/><path class="stx" d="m793.6 552.6-5.9 10.8-1-11c-1.8-68.7-19.6-130.9-51.6-185.7l-2.7-5.1c-14-23.2-30.5-45.1-49.4-65.5l-2-2.1c-56.8-60.7-133.3-106.8-216-133.9-74.3-24.3-148-31-198.2-18.7-51.6 12.6-71.9 43.1-52.5 86 20.4 45.1 96.1 81.7 211.2 106 89.2 18.8 197.7 29.1 306.1 29.7l3.9.2h3.8c16.8 0 33.5-.2 50.2-.7l3.8-.1c131.7-3.9 246.4-22.3 318.7-52.6 80.4-33.7 104.9-80 64.1-136.8-17.2-23.8-53.5-36.9-109.6-41.9-23.8-2.1-51-2.9-83.8-2.5-2.5 0-4.9.1-7.3.1h-8.6c-19.1.4-39.6 1.1-76.6 2.6-3 .1-4.6.2-6.4.3-60.6 2.4-91.9 3.2-125.2 2.5-43.3-.9-77.7-4.5-105-11.9-64.8-17.4-89.1-55.7-67.7-122.3"/></svg>
                    </div>
                    <div class="footer-mobile-line"  data-aos data-aos-offset="100">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 390 348" xml:space="preserve"><style>.stff{fill:none;stroke:#ea168c;stroke-width:2;stroke-miterlimit:10}</style><path id="Path-6-Copy_1_" class="stff" d="m213 333.5 6.5 11 .6-3.6-.1-8.1c-1.4-37.9-9.8-70.6-24.3-97.9l-.5-1-1.1-2.1c-3.2-5.8-6.7-11.3-10.4-16.6l-.7-.9c-19-26.4-44.2-45.3-71.4-55.4-23.9-8.9-47.5-10-63-3.6-15.6 6.4-20.6 19.4-12.5 36.1 9.4 19.2 35.3 32.3 73.1 38.3 24.9 4 54 4.7 83.7 2.4l4.3-.4c9.6-.8 19.3-2 28.9-3.4l1.4-.2c41.3-6.4 77.6-17.9 100.4-32.4 24.9-15.7 32.4-33.7 19.9-52.6-6.9-10.4-19.5-17.4-38.1-22l-.7-.2-.9-.2c-1-.2-2-.5-3.1-.7l-.9-.2-.8-.2c-12.9-2.8-27-4.4-54.3-6.8-5.6-.5-6.8-.6-9.3-.8-22.8-2.1-37-3.8-50.6-6.7-17.3-3.6-31-8.6-41.4-15.8-24.7-16.8-31-45.2-16.3-89.5"/><path id="Path-6-Copy_2_" class="stff" d="m226.5 333.2-5.9 11.1-.5-3.4-.1-8.1c-1.4-37.9-9.8-70.6-24.3-97.9l-.5-1-1.1-2.1c-3.2-5.8-6.7-11.3-10.4-16.6l-.7-.9c-19-26.4-44.2-45.3-71.4-55.4-23.9-8.9-47.5-10-63-3.6-15.6 6.4-20.6 19.4-12.5 36.1 9.4 19.2 35.3 32.3 73.1 38.3 24.9 4 54 4.7 83.7 2.4l4.3-.4c9.6-.8 19.3-2 28.9-3.4l1.4-.2c41.3-6.4 77.6-17.9 100.4-32.4 24.9-15.7 32.4-33.7 19.9-52.6-6.9-10.4-19.5-17.4-38.1-22l-.7-.2-.9-.2c-1-.2-2-.5-3.1-.7l-.9-.2-.8-.2c-12.9-2.8-27-4.4-54.3-6.8-5.6-.5-6.8-.6-9.3-.8-22.8-2.1-37-3.8-50.6-6.7-17.3-3.6-31-8.6-41.4-15.8-24.7-16.8-31-45.2-16.3-89.5"/></svg>
                    </div>
                    <div class="footer__header ">
                        <h2 class="footer__headline js-foot"  data-aos="fade-up">
                            <?= the_field('primary_footer_cta_text', 'option'); ?>
                        </h2>
                        <div data-aos-anchor=".js-foot" data-aos="fade-up" data-aos-delay="200">
                            <a href="<?= the_field('primary_footer_cta_button_link', 'option'); ?>" class="button" ><?= the_field('primary_footer_cta_button_text', 'option'); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="footer-content">
                    <div class="footer-content__left js-pattern">
                        <div class="footer-content__left-content">
                            <h2 class="footer-content__headline">
                                <?= the_field('locations_heading_text', 'option'); ?>
                            </h2>
                            <div class="footer-content__locations">
                                <?php
                                    // Locations Query //
                                    $args = array(
                                        'post_type'   => array( 'locations' ),
                                        'post_status' => array( 'publish' ),
                                        'orderby'     => 'menu_order', 
                                        'order'       => 'ASC',
                                        'nopaging'    => true,
                                    );
                                    $locations = new WP_Query( $args );
                                ?>
                                <?php while( $locations->have_posts() ) : $locations->the_post() ?>
                                    <?php
                                        $contact_email = get_field('contact_email_address');
                                    ?>
                                    <a href="mailto:<?= $contact_email ?>" class="footer-content__location">
                                        <span class="footer-content__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                        </span>
                                        <?= the_title(); ?>
                                    </a>
                                <?php endwhile ?>
                            </div>
                            <div class="footer-content__contact-info">
                                <a class="footer-content__contact-link" href="mailto:<?= the_field('primary_email_address', 'option'); ?>">
                                    <span class="footer-content__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                    </span>
                                    <?= the_field('primary_email_address', 'option'); ?>
                                </a>
                                <a class="footer-content__contact-link" href="tel:+1-<?= the_field('primary_phone_number', 'option'); ?>">
                                    <span class="footer-content__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                    </span>
                                    <?= the_field('primary_phone_number', 'option'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-content__right">
                            <h2 class="footer-content__headline mb-4">
                                <?= the_field('social_heading_text', 'option'); ?>
                            </h2>
                            <div class="footer-content__socials">
                                <?php
                                    if ( have_rows('profiles', 'option') ):
                                        while ( have_rows('profiles', 'option') ) : the_row();
                                            $name = get_sub_field('name');
                                            $icon = get_sub_field('icon');
                                            $profile_url = get_sub_field('profile_url');

                                            echo '
                                                <a href="' . $profile_url . '" class="footer-content__social-link" target="_blank">
                                                    ' . $icon . '
                                                </a> 
                                            ';
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                            <a href="<?= the_field('secondary_footer_cta_link_url', 'option'); ?>" class="arrow-link "><?= the_field('secondary_footer_cta_link_text', 'option'); ?><div class="arrow-link__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27">
                                        <path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" />
                                    </svg>
                                </div>
                            </a>
                    </div>
                </div>
                <div class="footer-footer ">
                    <div class="flex justify-center mb-4" >
                        <?php
                            if ( have_rows('logos', 'option') ):
                                while ( have_rows('logos', 'option') ) : the_row();
                                    $title = get_sub_field('title');
                                    $image = get_sub_field('image');
                                    $link_url = get_sub_field('link_url');

                                    echo '
                                        <a href="' . $link_url . '" class="footer-footer__logo">
                                            <img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />
                                        </a> 
                                    ';
                                endwhile;
                            endif;
                        ?>
                        
                    </div>
                    <div class="text-block">
                        <p>&copy; <?php echo date("Y"); ?> The Moore Agency, <a href="<?php echo esc_attr( esc_url( get_privacy_policy_url() ) ); ?>">Privacy Policy</a></p>
                    </div>
                </div>
            </footer>
        </main>
        <?php wp_footer(); ?>
        <script>
            // todo: check to see if class exists before adding
            jQuery(document).ready(function($) {
                $('.js-slider').slick({
                    prevArrow: $(".js-prev"),
                    nextArrow: $(".js-next"),
                    fade: true,
                    autoplay: true,
                });

                // Work Slider
                $('.js-work-slider').slick({
                    prevArrow: $(".js-prev"),
                    nextArrow: $(".js-next"),
                    fade: true,
                });

                // Testimonials Slider
                $('.js-testimonials-slider').slick({
                    prevArrow: $(".js-prev"),
                    nextArrow: $(".js-next"),
                    autoplay: true,
                });

                // Clients Slider
                $('.js-clients-slider').slick({
                    slidesToShow: 4,
                    prevArrow: $(".js-prev"),
                    nextArrow: $(".js-next"),
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });

                // $(".js-team-member").on("click", function(e) {
                //     var modal = $(this).attr("data-modal-id");
                //     $("body").addClass("overflow-hidden");
                //     $(".js-modal-" + modal).addClass("team-member__modal--open");
                //     $(".js-modal-bg").addClass("modal-bg--visible");
                // });
                // $(".js-close-modal").on("click", function() {
                //     console.log("button");
                //     $("body").removeClass("overflow-hidden");
                //     $(".team-member__modal").removeClass("team-member__modal--open");
                //     $(".js-modal-bg").removeClass("modal-bg--visible");
                // });
                // $(".js-modal-bg").on("click", function() {
                //     $("body").removeClass("overflow-hidden");
                //     $(".team-member__modal").removeClass("team-member__modal--open");
                //     $(".js-modal-bg").removeClass("modal-bg--visible");
                // });

                $('.js-service').click(function(e){
                    $(this).next().toggleClass("service__content--open");
                });

                var filtersOpen = false;
                $('.js-filters').click(() => {
                    $('.blog-filters').toggleClass('p-8');
                    if (!filtersOpen) {

                        $('.js-filters-list').animate({
                            height: $('.js-filters-list').get(0).scrollHeight
                        }, 500, function() {
                            $(this).height('auto');
                        });
                        filtersOpen = true;
                    } else {
                        $('.js-filters-list').animate({
                            height: '0'
                        }, 500, function() {
                            $(this).height('0');
                        });
                        filtersOpen = false;
                    }
                })

                function getUrlVars() {
                    var vars = [],
                        hash;
                    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                    for (var i = 0; i < hashes.length; i++) {
                        hash = hashes[i].split('=');
                        vars.push(hash[0]);
                        vars[hash[0]] = hash[1];
                    }
                    return vars;
                }

                var query = getUrlVars()
                var filters = []
                if (query['term_ids']) {
                    filters = query['term_ids'].split(',');
                }

                $(".js-filter").each(function(index, value) {
                    var button = value;
                    $.each(filters, function(index, value) {
                        if ($(button).attr('data-term-id') === value) {
                            $(button).toggleClass('text-brand-blue-500')
                        }
                    })
                })

                //Toggle filter selection
                $('.js-filter').click(function() {
                    $(this).toggleClass('text-brand-blue-500');
                    var filter = $(this).attr('data-term-id');
                    var index = filters.indexOf(filter);
                    if (index !== -1) {
                        filters.splice(index, 1)
                    } else {
                        filters.push(filter);
                    }
                    console.log(filters);
                });

                var url = window.location.href;
                //Removing existing query string
                if (url.indexOf('?term_ids=') !== -1) {
                    url = url.substring(0, url.indexOf('?term_ids='));
                }

                //Apply filters
                $('.js-filters-apply').click(function() {
                    url += "?term_ids=";
                    filters.forEach(function(filter) {
                        url += filter + ",";
                    })
                    url = url.slice(0, -1);
                    window.location.href = url;
                });

                var postCount = $('.blog-excerpt').length;

                function loadPosts() {
                    var blogPosts = $('.blog-excerpt').not('.block');
                    for (let i = 0; i < 6; i++) {
                        $(blogPosts[i]).addClass('block');
                    }

                    console.log("Visible Posts:" + $('.blog-excerpt.block').length)
                    if($('.blog-excerpt.block').length === postCount){
                        $('.js-loadmore').remove();
                    }
                    AOS.refresh();

                }
                loadPosts();

                $('.js-loadmore').click(function() {
                    loadPosts();
                });
            });
        </script>
    </body>
</html>