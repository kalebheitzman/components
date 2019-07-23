<?php

/**
 * Get Component
 * 
 * Retreives a component based on the $component folder and $partial that
 * has been set. If no partial has been set, partial is automatically assumed
 * to be the same name as the component itself. Reusable components can be found in 
 * one of two folders, either components or layout.
 * 
 * @since 1.0.0
 */
function get_component( $component = null, $partial = null ) {
    if ($component === null) {
        return;
    }
    // define components path
    $components = [
        STYLESHEETPATH . "/ui/components",
        STYLESHEETPATH . "/ui/layout",        
    ];

    // set partial to component if not specified
    if ( is_null( $partial ) ) {
        $partial = $component;
    }

    // set component path
    $component_path = $components[0] . '/' . $component . '/' . $partial . '.php';
    $layout_path = $components[1] . '/' . $component . '/' . $partial . '.php';

    // load the component
    if ( file_exists( $component_path ) ) {
        include_once($component_path);
    }

    // component doesnt exist, try layout
    elseif ( file_exists( $layout_path ) ) {
        include_once($layout_path);
    }

    // fail silently
    else {
        return;
    }
}