<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// // CUSTOM WALKER STARTER / REFERENCE (DELETE IF NOT USED)
// class HRL_Custom_Nav_Walker extends Walker_Nav_Menu {

//     public function start_lvl( &$output, $depth = 0, $args = [] ) {
//         $output .= '<ul class="sub-menu d-'.$depth.'">';
//     }

//     public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {

//         // get acf 'menu item type' field added to menu in cms & add as a class
//         $bgi = get_field('background_image', $item) ;

//         // // set up opening li tag
//         $output .= '<li id="menu-item-'. $item->ID . '" class="'. implode(' ', $item->classes) .'"';

//         if( !empty($bgi) ) {

//             $output .= ' data-bgi="' . $bgi['sizes']['2048x2048'] . '"';
//         }

//         $output .= '>';

//         // args before
//         $output .= $args->before;

//         // set up anchor tag (title, target, rel, href)
//         $atts    = !empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
//         $atts   .= !empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
//         $atts   .= !empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
//         $atts   .= !empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

//         // output anchor tag with attributes, title text, close tag
//         $output .= '<a'. $atts .'>';
//         $output .= $args->link_before . $item->title . $args->link_after;
//         $output .= '</a>';

//         // args after
//         $output .= $args->after;

//     }

//     public function end_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
//         $output .= '</li>';
//     }

//     public function end_lvl( &$output, $depth = 0, $args = [] ) {
//         $output .= '</ul>';
//     }
// }
