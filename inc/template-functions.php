<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function components_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	$page_template = get_page_template_slug();

	return $classes;
}
add_filter( 'body_class', 'components_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function components_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'components_pingback_header' );

/**
 * Enable Defer Scripts
 */
if ( ! function_exists( 'components_defer_scripts') ) :
  function components_defer_scripts( $url ) {
    if ( strpos( $url, '#deferload') === false ) {
      return $url;
    } else if ( is_admin() ) {
      return str_replace( '#deferload', '', $url );
    } else {
      return str_replace( '#deferload', '', $url )."' defer='defer";
    }
  }
  add_filter( 'clean_url', 'components_defer_scripts', 11, 1 );
endif;

/**
 * Enable Async Scripts
 */
if ( ! function_exists( 'components_async_scripts') ) :
  function components_async_scripts( $url ) {
    if ( strpos( $url, '#asyncload') === false ) {
      return $url;
    } else if ( is_admin() ) {
      return str_replace( '#asyncload', '', $url );
    } else {
      return str_replace( '#asyncload', '', $url )."' async='async";
    }
  }
  add_filter( 'clean_url', 'components_async_scripts', 11, 1 );
endif;