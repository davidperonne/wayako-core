<?php
/**
 * Logos slider Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_logos_slider_' . $block['id'];
$block_class  = 'block-logos-slider alignfull ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<?php if ( have_rows( 'logos' ) ) : ?>

		<div class="splide logos">
			<div class="splide__track">
				<ul class="splide__list">

					<?php while ( have_rows( 'logos' ) ) :
						the_row(); ?>

						<li class="splide__slide">
							<div class="splide__slide-inner">

								<?php if ( $link = get_sub_field( 'link' ) ) : ?>
									<a href="<?php echo esc_url( $link ); ?>" target="_blank" rel="noopener, noreferrer">
								<?php endif; ?>

								<?php
								$image = get_sub_field( 'image' );
								if ( $image ) : ?>
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								<?php endif; ?>


								<?php if ( $link = get_sub_field( 'link' ) ) : ?>
									</a>
								<?php endif; ?>

							</div>
						</li>

					<?php endwhile; ?>

				</ul>
			</div>
		</div>

	<?php endif; ?>

	<script type="text/javascript">            
		//jQuery(document).ready(function($) {
		document.addEventListener("DOMContentLoaded", function(event) {

			var splide = new Splide( '.logos', {
				type   : 'loop',
				perPage: 7,
				perMove: 1,
				autoplay: true,
				speed: number = 1000,
				interval: number = 5000,
				pagination: false,
				arrows: false,
			//	arrowPath: 'm13.5 7.01 13 13m-13 13 13-13',
				breakpoints: {
					640: {
						perPage: 2,
					},
					960: {
						perPage: 4,
					},
					1200: {
						perPage: 6,
					},
				}
			} );

			splide.mount();

		});
	</script>

</div>
