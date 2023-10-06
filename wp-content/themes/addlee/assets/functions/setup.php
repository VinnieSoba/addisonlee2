<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 * @package understrap
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'understrap_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function understrap_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on understrap, use a find and replace
	 * to change 'understrap' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'understrap', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
    
    /*
	 * Adding Thumbnail basic support
	 */
    add_theme_support( "post-thumbnails" );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'understrap_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // understrap_setup
add_action( 'after_setup_theme', 'understrap_setup' );

/**
* Adding the Read more link to excerpts
*/
function new_excerpt_more( $more ) {
	return '<p><a class="read-more cta mini" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'understrap') . '</a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/* Removes the ... from the excerpt read more link */
function custom_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

/* Adds a custom read more link to all excerpts, manually or automatically generated */

function all_excerpts_get_more_link($post_excerpt) {

    return $post_excerpt . ' ...<p><a class="btn cta mini understrap-read-more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More...', 'understrap')  . '</a></p>';
}
add_filter('wp_trim_excerpt', 'all_excerpts_get_more_link');

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}

/* Pagination */

function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}


// Do not load WPML stylesheet
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

/* ------------------------------------------------------------------------ */
/* Custom login page */
/* ------------------------------------------------------------------------ */
function addlee_login_logo() { 
  echo '<style type="text/css">
  body.login div#login h1 a {
    background-image: url('. get_bloginfo( 'template_directory' ) .'/assets/images/logos/logo-letters.png);
    padding-bottom: 30px;
    background-size:150px;
    margin-bottom:20px;
    width:auto !important;
  }
  #loginform {
    background: #ff;
  }
  .login #nav a {
    color:#fff;
  } 
  </style>';
}
add_action( 'login_enqueue_scripts', 'addlee_login_logo' );

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}
function removehttp($url) {
   $disallowed = array('http://', 'https://');
   foreach($disallowed as $d) {
      if(strpos($url, $d) === 0) {
         return str_replace($d, '', $url);
      }
       
   }
   $url = rtrim($url,"/");
   return $url;
}

// Enable shortcodes in text widgets

add_filter('widget_text','do_shortcode');


// Add theme options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Salesforce sandbox
// if (ENVIRONMENT == 'development'){
    
// }
// else if (ENVIRONMENT == 'local'){
//     add_filter( 'gf_salesforce_service_is_sandbox', '__return_true' );
// }
// else if (ENVIRONMENT == 'staging'){
//     add_filter( 'gf_salesforce_service_is_sandbox', '__return_true' );
// } 


// remove WP version number
function addlee_remove_version() {
  return '';
}
add_filter('the_generator', 'addlee_remove_version');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head','feed_links_extra', 3);

function disable_comment_js_and_embed_js(){
    wp_deregister_script( 'comment-reply' );
    wp_deregister_script( 'wp-embed' );
         }
add_action('init','disable_comment_js_and_embed_js');


// remove emoji scripts

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Filter Addlib archive by custom field
function archive_meta_query( $query ) {
    if ( !is_admin() && $query->is_post_type_archive('addlib') || !is_admin() && $query->is_tax('categories') ){
      $query->query_vars["meta_key"] = 'show_in_addlib_archive';
      $query->query_vars["meta_value"] = true;
    }
}
add_action( 'pre_get_posts', 'archive_meta_query', 1 );

function al_lazyloaded_images($attr, $attachment, $size) {

    if(!empty($attr['class']) && strpos($attr['class'], 'lazyload') !== false) {
        $attr['data-src'] = $attr['src'];
        unset($attr['src']);

        $attr['data-srcset'] = $attr['srcset'];
        unset($attr['srcset']);
    }
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'al_lazyloaded_images', 10, 3);

/* Session Cookie */

add_action( 'init', 'al_set_session_cookie' );

function al_set_session_cookie() {

    if(!isset($_COOKIE['al_session_id'])) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }

        $randstring .= base64_encode(date('YmdHi'));

        setcookie('al_session_id', $randstring, 0, "/");
    }
}

/* enable svg file uploads*/

function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );
