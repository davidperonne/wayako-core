<?php
/**
 * Wayako core enqueue scripts
 *
 * @package Wayako_Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_core_scripts' ) ) :

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function wayako_core_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );

		//wp_enqueue_style( 'wayako-core-styles', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core.min.css', array(), $theme_version );

		if ( is_singular( 'post' ) || is_page() ) {

			if ( has_block( 'acf/projects' ) ) {

				wp_enqueue_script( 'isotope-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/isotope/isotope.pkgd.min.js', array(), $theme_version, true );
			}

			if ( has_block( 'acf/projects-slider' ) || has_block( 'acf/testimonials-slider' ) ) {

				wp_enqueue_style( 'splide-styles', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/css/splide.min.css', array(), $theme_version );
				wp_enqueue_script( 'splide-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/js/splide.min.js', array(), $theme_version, true );
			}
		}

	}

endif;

add_action( 'wp_enqueue_scripts', 'wayako_core_scripts' );


