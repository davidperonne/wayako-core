<?php
/**
 * Projects Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_projects_' . $block['id'];
$block_class  = 'block-projects alignwide ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">

	<div class="button-group filter-button-group">

		<button data-filter="*" class="is-checked"><?php echo esc_html__( 'All', 'wayako-core' ); ?></button>

		<?php
		$portfolio_cat_terms = get_terms(
			array(
				'taxonomy'   => 'portfolio_cat',
				'hide_empty' => false,
			)
		);
		?>
		<?php foreach ( $portfolio_cat_terms as $portfolio_cat_term ) : ?>

			<button data-filter=".<?php echo esc_html( $portfolio_cat_term->slug ); ?>"><?php echo esc_html( $portfolio_cat_term->name ); ?></button>

		<?php endforeach; ?>

	</div>

	<?php
	$args = array(
		'post_type' => 'portfolio',

	);
	$portfolio = new WP_Query( $args );
	?>

	<?php if ( $portfolio->have_posts() ) : ?>

		<div class="grid">

			<?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

				<?php
				$items = '';

				foreach ( get_the_terms( get_the_ID(), 'portfolio_cat' ) as $portfolio_cat_term ) {
					$items .= ' ' . esc_html( $portfolio_cat_term->slug ) . ' ';
				}
				?>

				<div class="grid-item <?php echo esc_html( $items ); ?>">
					<a class="" href="<?php echo esc_url( get_permalink() ); ?>">
						<figure>
							<?php echo get_the_post_thumbnail( get_the_ID(), 'medium_large', array( 'class' => 'img-cover' ) ); ?>
							<figcaption>										
								<?php the_title( '<h3 class="grid-item__title">', '</h3>' ); ?>
							</figcaption>
						</figure>	
					</a>
				</div>

			<?php endwhile; ?>		

		</div>

		<script type="text/javascript">            
			jQuery(document).ready(function($) {

				// init Isotope
				var $grid = $('.grid').isotope({
					itemSelector: '.grid-item',
					layoutMode: 'fitRows',
				});

				// filter items on button click
				$('.filter-button-group').on( 'click', 'button', function() {
					var filterValue = $(this).attr('data-filter');
					$grid.isotope({ filter: filterValue });
				});

				// change is-checked class on buttons
				$('.button-group').each( function( i, buttonGroup ) {
					var $buttonGroup = $( buttonGroup );
					$buttonGroup.on( 'click', 'button', function() {
						$buttonGroup.find('.is-checked').removeClass('is-checked');
						$(this).addClass('is-checked');
					});
				});

			});
		</script>

	<?php else : ?>

		<?php get_template_part( 'loop-templates/content', 'none' ); ?>				

	<?php endif; ?>

</div>
