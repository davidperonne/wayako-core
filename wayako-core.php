<?php
/**
 * Plugin Name:       Wayako core
 * Description:       All fonctions for the Wayako theme
 * Version:           1.0
 * Plugin URI :       https://github.com/davidperonne/wayako-core
 * Author:            David PERONNE
 * Author URI:        https://davidperonne.com
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wayako-core
 * Domain Path:       languages/
 */

defined( 'ABSPATH' ) || die();



// Get plugin Path directory
if ( !defined( 'WAYAKO_CORE_PLUGIN_PATH' ) ) {
    define( 'WAYAKO_CORE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( !defined( 'WAYAKO_CORE_PLUGIN_URI' ) ) {
    define( 'WAYAKO_CORE_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}





/**
 * wayako_core_init function
 *
 * @return void
 */
function wayako_core_init() {
	load_plugin_textdomain( 'wayako-core', false, WAYAKO_CORE_PLUGIN_PATH . '/languages' );
}
add_action( 'plugins_loaded', 'wayako_core_init', 10 );

/**
 * wayako_core_textdomain function
 *
 * @param [type] $mofile
 * @param [type] $domain
 * @return void
 */
function wayako_core_textdomain( $mofile, $domain ) {
	if ( 'wayako-core' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
		$locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
		$mofile = WAYAKO_CORE_PLUGIN_PATH . '/languages/' . $domain . '-' . $locale . '.mo';
	}
	return $mofile;
}
add_filter( 'load_textdomain_mofile', 'wayako_core_textdomain', 10, 2 );






// Includes
$wayako_core_includes = array(
	'/enqueue.php',
	'/custom-post-types.php',
	'/taxonomies.php',
	'/blocks.php',
	'/security.php',
	'/performances.php',
);

foreach ( $wayako_core_includes as $file ) {
	require_once WAYAKO_CORE_PLUGIN_PATH . '/inc' . $file;
}



