<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//***************************************//
//************ HELPER FUNCTIONS *********//
//***************************************//


/* TIPS / NOTES

    RETRIEVE ORIGINAL UPLOADED IMAGE INSTEAD OF WP MAX UPLOAD SIZE
    Actual original image path - (wordpress applies a max image size but the original can be retrieved)
    wp_get_original_image_url($imageID);

*/

// DEV FUNCTIONS ONLY ON LOCAL (IF NOT USING MAMP THIS WILL NEED TO BE ADJUSTED)
if( $_SERVER['REMOTE_ADDR'] == '::1' ) {
    // dump and die
    function dd($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }

    // view possible theme image sizes
    function show_images() {
        dd( wp_get_registered_image_subsizes() );
    }
}


// SANATIZE STRING FOR URL
function hrl_str_to_url($string, $sep = '-') {
    if($sep == '-') {
        $string = preg_replace('/[^A-Za-z0-9\- ]/', '', $string); // Removes special chars.
    }
    else {
        $string = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $string); // Removes special chars.
    }
    $string = trim(preg_replace('!\s+!', ' ', $string)); // replace multiple spaces with single & trim
    $string = str_replace(' ', $sep, $string); // Replaces spaces with the separator.
    $string = strtolower($string); // Convert to lowercase

    return $string;
}

// BUILDS THE OPENING SECTION TAG FOR GENERAL FLEX ACF BLOCKS WITH DEFAULT "BASE FIELD' VARIABLES
function hrl_build_flex_section($block_class) {
    //base fields
    $section_id = hrl_str_to_url(esc_attr(get_sub_field('section_id')));
    $hide = get_sub_field('hide_section');

    $output = '';

    if( !empty($section_id) ) {
        $output .= '<span id="' . $section_id . '" class="hrl-anchor"></span>';
    }

    $output .= '<section ';

    // add classes here, there should always be the base block class name being passed through
    $output .= 'class="main-flex-block ' . $block_class;

    if( !empty($hide) ) {
        $output .= ' hrl-hide';
    }

    $output .= '"';

    $output .='>';

    return $output;
}


// prefix number under 10 with 0
function hrl_zero_prefix( $format ) {

    $number = intval( $format );

    if( intval( $number / 10 ) > 0 ) {
        return $format;
    }

    return '0' . $format;
}
