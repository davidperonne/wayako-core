<?php
/**
 * Security
 *
 * @package Wayako_Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;




add_shortcode( 'encode', 'wayako_core_encode_email' );

if ( ! function_exists( 'wayako_core_encode_email' ) ) :

	/**
	 * Encode mails address with [encode]...[/encode] shortcode.
	 *
	 * @param [type] $atts
	 * @param [type] $adresse
	 * @return void
	 */
	function wayako_core_encode_email( $atts, $adresse ) {
		return '<a href="mailto:' . antispambot( $adresse ) . '">' . antispambot( $adresse ) . '</a>';
	}

endif;

