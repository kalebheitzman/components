<?php
/**
 * Enqueue Scripts and Styles
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Enqueue scripts and styles.
 */
function components_scripts() {
	wp_enqueue_style(
		'components-style',
		get_template_directory_uri() . '/css/style.css',
		null,
		'1.0.0'
	);
	wp_enqueue_script(
		'fontloader_js',
		get_template_directory_uri() . '/js/webfont.js',
		null,
		'1.6.28',
		true
	);

	wp_add_inline_script(
		'fontloader_js',
		'WebFont.load({google:{families:["Lato:100,300,400,700", "Glyph:300"]}});',
		'after'
	);
}
add_action( 'wp_enqueue_scripts', 'components_scripts' );
