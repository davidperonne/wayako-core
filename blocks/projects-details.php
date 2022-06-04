<?php
/**
 * Projects details Block Template.
 *
 * @param  array       $block       The block settings and attributes.
 * @param  string      $content     The block inner HTML (empty).
 * @param  bool        $is_preview  True during AJAX preview.
 * @param  int|string  $post_id     The post ID this block is saved to.
 *
 * @package Wayako_Core
 */

defined( 'ABSPATH' ) || die();

// Build the basic block id and class.
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_projects_details_' . $block['id'];
$block_class  = 'block-projects-details alignfull ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<?php if ( $client = get_field( 'client' ) ) : ?>
		<span>Client : <?php echo esc_html( $client ); ?></span>
	<?php endif; ?>

	<?php if ( $sous_traitance = get_field( 'sous_traitance' ) ) : ?>
		<span>Sous-traitance : <?php echo esc_html( $sous_traitance ); ?></span>
	<?php endif; ?>

	<?php if ( $date_projet = get_field( 'date_projet' ) ) : ?>
		<span>Date(s) : <?php echo esc_html( $date_projet ); ?></span>
	<?php endif; ?>


</div>
