<?php
/**
 * Components functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package components
 */

/**
 * Add theme support.
 */
require get_template_directory() . '/inc/theme-support.php';

/**
 * Register Nav Menus and include custom nav walkers.
 */
require get_template_directory() . '/inc/register-nav-menus.php';
require get_template_directory() . '/ui/layout/class-components-menu-walker.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Get Component Function that this theme is primarily built on.
 */
require get_template_directory() . '/inc/get-component.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
