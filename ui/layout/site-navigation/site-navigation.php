<?php
/**
 * Site Navigation
 *
 * @package Components
 * @since 1.0.0
 */

?><div class="site-navigation">
	<?php
		wp_nav_menu(
			array(
				'menu'       => 'primary_menu',
				'container'  => 'nav',
				'menu_class' => 'primary-menu',
				'menu_id'    => '',
				'walker'     => new Components_Menu_Walker(),
			)
		);
		?>
</div>
