<?php
/**
 * The sidebar containing search related widgets
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'sidebar-search' ) ) {
	return;
}
?>

<aside class="sidebar-search widget-area">
	<ul>
		<?php dynamic_sidebar( 'sidebar-search' ); ?>
	</ul>
</aside><!-- .sidebar-search.widget-area -->
