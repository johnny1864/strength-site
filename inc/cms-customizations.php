<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//*****************************************//
//************ CMS CUSTOMIZATIONS *********//
//*****************************************//


// REMOVE TAGS SUPPORT
function hrl_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'hrl_unregister_tags');



// REMOVE COMMENTS MENU ITEM
function hideUnncessaryMenuItems(){

    remove_menu_page( 'edit-comments.php' );

}
add_action( 'admin_menu', 'hideUnncessaryMenuItems' );

