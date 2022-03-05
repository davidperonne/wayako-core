<?php
/**
 * Plugin Name:       Wayako block
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
if ( !defined( 'WBL_PLUGIN_PATH' ) ) {
    define( 'WBL_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( !defined( 'WBL_PLUGIN_URI' ) ) {
    define( 'WBL_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}


/**
 * Déclarer des blocs Gutenberg avec ACF.
 *
 * @return void
 */
function wbl_register_acf_block_types() {

	// Register demo.
	acf_register_block_type(
		array(
			'name'            => 'plugin2',
			'title'           => __( 'Extension demo', 'wayakoblocks' ),
			'description'     => _( 'Presentation une extension WordPress.', 'wayakoblocks' ),
			'render_template' => WBL_PLUGIN_PATH . '/blocks/demo.php',
			'category'        => 'formatting',
			'icon'            => 'admin-plugins',
			'keywords'        => array( __( 'Extension', 'wayakoblocks' ), __( 'Plugin', 'wayakoblocks' ) ),
			'enqueue_assets'  => function() {
				wp_enqueue_style( 'wayako-blocks', WBL_PLUGIN_URI . 'css/blocks.css' );
			},
		)
	);

	// Register accordion.
	acf_register_block_type(
		array(
			'name'            => 'accordion',
			'title'           => __( 'Accordion', 'wayakoblocks' ),
			'description'     => _( 'Simple accordion block', 'wayakoblocks' ),
			'render_template' => WBL_PLUGIN_PATH . '/blocks/accordion.php',
		//	'render_callback'   => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-plugins',
			'keywords'        => array( __( 'Accordion', 'wayakoblocks' ) ),
			'enqueue_assets'  => function() {
				wp_enqueue_style( 'wayako-blocks', WBL_PLUGIN_URI . 'css/blocks.css' );
			},
		)
	);
}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'wbl_register_acf_block_types' );
}






/**
 * Testimonial Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function my_acf_block_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 ) {


	// Create id attribute allowing for custom "anchor" value.
	$id = 'testimonial-' . $block['id'];
	if( !empty($block['anchor']) ) {
		$id = $block['anchor'];
	}

	// Create class attribute allowing for custom "className" and "align" values.
	$className = 'accordion';
	if( !empty($block['className']) ) {
		$className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
		$className .= ' align' . $block['align'];
	}

	$heading = get_field( 'heading' ) ?: '.......';
	$description  = get_field( 'description' ) ?: '...';


	?>



	<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
		<div class="accordion__content">
			<h3 class="accordion__title">
				<?php echo esc_html( $heading ); ?>
			</h3>
			<p class="accordion__description">
				<?php echo esc_html( $description ); ?>
			</p>
			<p>

			</p>
		</div>
	</div>
	<?php
}
