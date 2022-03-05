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



// Includes
$wayako_core_includes = array(
//	'/enqueue.php',
	'/custom-post-types.php',
	'/taxonomies.php',
	'/blocks.php',
	'/security.php',
	'/performances.php',
);

foreach ( $wayako_core_includes as $file ) {
	require_once WAYAKO_CORE_PLUGIN_PATH . '/inc' . $file;
}



