<?php
// Register Custom Post Type

// register resources

/**
 * Register a custom post type called "Resources".
 *
 * @see get_post_type_labels() for label keys.
 */
 function wpdocs_codex_resource_init() {
	$labels = array(
		'name'                  => _x( 'Resource', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Resource', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Resource', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Resource', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Resource', 'textdomain' ),
		'new_item'              => __( 'New Resource', 'textdomain' ),
		'edit_item'             => __( 'Edit Resource', 'textdomain' ),
		'view_item'             => __( 'View Resource', 'textdomain' ),
		'all_items'             => __( 'All Resources', 'textdomain' ),
		'search_items'          => __( 'Search Resource', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Resource:', 'textdomain' ),
		'not_found'             => __( 'No policy found.', 'textdomain' ),
		'archives'              => _x( 'Resource archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter resource list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Resources list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Resources list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),

	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
        'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug', 'resource'),
		'has_archive'		=>  true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'taxonomies', 'page-attributes','custom-fields', 'post-formats' ),
	);

	register_post_type( 'resource', $args );
}

add_action( 'init', 'wpdocs_codex_resource_init' );
