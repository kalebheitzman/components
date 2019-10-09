<?php
/**
 * Components functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Components
 */

// define template directory var to avoid calling function multiple times.
$template_directory = get_template_directory();

/**
 * Add theme support.
 */
require $template_directory . '/inc/theme-support.php';

/**
 * Register Nav Menus and include custom nav walkers.
 */
require $template_directory . '/inc/register-nav-menus.php';
require $template_directory . '/ui/layout/site-navigation/class-components-menu-walker.php';

/**
 * Enqueue scripts and styles.
 */
require $template_directory . '/inc/enqueue-scripts.php';

/**
 * Get Component Function that this theme is primarily built on.
 */
require $template_directory . '/inc/get-component.php';

/**
 * Custom template tags for this theme.
 */
require $template_directory . '/inc/template-tags.php';
