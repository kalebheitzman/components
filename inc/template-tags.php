<?php

/**
 * Get Component
 * 
 * Retreives a component based on the $component folder and $partial that
 * has been set. If no partial has been set, partial is automatically assumed
 * to be the same name as the component itself.
 * 
 * @since 1.0.0
 */
function get_component( $component = null, $partial = null ) {
    if ($component === null) {
        return;
    }
    // define components path
    $components = STYLESHEETPATH . "/ui/components";

    // set partial to component
    if ( is_null( $partial ) ) {
        $partial = $component;
    }

    // set component path
    $component_path = $components . '/' . $component . '/' . $partial . '.php';

    // load the component
    if ( file_exists( $component_path ) ) {
        include_once($component_path);
    } 

    // fail silently
    else {
        return;
    }
}