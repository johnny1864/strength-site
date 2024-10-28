<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//*******************************************************//
//******************** THEME SETUP **********************//
//*******************************************************//
function hrl_theme_setup() {

    // theme support
    add_theme_support( 'title-tag' );
    add_theme_support(
        'html5',
        [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ]
    );
    // add_theme_support( 'post-thumbnails', [ 'page', 'post' ] );
    // add_post_type_support( 'page', 'excerpt' );

    // custom image sizes
    add_image_size( 'small', 540, 0, false );
    add_image_size( 'xlg', 1140, 0, false );
    add_image_size( 'xxl', 1320, 0, false );

    // menus
    register_nav_menu( 'main-menu', __( 'Main Menu' ) );
    register_nav_menu( 'menu-meal-plans', __( 'Meal Plans' ) );

}
add_action( 'after_setup_theme', 'hrl_theme_setup' );


// // ADD RECOMMENDED SIZES TO POST THUMBNAILS FOR SPECIFIC POST TYPES IF NECESSARY
// function featured_image_dimensions( $content, $post_id, $thumbnail_id ){

//     if( get_current_screen()->post_type == 'post' ) {
//         $help_text = '<p>' . __( 'Recommended Size: 1320 x 880', 'ht-osv2023' ) . '</p>';
//         return $help_text . $content;
//     }
//     elseif( get_current_screen()->post_type == 'page' ) {
//         $help_text = '<p>' . __( 'Recommended Size: 1200 x 800', 'ht-osv2023' ) . '</p>';
//         return $help_text . $content;
//     }
//     elseif( get_current_screen()->post_type == 'van_gallery' ) {
//         $help_text = '<p>' . __( 'Recommended Size: 1200 x 800', 'ht-osv2023' ) . '</p>';
//         return $help_text . $content;
//     }
//     else {
//         return $content;
//     }
// }
// add_filter( 'admin_post_thumbnail_html', 'featured_image_dimensions', 10, 3 );


//************** END THEME SETUP



//*******************************************************//
//************** STYLE & SCRIPT ENQUEUES ****************//
//*******************************************************//
function hrl_enqueue() {

    // STYLES (import in sass file if possible - else register dependancies and enqueue main)

    // registers
    wp_register_style(
        'hrl_gfonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        [],
        null
    );

    wp_register_style(
        'hrl_odometer',
        get_theme_file_uri('/assets/vendor/odometer-js/odometer-minimal-theme-min.css'),
        [],
        null
    );


    // enqueues (w/ registered dependancies above)
    wp_enqueue_style(
        'hrl_main',
        get_theme_file_uri('assets/css/main.css'),
        ['hrl_gfonts', 'hrl_odometer'],
        substr( filemtime( get_theme_file_path('assets/css/main.css') ), -7 )
    );
    // END STYLES


    // SCRIPTS (pull in with imports in the js file if possible)

    wp_register_script(
        'hrl_odometer',
        get_theme_file_uri('/assets/vendor/odometer-js/odometer.js'),
        [],
        null,
        true
    );

    // enqueue
    wp_enqueue_script(
        'hrl_js',
        get_theme_file_uri('assets/js/main-min.js'),
        ['jquery', 'hrl_odometer'],
        substr( filemtime( get_theme_file_path('assets/js/main-min.js') ), -7 ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'hrl_enqueue' );

// preconnect google fonts
function hrl_preconnect_gfonts() {
?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<?php
}
add_action( 'wp_head', 'hrl_preconnect_gfonts', 5 );


// ADMIN STYLES (if needed) TODO: REMOVE IF NOT USED
function load_admin_style() {

    wp_enqueue_style(
        'admin',
        get_theme_file_uri('assets/css/admin-style.css'),
        null,
        substr( filemtime( get_theme_file_path('assets/css/admin-style.css') ), -7 )
    );

}
add_action( 'admin_enqueue_scripts', 'load_admin_style' );

//************** END ENQUEUES




// ADDITIONAL BODY SLUG CLASSES TO HOOK ONTO
function add_slug_body_class( $classes ) {

    global $post;

    if ( isset($post) && !is_admin() ) {

        // add appropriate body class to support hero block
        if( is_page() && !empty(get_field('hero_fields')['hero_style']) ) {
            $classes[] = get_field('hero_fields')['hero_style'];
        }

        $classes[] = $post->post_type . '-' . $post->post_name;
    }

    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// do not allow errors on login page as they can show info like non existant usernames / email addresses
function hrl_no_wordpress_login_errors(){
    return 'Thanks for trying but there were issues with the login.';
}
add_filter( 'login_errors', 'hrl_no_wordpress_login_errors' );
