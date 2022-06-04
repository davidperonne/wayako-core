<?php
/**
 * Projects share Block Template.
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
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : 'block_projects_share_' . $block['id'];
$block_class  = 'block-projects-share alignfull ';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( $block['align'] ) ? ' align' . sanitize_key( $block['align'] ) : '';
?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_class ); ?>">


	<?php

	// Get current page URL.
	$sb_url = urlencode( get_permalink() );

	// Get current page title.
	$sb_title = str_replace( ' ', '%20', get_the_title() );

	// Construct sharing URL without using any script.
	$twitter_url  = 'https://twitter.com/intent/tweet?text=' . $sb_title . '&amp;url=' . $sb_url . '&amp;via=wayako-core';
	$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $sb_url;
	$linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $sb_url . '&amp;title=' . $sb_title;

	?>
	<ul class="wp-block-buttons">
		<li class="wp-block-button is-style-outline">
			<a class="wp-block-button__link" href="<?php echo $facebook_url; ?>" target="_blank" rel="nofollow" title="Partager sur Facebook">
				<span class=""><?php esc_html_e( 'Facebook', 'wayako-core' ); ?></span>
			</a>
		</li>
		<li class="wp-block-button is-style-outline">
			<a class="wp-block-button__link" href="<?php echo $twitter_url; ?>" target="_blank" rel="nofollow" title="Partager sur Twitter">
				<span class=""><?php esc_html_e( 'Twitter', 'wayako-core' ); ?></span>
			</a>
		</li>
		<li class="wp-block-button is-style-outline">
			<a class="wp-block-button__link" href="<?php echo $linkedin_url; ?>" target="_blank" rel="nofollow" title="Partager sur Linkedin">
				<span class=""><?php esc_html_e( 'Linkedin', 'wayako-core' ); ?></span>
			</a>
		</li>
	</ul>

</div>
