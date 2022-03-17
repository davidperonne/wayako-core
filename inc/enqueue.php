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

		wp_enqueue_style( 'wayako-core-styles', WAYAKO_CORE_PLUGIN_URI . '/assets/css/wayako-core.min.css', array(), $theme_version );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wayako_core_scripts' );
