<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet"> 
        <link rel="shortcut icon" type="image/jpg" href="/wp-content/themes/moore-agency-theme/_assets/img/favicon.ico"/>
    </head>
    <body <?php if ( is_front_page() ): body_class('flex xl:justify-end home-page'); else: body_class('flex xl:justify-end'); endif; ?>>
        <?php wp_body_open(); ?>
        <nav class="nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <div class="nav__mobile-bar">
                <a href="/" class="nav__logo nav__logo--mobile">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 68 57" xml:space="preserve">
                        <style>
                            .st0 {
                        fill: #ea168c
                    }
                    </style>
                        <g id="Group" transform="translate(0 47.048)">
                            <path id="Path" class="st0" d="M.5.2h1.2l3.6 5.2L9 .2h1.1v9.6H9V2L5.3 7.2 1.6 2v7.8H.5z" />
                            <path id="Shape" class="st0" d="M15.6 5c0-2.7 2.1-5 5.1-5s5.1 2.3 5.1 4.9c0 2.7-2.1 5-5.1 5S15.6 7.7 15.6 5zm9.2 0c0-2.2-1.7-4-4-4s-3.9 1.7-3.9 3.9 1.7 4 4 4 3.9-1.7 3.9-3.9z" />
                            <path id="Shape_1_" class="st0" d="M30.9 5c0-2.7 2.1-5 5.1-5s5.1 2.3 5.1 4.9c0 2.7-2.1 5-5.1 5S30.9 7.7 30.9 5zM40 5c0-2.2-1.7-4-4-4s-3.9 1.7-3.9 3.9 1.7 4 4 4S40 7.2 40 5z" />
                            <path id="Shape_2_" class="st0" d="M46.7.2H51c1.2 0 2.2.4 2.8 1 .5.5.8 1.2.8 1.9 0 1.6-1.1 2.5-2.7 2.8L55 9.8h-1.4l-2.9-3.7h-2.9v3.7h-1.1V.2zm4.2 4.9c1.5 0 2.6-.7 2.6-2 0-1.2-1-1.9-2.6-1.9h-3.1v3.9h3.1z" />
                            <path id="Path_1_" class="st0" d="M60.1.2h7.3v1h-6.1v3.2h5.5v1h-5.5v3.4h6.2v1h-7.3V.2z" />
                        </g>
                        <path id="Path_2_" class="st0" d="M.5 0h13.7l11.2 14.4L36.6 0h13.7v40.7H37.4V20l-12 14.6h-.3L13.2 20.1v20.6H.5z" />
                        <path id="Rectangle" class="st0" d="M53.9 28h12.7v12.7H53.9z" />
                    </svg>
                </a>
            <button class="hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                <p class="hamburger__text">MENU</p>
            </button>
            </div>
            <div class="nav__content js-nav">
                <a href="/" class="nav__logo nav__logo--desktop">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 68 57" xml:space="preserve">
                        <style>
                        .st0 {
                            fill: #ea168c
                        }
                        </style>
                        <g id="Group" transform="translate(0 47.048)">
                            <path id="Path" class="st0" d="M.5.2h1.2l3.6 5.2L9 .2h1.1v9.6H9V2L5.3 7.2 1.6 2v7.8H.5z" />
                            <path id="Shape" class="st0" d="M15.6 5c0-2.7 2.1-5 5.1-5s5.1 2.3 5.1 4.9c0 2.7-2.1 5-5.1 5S15.6 7.7 15.6 5zm9.2 0c0-2.2-1.7-4-4-4s-3.9 1.7-3.9 3.9 1.7 4 4 4 3.9-1.7 3.9-3.9z" />
                            <path id="Shape_1_" class="st0" d="M30.9 5c0-2.7 2.1-5 5.1-5s5.1 2.3 5.1 4.9c0 2.7-2.1 5-5.1 5S30.9 7.7 30.9 5zM40 5c0-2.2-1.7-4-4-4s-3.9 1.7-3.9 3.9 1.7 4 4 4S40 7.2 40 5z" />
                            <path id="Shape_2_" class="st0" d="M46.7.2H51c1.2 0 2.2.4 2.8 1 .5.5.8 1.2.8 1.9 0 1.6-1.1 2.5-2.7 2.8L55 9.8h-1.4l-2.9-3.7h-2.9v3.7h-1.1V.2zm4.2 4.9c1.5 0 2.6-.7 2.6-2 0-1.2-1-1.9-2.6-1.9h-3.1v3.9h3.1z" />
                            <path id="Path_1_" class="st0" d="M60.1.2h7.3v1h-6.1v3.2h5.5v1h-5.5v3.4h6.2v1h-7.3V.2z" />
                        </g>
                        <path id="Path_2_" class="st0" d="M.5 0h13.7l11.2 14.4L36.6 0h13.7v40.7H37.4V20l-12 14.6h-.3L13.2 20.1v20.6H.5z" />
                        <path id="Rectangle" class="st0" d="M53.9 28h12.7v12.7H53.9z" />
                    </svg>
                </a>
                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'main-menu',
                            'container'      => false,
                            'menu_class'     => 'nav__items', 
                            'link_before'    => '<span itemprop="name">', 
                            'link_after'     => '</span>',
                            'add_li_class'   => 'nav__item',
                            'add_a_class'    => 'nav__link'
                        )
                    ); 
                ?>
                <div class="nav__footer">
                    <?php if ( get_field('sidebar_cta_text', 'option') != '' ): ?>
                        <p class="nav__footer-text"><?= the_field('sidebar_cta_text', 'option'); ?></p>
                    <?php endif; ?>
                    <a href="<?= the_field('sidebar_cta_button_link', 'option'); ?>" class="button w-full">
                        <?= the_field('sidebar_cta_button_text', 'option'); ?>
                    </a>
                </div>
            </div>
        </nav>
        <main class="main-content" role="main">