<?php
/**
 * Register Menus
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Components Nav Menus
 *
 * @package Components
 * @since 1.0.0
 *
 * @return void
 */
function register_components_nav_menus() {
	register_nav_menus(
		array(
			'primary_menu' => esc_html__( 'Primary Menu', '_s' ),
			'footer_menu'  => esc_html__( 'Footer Menu', '_s' ),
			'social_menu'  => esc_html__( 'Social Menu', '_s' ),
		)
	);
}
add_action( 'after_setup_theme', 'register_components_nav_menus' );
