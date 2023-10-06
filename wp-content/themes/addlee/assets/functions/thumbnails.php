<?php 

/* ------------------------------------------------------------------------ */
/* WP thumbnails */
/* ------------------------------------------------------------------------ */
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 543, 205, true );
// additional image sizes
  add_image_size( 'full-width-thumb', 1148, 315 );
  add_image_size( 'full-width-thumb', 1148, 500 );
  add_image_size( 'full-width-slide', 1148, 350 );
  add_image_size( 'portrait-slide', 280, 592 );
  add_image_size( 'module-thumb', 574, 382 );
  add_image_size( 'blog-image', 750, 300, true );
  add_image_size( 'blog-main-image', 750, 400, true );
  add_image_size( 'square-module-thumb', 382, 382 );
  add_image_size( 'half-width-thumb', 574, 225 );
  add_image_size( 'small-square-thumb', 100, 100 );
}