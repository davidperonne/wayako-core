<?php
/**
 * Wayako core enqueue scripts
 *
 * @package Wayako
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wayako_core_scripts' ) ) :

	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function wayako_core_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'splide-styles', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/css/splide.min.css', array(), $theme_version );

		wp_enqueue_script( 'isotope-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/isotope/isotope.pkgd.min.js', array(), $theme_version, true );
		wp_enqueue_script( 'splide-scripts', WAYAKO_CORE_PLUGIN_URI . '/vendor/splide/js/splide.min.js', array(), $theme_version, true );



	}

endif;

add_action( 'wp_enqueue_scripts', 'wayako_core_scripts' );


