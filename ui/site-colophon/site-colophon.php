<?php
/**
 * Site Colophon
 *
 * @package Components
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'colophon-sidebar' ) ) {
	return;
}

?><section class="site-colophon" class="widget-area">
	<ul>
		<?php dynamic_sidebar( 'colophon-sidebar' ); ?>
	</ul>
</section><!--.site-colophon-->
