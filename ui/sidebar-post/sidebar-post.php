<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'post-sidebar' ) ) {
	return;
}
?>

<aside class="secondary widget-area">
	<ul>
		<?php dynamic_sidebar( 'post-sidebar' ); ?>
	</ul>
</aside><!-- #secondary -->
