<?php

/**
 * Register a custom post type called "Privacy Policy Document".
 *
 * @see get_post_type_labels() for label keys.
 */
 function wpdocs_codex_privacy_policy_init() {
	$labels = array(
		'name'                  => _x( 'Privacy Policy', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'privacy policy', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Privacy', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Privacy', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Privacy', 'textdomain' ),
		'new_item'              => __( 'New Privacy', 'textdomain' ),
		'edit_item'             => __( 'Edit Privacy', 'textdomain' ),
		'view_item'             => __( 'View Privacy', 'textdomain' ),
		'all_items'             => __( 'All Policies', 'textdomain' ),
		'search_items'          => __( 'Search Private Policy', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Policy:', 'textdomain' ),
		'not_found'             => __( 'No policy found.', 'textdomain' ),
		'archives'              => _x( 'Policy archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter policy list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Policies list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Policies list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),

	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug', 'privacy-notice'),
		'has_archive'		=>  false,
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'taxonomies', 'page-attributes','custom-fields', 'post-formats' ),
	);

	register_post_type( 'privacy policy', $args );
}

add_action( 'init', 'wpdocs_codex_privacy_policy_init' );


// register taxonomy
