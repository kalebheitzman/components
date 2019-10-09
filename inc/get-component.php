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
	if ( null === $component ) {
		return;
	}
	// define components path.
	$dir        = get_stylesheet_directory();
	$components = [
		$dir . '/ui/components',
		$dir . '/ui/layout',
	];

	// set partial to component if not specified.
	if ( is_null( $partial ) ) {
		$partial = $component;
	}

	// set component path.
	$component_path = $components[0] . '/' . $component . '/' . $partial . '.php';
	$layout_path    = $components[1] . '/' . $component . '/' . $partial . '.php';

	if ( file_exists( $component_path ) ) {
		// load the component.
		include_once $component_path;
	} elseif ( file_exists( $layout_path ) ) {
		// component doesnt exist, try layout.
		include_once $layout_path;
	} else {
		// fail silently.
		return;
	}

	// if js exists for this component load it.
	// @todo load component specific js.
}
