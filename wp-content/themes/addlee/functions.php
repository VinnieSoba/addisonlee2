<?php
/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/assets/functions/setup.php';

/**
 * Buyapowa - refer a friend
 */
require get_template_directory() . '/assets/functions/buyapowa.php';
/**
 * Custom Gravity Form Scripts
 */
require get_template_directory() . '/assets/functions/custom-gravityforms.php';
/**
 * Search
 */
require get_template_directory() . '/assets/functions/search.php';
/**
 * Shortcodes
 */
require get_template_directory() . '/assets/functions/shortcodes.php';

/**
 * Register menus.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/assets/functions/menus.php';

require get_template_directory() . '/assets/functions/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/assets/functions/enqueue.php';

/**
 * Implement the Custom Header feature.
 */

require get_template_directory() . '/assets/functions/custom-post-types.php';

/**
 * IP Blocker
 */

require get_template_directory() . '/assets/functions/ip-blocker.php';

/**
 * Register Post Type Privacy policy
 */

require get_template_directory() . '/assets/functions/privacy-policy-links.php';

/**
* Load custom WordPress nav walker.
*/
require get_template_directory() . '/assets/functions/bootstrap-wp-navwalker.php';

require get_template_directory() . '/assets/functions/thumbnails.php';

/**
 * WPForms
 */
require get_template_directory() . '/assets/functions/wpforms.php';

/**
 * Gravity Forms: re-push
 */
require get_template_directory() . '/assets/functions/gravity-forms.php';

if(!get_option("medium-crop"))
    add_option("medium-crop", "1");
else
    update_option("medium-crop", "1");

if(!get_option("large_crop"))
    add_option("large_crop", "1");
else
    update_option("large_crop", "1");
require get_template_directory() . '/assets/functions/sidebars.php';

require get_template_directory() . '/assets/functions/ajax-sms-endpoint.php';

function get_t_and_c_version() {
  return '1.0';
}

add_action( 'rest_api_init', function () {
  register_rest_route( '/privacy-policy', '/version', array(
    'methods' => 'GET',
    'callback' => 'get_t_and_c_version',
  ));
});

function remove_yoast_meta_tags_from_sos_page ( $myfilter ) {
    if ( is_page ( 'sos-packages' ) || is_page ( 'one-airborne-every-minute' ) ) {
        return false;
    }
    return $myfilter;
}
add_filter( 'wpseo_opengraph_desc', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_opengraph_title', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_title', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_canonical', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_locale', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_opengraph_url', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_opengraph_type', 'remove_yoast_meta_tags_from_sos_page' );
add_filter( 'wpseo_opengraph_site_name', 'remove_yoast_meta_tags_from_sos_page' );

add_theme_support( 'yoast-seo-breadcrumbs' );

add_action( 'wp_enqueue_scripts', 'my_enqueue' );

function my_enqueue() {

  wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/vendor/test.js', array('jquery') );

  wp_localize_script( 'ajax-script', 'my_ajax_object',
          array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}



function my_action() {
    /**
	 * frontend ajax requests.
	 */
  global $wpdb;
  include(dirname( __FILE__ ) . '/templates/component-parts/component-get-all.php');
  die();
 
}

add_action( 'wp_ajax_my_action', 'my_action' );

add_action( 'wp_ajax_nopriv_my_action', 'my_action' );


function get_web_results() {
  global $wpdb;
  include(dirname( __FILE__ ) . '/templates/component-parts/component-get-web.php');
  die();
}

add_action( 'wp_ajax_get_web_results', 'get_web_results' );

add_action( 'wp_ajax_nopriv_get_web_results', 'get_web_results' );


function get_app_results() {

  global $wpdb;
  include(dirname( __FILE__ ) . '/templates/component-parts/component-get-app.php');
  die();

}

add_action( 'wp_ajax_get_app_results', 'get_app_results' );

add_action( 'wp_ajax_nopriv_get_app_results', 'get_app_results' );


function get_prism_results() {

  global $wpdb;
  include(dirname( __FILE__ ) . '/templates/component-parts/component-get-prism.php');
  die();

}

add_action( 'wp_ajax_get_prism_results', 'get_prism_results' );

add_action( 'wp_ajax_nopriv_get_prism_results', 'get_prism_results' );


