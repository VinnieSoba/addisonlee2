<?php
/* ------------------------------------------------------------------------ */
/* Register menus */
/* ------------------------------------------------------------------------ */
function register_addlee_menus() {
  register_nav_menus(
   array(
    'primary' => __( 'Primary Menu', 'addlee' ),
    'user-links' => __( 'User Links Menu', 'addlee' ),
    'booking-links' => __( 'Booking Links Menu', 'addlee' ),
    'footer-menu-airport-transfers' => __( 'Footer Menu Airport Transfers', 'addlee' ),
    'footer-menu-book' => __( 'Footer Menu Booking', 'addlee' ),
    'footer-menu-company' => __( 'Footer Menu Company', 'addlee' ),
    'footer-menu-drivers' => __( 'Footer Menu Drivers', 'addlee' ),
    'footer-menu-global' => __( 'Footer Menu Global', 'addlee' ),
    'footer-menu-priority-accounts' => __( 'Footer Menu Accounts', 'addlee' ),
    'footer-menu-services' => __( 'Footer Menu Services', 'addlee' ),
    'footer-menu-support' => __( 'Footer Menu Support', 'addlee' ),
    'footer-menu-terms' => __( 'Footer Menu Terms', 'addlee' ),
    'footer-menu-work' => __( 'Footer Menu Work with Us', 'addlee' ),
    'addlib-menu' => __( 'AddLib Menu', 'addlee' ),
    'sitemap' => __( 'Sitemap', 'addlee' )
    ) 
  );
}
add_action('init','register_addlee_menus');

// Menu shortcode
function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');