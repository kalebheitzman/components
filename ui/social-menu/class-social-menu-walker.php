<?php
/**
 * Social Menu Walker
 *
 * This walker adds icons and classes to your social links based on url
 * structure. You can use any icon font/system you'd like. I've opted for
 * FontAwesome icons.
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Social Menu Walker Class
 */
class Social_Menu_Walker extends Walker_Nav_Menu {

	/**
	 * Start Element
	 *
	 * @param  string $output Output of menu item.
	 * @param  object $item WP_Post representing menu item.
	 * @param  int    $depth Depth.
	 * @param  object $args Arguments from wp_nav_menu.
	 * @param  int    $id ID of current item.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		// get the target.
		$target = '' === $item->target ? '_blank' : $item->target;

		// link output.
		$output .= '<li class="social-icon">';
		$output .= '<a href="' . $item->url . '" aria-label="' . $item->title . '">';
		$output .= '<i class="fab ' . $item->classes[0] . '" aria-hidden="true"></i>';
		$output .= '</a>';

	}
}
