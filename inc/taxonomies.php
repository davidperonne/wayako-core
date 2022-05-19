<?php
/**
 * Taxonomies
 *
 * @package Wayako_Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register taxonomy secteur d'activité.
 */
function create_portfolio_tax() {

	$labels = array(
		'name'              => _x( 'Portfolio categories', 'taxonomy general name', 'wayako-core' ),
		'singular_name'     => _x( 'Portfolio categorie', 'taxonomy singular name', 'wayako-core' ),
		'search_items'      => __( 'Search portfolio categories', 'wayako-core' ),

		'all_items'                  => __( 'All Items', 'wayako-core' ),
		'parent_item'                => __( 'Parent Item', 'wayako-core' ),
		'parent_item_colon'          => __( 'Parent Item:', 'wayako-core' ),
		'new_item_name'              => __( 'New Item Name', 'wayako-core' ),
		'add_new_item'               => __( 'Add New Item', 'wayako-core' ),
		'edit_item'                  => __( 'Edit Item', 'wayako-core' ),
		'update_item'                => __( 'Update Item', 'wayako-core' ),
		'view_item'                  => __( 'View Item', 'wayako-core' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'wayako-core' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'wayako-core' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wayako-core' ),
		'popular_items'              => __( 'Popular Items', 'wayako-core' ),
		'search_items'               => __( 'Search Items', 'wayako-core' ),
		'not_found'                  => __( 'Not Found', 'wayako-core' ),
		'no_terms'                   => __( 'No items', 'wayako-core' ),
		'items_list'                 => __( 'Items list', 'wayako-core' ),
		'items_list_navigation'      => __( 'Items list navigation', 'wayako-core' ),
	);
	$rewrite = array(
		'slug'         => 'portfolio-cat',
		'with_front'   => false,
		'hierarchical' => false,
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Portfolio categories', 'wayako-core' ),
		'hierarchical'       => true,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,		
		'rewrite' => $rewrite,
	);
	register_taxonomy( 'portfolio_cat', array( 'portfolio' ), $args );

}
add_action( 'init', 'create_portfolio_tax' );
