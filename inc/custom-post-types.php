<?php
/**
 * Custom post types
 *
 * @package Wayako
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
		'archives'              => __( 'Archives', 'wayako-core' ),
		'attributes'            => __( 'Attributs', 'wayako-core' ),
		'parent_item_colon'     => __( 'Parent:', 'wayako-core' ),
		'all_items'             => __( 'Tous les Portfolio', 'wayako-core' ),
		'add_new_item'          => __( 'Ajouter un ...', 'wayako-core' ),
		'add_new'               => __( 'Ajouter', 'wayako-core' ),
		'new_item'              => __( 'New ...', 'wayako-core' ),
		'edit_item'             => __( 'Editer', 'wayako-core' ),
		'update_item'           => __( 'Mettre à jour', 'wayako-core' ),
		'view_item'             => __( 'Voir', 'wayako-core' ),
		'view_items'            => __( 'Voir tous les ...', 'wayako-core' ),
		'search_items'          => __( 'Recherche merchant', 'wayako-core' ),
		'not_found'             => __( 'Non trouvé', 'wayako-core' ),
		'not_found_in_trash'    => __( 'Non trouvé en corbeille', 'wayako-core' ),
		'featured_image'        => __( 'Image illustration', 'wayako-core' ),
		'set_featured_image'    => __( 'Ajouter image illustration', 'wayako-core' ),
		'remove_featured_image' => __( 'Retirer image illustration', 'wayako-core' ),
		'use_featured_image'    => __( 'Utiliser image illustration', 'wayako-core' ),
		'insert_into_item'      => __( 'Ajouter dans cette fiche merchant', 'wayako-core' ),
		'uploaded_to_this_item' => __( 'Charger dans cette fiche merchant', 'wayako-core' ),
		'items_list'            => __( 'Liste des ...', 'wayako-core' ),
		'items_list_navigation' => __( '... list navigation', 'wayako-core' ),
		'filter_items_list'     => __( 'Filter ... list', 'wayako-core' ),
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

