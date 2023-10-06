<?php
register_sidebar( array(
  'name'         => __( 'Priority Accounts Sidebar' ),
  'before_widget' => '<section>',
  'after_widget' => '</section>',
  'id'           => 'priority-accounts-sidebar',
  'description'  => __( 'Widgets in this area will be shown at the bottom of the page.' ),
  'before_title' => '<h3>',
  'after_title'  => '</h3>',
  ) );
?>