<?php
/**
 * Social Menu Component
 *
 * @package Components
 * @since 1.0.0
 */

?><div class="social-menu">
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'social_menu',
				'container'      => 'ul',
				'menu_class'     => 'social-menu-links',
				'menu_id'        => '',
				'walker'         => new Social_Menu_Walker(),
			)
		);
		?>
</div><!--.social-menu-->
