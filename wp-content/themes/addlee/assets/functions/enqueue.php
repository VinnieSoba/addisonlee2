<?php
/**
 * enqueue scripts
 */

function addlee_scripts() {

	wp_enqueue_script( 'jquery' );

	if ( isset( $_GET['inApp'] ) && isset( $_GET['ver'] ) && $_GET['ver'] != 4 ) {
		wp_enqueue_style( 'addlee-styles', get_stylesheet_directory_uri() . '/assets/css/v3/style.css', array(), '3.0.0' );
	} else {
		wp_enqueue_style( 'addlee-styles', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), '4.4.3' );
	}
	// Load baskerville font on Addlib
	if ( is_singular( 'addlib' ) || is_archive( 'addlib' ) ) {
		wp_enqueue_style( 'google-font-baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700', array(), '1.0.0' );
	}
	wp_enqueue_style( 'booking-widget-styles', 'https://cdn.addisonlee.com/web-quickbook/1.0.4/quickbook.min.css', array(), '1.0.4' );
	wp_enqueue_script( 'booking-widget', 'https://cdn.addisonlee.com/web-quickbook/1.0.4/vendors.min.js', array(), '1.0.4', true );
	wp_enqueue_script( 'booking-widget-vendors', 'https://cdn.addisonlee.com/web-quickbook/1.0.4/quickbook.min.js', array(), '1.0.4', true );

	wp_register_script( 'addlee-scripts', get_template_directory_uri() . '/assets/js/theme.min.js', array(), '4.2.22', true );

	if ( defined('ENVIRONMENT') && ENVIRONMENT == 'production' ) {
		$api_domain = 'https://book.addisonlee.com';
	} else {
		$api_domain = 'https://testsite2.addisonlee.com';
	}

	wp_localize_script(
		'addlee-scripts',
		'scriptVars',
		array(
			'api_domain' => $api_domain,
			'ajaxurl'    => admin_url( 'admin-ajax.php' ),
			'ajax_nonce' => wp_create_nonce( 'al_nonce' ),
		)
	);
	wp_enqueue_script( 'addlee-scripts' );

	wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/assets/src/js/page-specific/lazysizes.min.js', array(), '3.0.0', true );

	wp_register_script( 'message-banner', get_template_directory_uri() . '/assets/src/js/vendor/message-banner.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'message-banner' );

	if ( ! isset( $_GET['inApp'] ) && ( is_singular( 'addlib' ) || is_archive( 'addlib' ) ) ) :
		wp_enqueue_script( 'social-feed', get_template_directory_uri() . '/assets/src/js/page-specific/jquery.socialfeed.js', array(), '0.4.2', true );
		wp_enqueue_script( 'social-instant', get_template_directory_uri() . '/assets/src/js/page-specific/socialfeed.js', array(), null, true );
		wp_enqueue_script( 'addthis-js', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-542968437588ef03', array( 'jquery' ), null, true );
	endif;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'ssl-check', 'https://www.howsmyssl.com/a/check?callback=parseTLSinfo', array(), '1.0.0', true );
	wp_script_add_data( 'ssl-check', 'conditional', 'lte IE 9' );
}

add_action( 'wp_enqueue_scripts', 'addlee_scripts' );
