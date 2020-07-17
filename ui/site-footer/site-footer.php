<?php
/**
 * Site Footer
 *
 * @package Components
 * @since 1.0.0
 */

?><footer class="site-footer">
	<div class="inner">
		<p>&copy; <?php echo esc_attr( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php echo __( 'All Rights Reserved.', 'components' ); ?></p>
    <?php get_component( 'social-menu' ); ?>
	</div>
</footer>
