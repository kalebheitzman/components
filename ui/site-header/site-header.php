<?php
/**
 * Site Header
 *
 * @package Components
 * @since 1.0.0
 */

$frontpage = is_front_page();

?><header class="site-header">

	<div class="site-branding">
		<?php if ( $frontpage ) : ?>
			<h1 class="site-title">
				<?php echo bloginfo( 'name' ); ?>
			</h1>
		<?php else : ?>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo bloginfo( 'name' ); ?>
				</a>
			</p>
		<?php endif; ?>
	</div>

	<?php get_template_part( '/ui/site-navigation/site-navigation' ); ?>

</header>
