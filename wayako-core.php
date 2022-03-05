<?php
/**
 * Plugin Name:       Wayako core
 * Description:       An example of how to user ACF to build custom blocks for the WordPress editor
 * Version:           1.0
 * Plugin URI :       https://github.com/davidperonne/example-acf-block
 * Author:            David PERONNE
 * Author URI:        https://davidperonne.com
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wayakoblocks
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
	'/blocks.php',
);

foreach ( $wayako_core_includes as $file ) {
	require_once WAYAKO_CORE_PLUGIN_PATH . '/inc' . $file;
}



