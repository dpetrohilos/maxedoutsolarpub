<?php
/**
 * Author: Robert DeVore | @deviorobert
 * URL: html5blank.com | @html5blank
 * Custom functions, support, custom post types and more.
 */

require_once 'modules/is-debug.php';

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if ( ! isset( $content_width ) ) {
    $content_width = 900;
}

if ( function_exists( 'add_theme_support' ) ) {

    // Add Thumbnail Theme Support.
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'larger', 1200, 900, true ); // Large Thumbnail.
    add_image_size( 'medium', 250, '', true ); // Medium Thumbnail.
    add_image_size( 'small', 120, '', true ); // Small Thumbnail.
    add_image_size( 'custom-size', 700, 200, true ); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use.
    /*add_theme_support('custom-background', array(
    'default-color' => 'FFF',
    'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use.
    /*add_theme_support('custom-header', array(
    'default-image'          => get_template_directory_uri() . '/img/headers/default.jpg',
    'header-text'            => false,
    'default-text-color'     => '000',
    'width'                  => 1000,
    'height'                 => 198,
    'random-default'         => false,
    'wp-head-callback'       => $wphead_cb,
    'admin-head-callback'    => $adminhead_cb,
    'admin-preview-callback' => $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Enable HTML5 support.
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // Localisation Support.
    load_theme_textdomain( 'html5blank', get_template_directory() . '/languages' );
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav() {
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => 'menu',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="menu" role="navigation" aria-labelledby="nav1">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
        )
    );

}




// Load HTML5 Blank styles
function html5blank_styles() {
    if ( HTML5_DEBUG ) {
        // normalize-css
        wp_register_style( 'normalize', get_template_directory_uri() . '/css/lib/normalize.css', array(), '7.0.0' );

        // Custom CSS
        wp_register_style( 'html5blank', get_template_directory_uri() . '/style.css', array( 'normalize' ), '1.0' );

        // Register CSS
        wp_enqueue_style( 'html5blank' );
    } else {
        // Custom CSS
        wp_register_style( 'html5blankcssmin', get_template_directory_uri() . '/style.css', array(), '1.0' );
        // Register CSS
        wp_enqueue_style( 'html5blankcssmin' );
    }
}

// Register HTML5 Blank Navigation
function register_html5_menu() {
    register_nav_menus( array( // Using array to specify more menus if needed
        'header-menu'  => esc_html( 'Header Menu', 'html5blank' ), // Main Navigation
        'extra-menu'   => esc_html( 'Extra Menu', 'html5blank' ), // Extra Navigation if needed (duplicate as many as you need!)
        'internal-menu'   => esc_html( 'Internal Menu', 'html5blank' )
        
        
    ) );
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args( $args = '' ) {
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter( $var ) {
    return is_array( $var ) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list( $thelist ) {
    return str_replace( 'rel="category tag"', 'rel="tag"', $thelist );
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class( $classes ) {
    global $post;
    if ( is_home() ) {
        $key = array_search( 'blog', $classes, true );
        if ( $key > -1 ) {
            unset( $classes[$key] );
        }
    } elseif ( is_page() ) {
        $classes[] = sanitize_html_class( $post->post_name );
    } elseif ( is_singular() ) {
        $classes[] = sanitize_html_class( $post->post_name );
    }

    return $classes;
}

// Remove the width and height attributes from inserted images
function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}


// If Dynamic Sidebar Exists
if ( function_exists( 'register_sidebar' ) ) {
    // Define Sidebar Widget Area 1
    register_sidebar( array(
        'name'          => esc_html( 'Widget 1: Intro Message', 'html5blank' ),
        'description'   => esc_html( 'Intro Message', 'html5blank' ),
        'id'            => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget 2: Savings CTA for CS', 'html5blank' ),
        'description'   => esc_html( 'Savings CTA', 'html5blank' ),
        'id'            => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
      // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget 3: We need to have a conversation about the planet', 'html5blank' ),
        'description'   => esc_html( 'Why we do it', 'html5blank' ),
        'id'            => 'widget-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
      // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget 4: Feel good text about the planet', 'html5blank' ),
        'description'   => esc_html( 'Feel good text about the planet', 'html5blank' ),
        'id'            => 'widget-area-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
         // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget 5: Vision', 'html5blank' ),
        'description'   => esc_html( 'Our vision', 'html5blank' ),
        'id'            => 'widget-area-5',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
         // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget 6: Mission', 'html5blank' ),
        'description'   => esc_html( 'Front page widget 6...', 'html5blank' ),
        'id'            => 'widget-area-6',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
         // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget 7: Community Solar', 'html5blank' ),
        'description'   => esc_html( 'Front page widget 7...', 'html5blank' ),
        'id'            => 'widget-area-7',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
      register_sidebar( array(
        'name'          => esc_html( 'Widget 8: Rooftop Solar', 'html5blank' ),
        'description'   => esc_html( 'Front page widget 8...', 'html5blank' ),
        'id'            => 'widget-area-8',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
    // Widget area for rooftop solar 
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 9: Eco CTA', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-9',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 10: eco fact 2', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-10',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 11: eco fact 3', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-11',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 12: eco fact 3', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-12',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 13: Process', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-13',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 14: Process continued', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-14',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 15', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-15',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
            register_sidebar( array(
        'name'          => esc_html( 'Widget 16', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-16',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    // Finacnial benefits ads 
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 17: Investment', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-17',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 18: Investment opportunity', 'html5blank' ),
        'description'   => esc_html( 'Eco Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-18',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 19: Investment/saving continued', 'html5blank' ),
        'description'   => esc_html( 'Savings Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-19',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 20: Investment/saving continued', 'html5blank' ),
        'description'   => esc_html( 'Savings Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-20',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 21: Process', 'html5blank' ),
        'description'   => esc_html( 'Savings Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-21',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 22: Process', 'html5blank' ),
        'description'   => esc_html( 'Savings Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-22',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 23', 'html5blank' ),
        'description'   => esc_html( 'Savings Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-23',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
        register_sidebar( array(
        'name'          => esc_html( 'Widget 24', 'html5blank' ),
        'description'   => esc_html( 'Savings Ad Rooftop...', 'html5blank' ),
        'id'            => 'widget-area-24',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
       
    
    // Widget area for community solar 
    
       register_sidebar( array(
        'name'          => esc_html( 'Widget 25: Savings CTA', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-25',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
       register_sidebar( array(
        'name'          => esc_html( 'Widget 26: fact 1 ', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-26',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
       register_sidebar( array(
        'name'          => esc_html( 'Widget 27: fact2', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-27',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
       register_sidebar( array(
        'name'          => esc_html( 'Widget 28: fact3', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-28',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 29: process 1', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-29',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
       register_sidebar( array(
        'name'          => esc_html( 'Widget 30: process 2', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-30',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
       register_sidebar( array(
        'name'          => esc_html( 'Widget 31: eco reason 1', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-31',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
       register_sidebar( array(
        'name'          => esc_html( 'Widget 32: eco reason 2', 'html5blank' ),
        'description'   => esc_html( 'Savings community...', 'html5blank' ),
        'id'            => 'widget-area-32',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    // community solar eco 
    
      register_sidebar( array(
        'name'          => esc_html( 'Widget 33: Eco cta', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-33',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 34: eco 1', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-34',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 35: eco 2', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-35',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 36: Eco 3', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-36',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 37: process 1', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-37',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 38: process 2', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-38',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 39: saving 1 ', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-39',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html( 'Widget 40: saving 2', 'html5blank' ),
        'description'   => esc_html( 'Eco community...', 'html5blank' ),
        'id'            => 'widget-area-40',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    
}


// Load HTML5 Blank scripts (header.php)// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts() {
    if ( $GLOBALS['pagenow'] != 'wp-login.php' && ! is_admin() ) {
        if ( HTML5_DEBUG ) {
            wp_enqueue_script( 'html5blankscripts' );

        // If production
        } 
        
        else {
            // Scripts minify
            wp_register_script( 'html5blankscripts-min', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0' );
            // Enqueue Scripts
            wp_enqueue_script( 'html5blankscripts-min' );
        }
    }
}



function my_footer_enqueue() {


    wp_register_script( 'Cal-Widget', get_template_directory_uri() . '/js/lib/widget.js', array(), '1.0', true );
    wp_enqueue_script( 'Cal-Widget' );

    wp_register_script( 'headroom', get_template_directory_uri() . '/js/lib/headroom.min.js', array(), '1.0', true );
    wp_enqueue_script( 'headroom' );


}

add_action( 'wp_enqueue_scripts', 'my_footer_enqueue' );



// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
    global $wp_widget_factory;

    if ( isset( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'] ) ) {
        remove_action( 'wp_head', array(
            $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
            'recent_comments_style'
        ) );
    }
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links( array(
        'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format'  => '?paged=%#%',
        'current' => max( 1, get_query_var( 'paged' ) ),
        'total'   => $wp_query->max_num_pages,
    ) );
}

// Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
function html5wp_index( $length ) {
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post( $length ) {
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt( $length_callback = '', $more_callback = '' ) {
    global $post;
    if ( function_exists( $length_callback ) ) {
        add_filter( 'excerpt_length', $length_callback );
    }
    if ( function_exists( $more_callback ) ) {
        add_filter( 'excerpt_more', $more_callback );
    }
    $output = get_the_excerpt();
    $output = apply_filters( 'wptexturize', $output );
    $output = apply_filters( 'convert_chars', $output );
    $output = '<p>' . $output . '</p>';
    echo esc_html( $output );
}

// Custom View Article link to Post

// Remove Admin bar
// function remove_admin_bar() {
   //  return false;
// }

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove( $tag ) {
    return preg_replace( '~\s+type=["\'][^"\']++["\']~', '', $tag );
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', '', $html );
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ( $avatar_defaults ) {
    $myavatar                   = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = 'Custom Gravatar';
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
    if ( ! is_admin() ) {
        if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}

// Custom Comments Callback
function html5blankcomments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    extract( $args, EXTR_SKIP );

    if ( 'div' == $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo esc_html( $tag ) ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID(); ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
    <?php printf( esc_html( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ) ?>
    </div>
<?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.' ) ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( esc_html( '%1$s at %2$s' ), get_comment_date(), get_comment_time() ) ?></a><?php edit_comment_link( esc_html_e( '(Edit)' ), '  ', '' );
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link( array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }

/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action( 'wp_enqueue_scripts', 'html5blank_header_scripts' ); // Add Custom Scripts to wp_head
add_action( 'wp_print_scripts', 'html5blank_conditional_scripts' ); // Add Conditional Page Scripts
add_action( 'get_header', 'enable_threaded_comments' ); // Enable Threaded Comments
add_action( 'wp_enqueue_scripts', 'html5blank_styles' ); // Add Theme Stylesheet
add_action( 'init', 'register_html5_menu' ); // Add HTML5 Blank Menu
add_action( 'init', 'create_post_type_html5' ); // Add our HTML5 Blank Custom Post Type
add_action( 'widgets_init', 'my_remove_recent_comments_style' ); // Remove inline Recent Comment Styles from wp_head()
add_action( 'init', 'html5wp_pagination' ); // Add our HTML5 Pagination

// Remove Actions
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

// Add Filters
add_filter( 'avatar_defaults', 'html5blankgravatar' ); // Custom Gravatar in Settings > Discussion
add_filter( 'body_class', 'add_slug_to_body_class' ); // Add slug to body class (Starkers build)
add_filter( 'widget_text', 'do_shortcode' ); // Allow shortcodes in Dynamic Sidebar
add_filter( 'widget_text', 'shortcode_unautop' ); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); // Remove surrounding <div> from WP Navigation
// add_filter( 'nav_menu_css_class', 'my_css_attributes_filter', 100, 1 ); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter( 'nav_menu_item_id', 'my_css_attributes_filter', 100, 1 ); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter( 'page_css_class', 'my_css_attributes_filter', 100, 1 ); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter( 'the_category', 'remove_category_rel_from_category_list' ); // Remove invalid rel attribute
add_filter( 'the_excerpt', 'shortcode_unautop' ); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter( 'the_excerpt', 'do_shortcode' ); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
// add_filter( 'show_admin_bar', 'remove_admin_bar' ); // Remove Admin bar
add_filter( 'style_loader_tag', 'html5_style_remove' ); // Remove 'text/css' from enqueued stylesheet
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); // Remove width and height dynamic attributes to thumbnails
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 ); // Remove width and height dynamic attributes to post images
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 ); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter( 'the_excerpt', 'wpautop' ); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode( 'html5_shortcode_demo', 'html5_shortcode_demo' ); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode( 'html5_shortcode_demo_2', 'html5_shortcode_demo_2' ); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/



/*------------------------------------*\
    ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo( $atts, $content = null ) {
    return '<div class="shortcode-demo">' . do_shortcode( $content ) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
function html5_shortcode_demo_2( $atts, $content = null ) {
    return '<h2>' . $content . '</h2>';
}


function wcr_share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include( locate_template('share-template.php', false, false) );
}

// kill jquery 
/** * Completely Remove jQuery From WordPress */
function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');
 
// disable styleblock 

// disable gutenberg frontend styles @ https://m0n.co/15
function disable_gutenberg_wp_enqueue_scripts() {
	
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	
	wp_dequeue_style('wc-block-style'); // disable woocommerce frontend block styles
	wp_dequeue_style('storefront-gutenberg-blocks'); // disable storefront frontend block styles
	
}
add_filter('wp_enqueue_scripts', 'disable_gutenberg_wp_enqueue_scripts', 100);



