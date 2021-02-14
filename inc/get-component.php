<?php
/**
 * Get Component Function
 *
 * This is the primary function used to add html snippets and automatiaclly
 * meld in css and js into the theme as needed.
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Get Component
 *
 * Retreives a component based on the $component folder and $partial that
 * has been set. If no partial has been set, partial is automatically assumed
 * to be the same name as the component itself. Reusable components can be
 * found in one of two folders, either components or layout.
 *
 * @param String $component Name of component.
 * @param String $partial Name of partial.
 * @since 1.0.0
 */
function get_component( $component = null, $partial = null ) {
	// if ( null === $component ) {
	// 	return;
	// }
	// define components path.
	$ui_dir = get_stylesheet_directory() . '/ui';
  $js_dir = get_stylesheet_directory() . '/js';

	// set partial to component if not specified.
	if ( is_null( $partial ) ) {
		$partial = $component;
	}

	// set component path.
	$component_php_path = $ui_dir . '/' . $component . '/' . $partial . '.php';

	// load the php template file.
	if ( file_exists( $component_php_path ) ) {
		// load the component.
		include_once $component_php_path;
	}

	// set js component path.
	$component_js_path = $js_dir . '/' . $component . '/' . $partial . '.min.js';

	// if js exists for this component load it.
	if ( file_exists( $component_js_path ) ) {
		// load the component.
		wp_enqueue_script(
			$partial,
			get_stylesheet_directory_uri() . '/js/' . $component . '/' . $partial . '.min.js?#deferload',
			array( 'jquery' ),
			filemtime(get_template_directory() . '/js/' . $component . '/' . $partial . '.min.js'),
			true
		);
	}

}
