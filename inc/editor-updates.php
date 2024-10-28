<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// // wrap embeds through the editor inside a responsive wrapper
// function oembed_wrapper($html, $url, $attr, $post_id) {
//     return '<div class="video-container">' . $html . '</div>';
// }
// add_filter('embed_oembed_html', 'oembed_wrapper', 99, 4);



/*********************************************************/
/**************** EDITOR / WYSWYG UPDATES ****************/
/*********************************************************/

// function hrl_mce_editor_buttons( $buttons ) {

//     array_unshift( $buttons, 'styleselect' );

//     return $buttons;

// }
// add_filter( 'mce_buttons_2', 'hrl_mce_editor_buttons' );

// // Add styles/classes to the "Styles" drop-down
// function hrl_mce_before_init( $settings ) {

//     $new_formats = [
//         [
//             'title' => 'Button',
//             'selector' => 'a',
//             'classes' => 'btn btn-primary'
//         ],
//         [
//             'title' => 'Small',
//             'selector' => 'p,span',
//             'classes' => 'hrl-small'
//         ]
//     ];

//     /* Check if custom "style_formats" is enabled */
//     if( isset( $settings['style_formats'] ) ){

//         /* Get old style_format config */
//         $old_formats = json_decode( $settings['style_formats'] );

//         /* Merge it with our own */
//         $new_formats = array_merge( $new_formats, $old_formats );

//     }

//     /* Add it in tinymce config as json data */
//     $settings['style_formats'] = json_encode( $new_formats );

//     return $settings;

// }
// add_filter( 'tiny_mce_before_init', 'hrl_mce_before_init' );

// // Apply styles to the visual editor
// function hrl_mcekit_editor_style($url) {

//     if ( ! empty( $url ) )
//         $url .= ',';

//     // Retrieves the plugin directory URL
//     // Change the path here if using different directories
//     $url .= get_template_directory_uri() . '/assets/css/editor-styles.css?v=042022';

//     return $url;

// }
// add_filter( 'mce_css', 'hrl_mcekit_editor_style');

/****************** END WYSWYG UPDATES ******************/
