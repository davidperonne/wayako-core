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
		'posts_per_page' => -1,

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
					<a class="card" href="<?php echo esc_url( get_permalink() ); ?>">
						<figure>
							<?php echo get_the_post_thumbnail( get_the_ID(), 'medium_large', array( 'class' => 'img-cover' ) ); ?>
							<figcaption>										
								<?php the_title( '<h3 class="grid-item__title">', '</h3>' ); ?>
								<?php the_excerpt(); ?>
							</figcaption>
						</figure>	
					</a>
				</div>

			<?php endwhile; ?>		

		</div>

		<script type="text/javascript">
			document.addEventListener("DOMContentLoaded", function(event) {

				// init Isotope
				var iso = new Isotope( '.grid', {
					itemSelector: '.grid-item',
					layoutMode: 'fitRows'
				});

				// filter functions
				var filterFns = {
					// show if number is greater than 50
					numberGreaterThan50: function( itemElem ) {
						var number = itemElem.querySelector('.number').textContent;
						return parseInt( number, 10 ) > 50;
					},
					// show if name ends with -ium
					ium: function( itemElem ) {
						var name = itemElem.querySelector('.name').textContent;
						return name.match( /ium$/ );
					}
				};

				// bind filter button click
				var filtersElem = document.querySelector('.filter-button-group');
				filtersElem.addEventListener( 'click', function( event ) {
					// only work with buttons
					if ( !matchesSelector( event.target, 'button' ) ) {
						return;
					}
					var filterValue = event.target.getAttribute('data-filter');
					// use matching filter function
					filterValue = filterFns[ filterValue ] || filterValue;
					iso.arrange({ filter: filterValue });
				});

				// change is-checked class on buttons
				var buttonGroups = document.querySelectorAll('.button-group');
				for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
					var buttonGroup = buttonGroups[i];
					radioButtonGroup( buttonGroup );
				}

				function radioButtonGroup( buttonGroup ) {
					buttonGroup.addEventListener( 'click', function( event ) {
						// only work with buttons
						if ( !matchesSelector( event.target, 'button' ) ) {
						return;
						}
						buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
						event.target.classList.add('is-checked');
					});
				}
			});
		</script>

	<?php else : ?>

		<?php get_template_part( 'loop-templates/content', 'none' ); ?>				

	<?php endif; ?>

</div>
