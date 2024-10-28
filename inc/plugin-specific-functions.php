<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//*************************************//
//********** PLUGIN SPECIFIC **********//
//*************************************//



//************** ACF ADJUSTMENTS

//add acf options page
if( function_exists('acf_add_options_page') ) {

    $args = [
        'page_title' => 'Theme Settings',
        'position' => '40.3',
    ];
    acf_add_options_page($args);

}

// add jquery snippet for acf accordion fields to expand/collapse all
function hrl_acf_input_admin_head() {
?>
    <script type="text/javascript">
        jQuery(function(){

            jQuery('.acf-repeater.-block .acf-row:not(.acf-clone)').addClass('-collapsed');

            jQuery('#hrl-collapse-all-rows').click(function(e) {
                e.preventDefault();

                jQuery('.acf-flexible-content > .values.ui-sortable > .layout').addClass('-collapsed');

            });

            jQuery('#hrl-expand-all-rows').click(function(e) {
                e.preventDefault();

                jQuery('.acf-flexible-content > .values.ui-sortable > .layout').removeClass('-collapsed');

            });

        });
    </script>
<?php
}
add_action('acf/input/admin_head', 'hrl_acf_input_admin_head');

// disable new cpt funtionality
// add_filter( 'acf/settings/enable_post_types', '__return_false' );

// remove ACF Link for non-local environments
if( ! (isset($_GET['acf-update']) && $_GET['acf-update'] == 'true') ) {
    add_filter( 'acf/settings/show_admin', function () {
        // Get the current site url.
        $site_url = get_bloginfo( 'url' );

        // Define an array of protected site urls.
        $protected_urls = array(
            'http://strengthapp.harlodev.com',
            'https://strengthapp.harlodev.com',
            'http://strengthapp.com',
            'https://strengthapp.com',
            'http://www.strengthapp.com',
            'https://www.strengthapp.com'
        );

        // If the current site URL is in the array of protected URLs, return FALSE
        // to hide the menu.
        return ! in_array( $site_url, $protected_urls );
    });
}
//************** END ACF



//************** GRAVITY FORMS ADJUSTMENTS

// change gravity forms submit button to a button instead of an input field
function hrl_input_to_button( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $new_button = $dom->createElement( 'button' );
    $new_button->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    $input->removeAttribute( 'value' );

    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );

        if($attribute->name == 'class') {
            $new_button->setAttribute( $attribute->name, $attribute->value . ' btn btn-primary');
        }
    }
    $input->parentNode->replaceChild( $new_button, $input );

    return $dom->saveHtml( $new_button );
}
add_filter( 'gform_submit_button', 'hrl_input_to_button', 10, 2 );

// change gravity form loading spinner
// function spinner_url( $image_src, $form ) {
//     return get_template_directory_uri() . "/assets/images/loading-spinner.gif";
// }
// add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );


add_filter( 'gform_confirmation_anchor_7', '__return_false' );


//************** END GRAVITY FORMS



//************** YOAST ADJUSTMENTS
/*
 * Remove Yoast SEO Filters
 */
function custom_remove_yoast_seo_admin_filters() {
    global $wpseo_meta_columns;
    if ($wpseo_meta_columns) {
        remove_action('restrict_manage_posts', array($wpseo_meta_columns, 'posts_filter_dropdown'));
        remove_action('restrict_manage_posts', array($wpseo_meta_columns, 'posts_filter_dropdown_readability'));
    }
}
add_action('admin_init', 'custom_remove_yoast_seo_admin_filters', 20);

//************** END YOAST



// //************** AJAX LOAD MORE ADJUSTMENTS
// // remove alm image size
// function alm_remove_image_size() {
//    global $ajax_load_more;
//    remove_filter( 'after_setup_theme', array( $ajax_load_more, 'alm_image_sizes' ) );
// }
// add_action( 'after_setup_theme', 'alm_remove_image_size', 1 );

// // remove edit filters from front end
// add_filter('alm_filters_edit', '__return_false');

