<?php
/**
 * Custom post types
 *
 * @package Wayako_Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Register Portfolio Custom Post Type.
 */
function create_portfolio_cpt() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'wayako-core' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'wayako-core' ),
		'menu_name'             => _x( 'Portfolio', 'Admin Menu text', 'wayako-core' ),
		'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'wayako-core' ),

		'archives'              => __( 'Item Archives', 'wayako-core' ),
		'attributes'            => __( 'Item Attributes', 'wayako-core' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wayako-core' ),
		'all_items'             => __( 'All Items', 'wayako-core' ),
		'add_new_item'          => __( 'Add New Item', 'wayako-core' ),
		'add_new'               => __( 'Add New', 'wayako-core' ),
		'new_item'              => __( 'New Item', 'wayako-core' ),
		'edit_item'             => __( 'Edit Item', 'wayako-core' ),
		'update_item'           => __( 'Update Item', 'wayako-core' ),
		'view_item'             => __( 'View Item', 'wayako-core' ),
		'view_items'            => __( 'View Items', 'wayako-core' ),
		'search_items'          => __( 'Search Item', 'wayako-core' ),
		'not_found'             => __( 'Not found', 'wayako-core' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wayako-core' ),
		'featured_image'        => __( 'Featured Image', 'wayako-core' ),
		'set_featured_image'    => __( 'Set featured image', 'wayako-core' ),
		'remove_featured_image' => __( 'Remove featured image', 'wayako-core' ),
		'use_featured_image'    => __( 'Use as featured image', 'wayako-core' ),
		'insert_into_item'      => __( 'Insert into item', 'wayako-core' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wayako-core' ),
		'items_list'            => __( 'Items list', 'wayako-core' ),
		'items_list_navigation' => __( 'Items list navigation', 'wayako-core' ),
		'filter_items_list'     => __( 'Filter items list', 'wayako-core' ),
	);
	$rewrite = array(
		'slug' => 'portfolio',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label'               => __( 'Portfolio', 'wayako-core' ),
		'description'         => __( 'Portfolio', 'wayako-core' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-admin-post',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
		),
		'taxonomies'          => array( 'book-cat'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 30,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite'             => $rewrite,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

