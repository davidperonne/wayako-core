<?php
/**
 * ACF Blocks Gutenberg
 *
 * @package Wayako_Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_register_acf_block_types' ) ) :

	/**
	 * Déclarer des blocs Gutenberg avec ACF.
	 *
	 * @return void
	 */
	function wayako_register_acf_block_types() {

		// Register home slider block.


		acf_register_block_type(
			array(
				'name'            => 'hero',
				'title'           => __( 'Hero', 'wayako-core' ),
				'description'     => __( 'Hero', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/hero.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Hero', 'header' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);

	/*	acf_register_block_type(
			array(
				'name'            => 'service',
				'title'           => __( 'Service', 'wayako-core' ),
				'description'     => __( 'Service', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/service.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Service', 'Services' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);*/

		acf_register_block_type(
			array(
				'name'            => 'services',
				'title'           => __( 'Services', 'wayako-core' ),
				'description'     => __( 'Services', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/services.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Services', 'Services' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'pricing',
				'title'           => __( 'Pricing', 'wayako-core' ),
				'description'     => __( 'Pricing', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/pricing.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Pricing', 'Price' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'breadcrumb',
				'title'           => __( 'Breadcrumb', 'wayako-core' ),
				'description'     => __( 'Breadcrumb', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/breadcrumb.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Fil ariane', 'Breadcrumb' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'projects',
				'title'           => __( 'Projects', 'wayako-core' ),
				'description'     => __( 'Projects', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/projects.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Project', 'Projects' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
					if ( ! is_admin() ) {
						wp_enqueue_script( 'isotope-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/isotope/isotope.pkgd.min.js', array(), null, true );
					}
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'projects-details',
				'title'           => __( 'Projects details', 'wayako-core' ),
				'description'     => __( 'Projects details', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/projects-details.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Project details', 'Projects' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);



		acf_register_block_type(
			array(
				'name'            => 'projects_slider',
				'title'           => __( 'Projects slider', 'wayako-core' ),
				'description'     => __( 'Projects slider', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/projects-slider.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Project slider', 'Projects', 'Slider' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
					if ( ! is_admin() ) {
						wp_enqueue_style( 'splide-styles', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/css/splide.min.css', array(), null );
						wp_enqueue_script( 'splide-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/js/splide.min.js', array(), null, true );
					}
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'image_box',
				'title'           => __( 'Image box', 'wayako-core' ),
				'description'     => __( 'Image box', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/image-box.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Image box' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'testimonials_slider',
				'title'           => __( 'Testimonials slider', 'wayako-core' ),
				'description'     => __( 'Testimonials slider', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/testimonials-slider.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Testimonials slider', 'Testimonials', 'Slider' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
					if ( ! is_admin() ) {
						wp_enqueue_style( 'splide-styles', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/css/splide.min.css', array(), null );
						wp_enqueue_script( 'splide-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/js/splide.min.js', array(), null, true );
					}
				},
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'logos_slider',
				'title'           => __( 'Logos slider', 'wayako-core' ),
				'description'     => __( 'Logos slider', 'wayako-core' ),
				'render_template' => WAYAKO_CORE_PLUGIN_PATH . '/blocks/logos-slider.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( WAYAKO_CORE_PLUGIN_PATH . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Logos slider', 'Logos', 'Slider' ), __( 'Plugin', 'wayako-core' ) ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'wayako-core-blocks', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core-blocks.min.css' );
					if ( ! is_admin() ) {
						wp_enqueue_style( 'splide-styles', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/css/splide.min.css', array(), null );
						wp_enqueue_script( 'splide-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/js/splide.min.js', array(), null, true );
					}
				},
			)
		);

	}

endif;

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'wayako_register_acf_block_types' );
}
