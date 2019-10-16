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
		<?php
			the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$components_description = get_bloginfo( 'description', 'display' );
		if ( $components_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $components_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<?php get_component( 'site-navigation' ); ?>
	<?php get_component( 'site-navigation-search' ); ?>
	<?php get_component( 'social-menu' ); ?>

</header>
