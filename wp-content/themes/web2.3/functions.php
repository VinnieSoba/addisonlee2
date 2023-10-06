<?php

if ( ! function_exists( 'mytheme_register_nav_menu' )) {

    function mytheme_register_nav_menu() {
        register_nav_menus( array(
            'primary_menu' => __( 'My Custom', 'web2.3' ),
            'footer_menu' => __( 'Footer Menu Custom', 'web2.3')
        ));
    }


    add_action( 'init', 'mytheme_register_nav_menu');
}

function add_theme_scripts() {
    wp_enqueue_style( 'theme-web2.3', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), '1.0.0' );

    wp_enqueue_style( 'theme-web2.3-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '1.0.1' );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


