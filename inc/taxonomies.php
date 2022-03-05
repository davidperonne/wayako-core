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
		'all_items'         => __( 'All portfolio categories', 'wayako-core' ),
		'parent_item'       => __( 'Parent theme', 'wayako-core' ),
		'parent_item_colon' => __( 'Parent Categorie:', 'wayako-core' ),
		'edit_item'         => __( 'Edit Categorie', 'wayako-core' ),
		'update_item'       => __( 'Update Categorie', 'wayako-core' ),
		'add_new_item'      => __( 'Add new Categorie', 'wayako-core' ),
		'new_item_name'     => __( 'New category name', 'wayako-core' ),
		'menu_name'         => __( 'Catégorie', 'wayako-core' ),
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
