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
		'typography_js',
		get_template_directory_uri() . '/js/typography.js',
		null,
		'1.0.0',
		true
	);

}
add_action( 'wp_enqueue_scripts', 'components_scripts' );
