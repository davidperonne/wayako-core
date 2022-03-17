<?php
/**
 * Services Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_services_' . $block['id'];
$block_class  = 'block-services ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<?php if ( have_rows( 'services' ) ) : ?>

	<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

		<?php while ( have_rows( 'services' ) ) :
			the_row(); ?>

			<div class="container block-services__service">

				<?php
				$image = get_sub_field( 'image' );
				if ( $image ) : ?>
					<img class="block-services__picto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>

				<?php if ( $title = get_sub_field( 'title' ) ) : ?>
					<h2 class="block-services__title"><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>


				<?php if ( $description = get_sub_field( 'description' ) ) : ?>
					<p class="block-services__description"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>

				<?php
				if ( $url = get_sub_field( 'link' ) ) : ?>
					<a class="block-services__link" href="<?php echo esc_url( $url ); ?>" >En savoir plus >></a>
				<?php endif; ?>

			</div>

		<?php endwhile; ?>

	</div>

<?php elseif ( is_admin() ) : ?>

	<div class="block-services">
		<em>Ajouter un service dans la colonne de droite.</em>
	</div>

<?php endif; ?>
