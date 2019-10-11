<?php
/**
 * Site Header
 *
 * @package Components
 * @since 1.0.0
 */

?><header class="site-header">

	<div class="site-branding">
		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php echo bloginfo( 'name' ); ?>
			</a>
		</h1>
	</div>

	<?php get_template_part( '/ui/site-navigation/site-navigation' ); ?>
</header>
