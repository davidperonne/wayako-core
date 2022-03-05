<?php
/**
 * ACF Blocks Gutenberg
 *
 * @package Wayako
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
				'render_template' => get_template_directory() . '/blocks/hero.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Hero', 'header' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'service',
				'title'           => __( 'Service', 'wayako-core' ),
				'description'     => __( 'Service', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/service.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Service', 'Services' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'pricing',
				'title'           => __( 'Pricing', 'wayako-core' ),
				'description'     => __( 'Pricing', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/pricing.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Pricing', 'Price' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'breadcrumb',
				'title'           => __( 'Breadcrumb', 'wayako-core' ),
				'description'     => __( 'Breadcrumb', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/breadcrumb.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Fil ariane', 'Breadcrumb' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'projects',
				'title'           => __( 'Projects', 'wayako-core' ),
				'description'     => __( 'Projects', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/projects.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Project', 'Projects' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'projects_slider',
				'title'           => __( 'Projects slider', 'wayako-core' ),
				'description'     => __( 'Projects slider', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/projects-slider.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Project slider', 'Projects', 'Slider' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'image_box',
				'title'           => __( 'Image box', 'wayako-core' ),
				'description'     => __( 'Image box', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/image-box.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Image box' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'testimonials_slider',
				'title'           => __( 'Testimonials slider', 'wayako-core' ),
				'description'     => __( 'Testimonials slider', 'wayako-core' ),
				'render_template' => get_template_directory() . '/blocks/testimonials-slider.php',
				'category'        => 'formatting',
				'icon'            => file_get_contents( get_template_directory() . '/assets/img/picto-w-icon.svg' ),
				'keywords'        => array( __( 'Testimonials slider', 'Testimonials', 'Slider' ), __( 'Plugin', 'wayako-core' ) ),
			)
		);

	}

endif;

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'wayako_register_acf_block_types' );
}
