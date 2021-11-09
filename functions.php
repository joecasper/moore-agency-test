<?php
    add_action( 'after_setup_theme', 'blankslate_child_setup' );
    function blankslate_child_setup() {
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main Menu', 'moore-agency-theme' )
        ) );

        add_image_size( 'split-block-thumb', 617, 347, true ); 
    }

    // Add custom classes to nav menu items
    function add_additional_class_on_li( $classes, $item, $args ) {
        if( isset($args->add_li_class) ) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );

    // Add custom class to nav menu item links
    function add_additional_class_on_a( $atts, $item, $args ) {
        if( isset($args->add_a_class) ) {
            $class = $args->add_a_class;
            $atts['class'] = $class;
        }        
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3 );

    add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue_styles' );
    function blankslate_child_enqueue_styles() {
        $parent_style = 'blankslate-style';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        
        wp_enqueue_style( 'blankslate-child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            null
        );

        wp_enqueue_style( 'custom-styles',
            get_stylesheet_directory_uri() . '/_assets/css/dist/styles.min.css',
            array(),
            '1.0.1'
        );

        wp_enqueue_style( 'slick-styles',
            get_stylesheet_directory_uri() . '/_assets/css/dist/slick.min.css',
            array(),
            null
        );

        wp_enqueue_style( 'aos-styles',
            get_stylesheet_directory_uri() . '/_assets/css/dist/aos.min.css',
            array(),
            null
        );

        wp_enqueue_script( 'slick-script', get_stylesheet_directory_uri() . '/_assets/js/dist/slick.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'aos-script', get_stylesheet_directory_uri() . '/_assets/js/dist/aos.js', array( 'jquery' ) );
        wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/_assets/js/dist/app.min.js', array( 'jquery', 'slick-script', 'aos-script' ) );
    }

    // @ini_set( 'upload_max_size' , '5M' );
    // @ini_set( 'post_max_size', '5M');
    // @ini_set( 'max_execution_time', '300' );

    // Customizer additions
    //require_once('inc/customizer.php');

    // function add_style_select_buttons( $buttons ) {
    //     array_unshift( $buttons, 'styleselect' );
    //     return $buttons;
    // }
    // // Register our callback to the appropriate filter
    // add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

    //add custom styles to the WordPress editor
    // function my_custom_styles( $init_array ) {  

    //     $style_formats = array(  
    //         // These are the custom styles
    //         array(  
    //             'title' => 'CTA Button',  
    //             'block' => 'a',  
    //             'classes' => 'btn',
    //             'wrapper' => true,
    //         ),
    //     );  
    //     // Insert the array, JSON ENCODED, into 'style_formats'
    //     $init_array['style_formats'] = json_encode( $style_formats );  
        
    //     return $init_array;  
    
    // } 
    // // Attach callback to 'tiny_mce_before_init' 
    // add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

    // ACF Options Page
    if ( function_exists('acf_add_options_page') ) {
	    acf_add_options_page([
            'page_title' => __('Theme Settings'),
            'menu_title' => __('Theme Settings'),
        ]);
    }

    // Add CTA Link Shortcode
    // todo: account for different arrow / text sizes
    function cta_link_shortcode( $atts ) {

        // Attributes
        $atts = shortcode_atts(
            array(
                'text'   => '',
                'url'    => '',
                'align'  => '',
                'newtab' => false,
            ),
            $atts,
            'cta_link'
        );

        if ( $atts['align'] == 'center' ) {
            $align_class = 'flex justify-center';
        } else {
            $align_class = 'flex';
        }

        if ( $atts['newtab'] == true ) {
            $target = '_blank';
        } else {
            $target = '_self';
        }

        // Return cta link with arrow
        return '<div class="' . $align_class . '"><a href="' . $atts['url'] . '" class="arrow-link" target="' . $target . '">' . $atts['text'] . '<div class="arrow-link__arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27"><path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" /></svg></div></a></div>';

    }
    add_shortcode( 'cta_link', 'cta_link_shortcode' );


    add_action('admin_head', 'add_my_tinymce_buttons');
    function add_my_tinymce_buttons() {
        global $typenow;

        // Check user permissions
        if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
            return;
        }

        // Check if WYSIWYG is enabled
        if ( get_user_option('rich_editing') == 'true') {
            add_filter('mce_external_plugins', 'add_my_tinymce_plugins');
            add_filter('mce_buttons_2', 'register_my_tinymce_buttons');
        }

        // Register the CSS files if using custom icons via the CSS property background-image
        //wp_register_style( 'my_tinymce_button_css', get_template_directory_uri() . '/includes/my-tinymce-btns.css', false, '1.0.0' );
        //wp_enqueue_style( 'my_tinymce_button_css' );
    }

    // Create the custom TinyMCE plugins
    function add_my_tinymce_plugins($plugin_array) {
        $plugin_array['my_cta_link_button'] = get_stylesheet_directory_uri() . '/includes/my-tinymce-btns.js';
        return $plugin_array;
    }
    // Add the buttons to the TinyMCE array of buttons that display, so they appear in the WYSIWYG editor 
    function register_my_tinymce_buttons($buttons) {
        array_push($buttons, 'my_cta_link_button');
        return $buttons;
    }

    add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
    function my_toolbars( $toolbars ) {
        return array();
    }
?>