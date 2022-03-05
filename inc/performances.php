<?php
/**
 * Performances
 *
 * @package Wayako_Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;





/**
 * Disable Emojis in WordPress.
 *
 * @return void
 */
function disable_emoji_feature() {

	// Prevent Emoji from loading on the front-end.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also.
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also.
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// Remove from Embeds.
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails.
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default.
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	add_filter( 'option_use_smilies', '__return_false' );
}
add_action( 'init', 'disable_emoji_feature' );

function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}


add_filter( 'option_use_smilies', '__return_false' );




add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Loading CF7 JavaScript and stylesheet only when it is necessary
 *
 * @return void
 */
function load_contactform7_on_specific_page() {

	if ( is_page( 'contact' ) ) {
		if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
			wpcf7_enqueue_scripts();
		}

		if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
			wpcf7_enqueue_styles();
		}
	}
}
add_action( 'wp_enqueue_scripts', 'load_contactform7_on_specific_page' );



// For speed !
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

