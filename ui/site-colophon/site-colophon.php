<?php
/**
 * Site Colophon
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'colophon-sidebar' ) ) {
	return;
}

?><section class="site-colophon widget-area">
	<ul>
		<?php dynamic_sidebar( 'colophon-sidebar' ); ?>
	</ul>
</section><!--.site-colophon-->
