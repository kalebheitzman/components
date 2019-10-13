<?php
/**
 * Site Navigation
 *
 * @package Components
 * @since 1.0.0
 */

?>
<nav class="site-navigation" aria-label="Main Navigation">

	<div class="nav-mobile">
		<a class="nav-toggle" href="#!"><span></span></a>
	</div>

	<div class="primary-nav">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary_menu',
					'container'      => 'ul',
					'menu_class'     => 'primary-menu',
					'menu_id'        => '',
					'walker'         => new Components_Menu_Walker(),
				)
			);
			?>
	</div><!--.primary-nav-->

	<div class="secondary-nav">
		<?php get_component( 'site-navigation-search' ); ?>
		<?php get_component( 'social-menu' ); ?>
	</div><!--.secondary-nav-->

</nav>
