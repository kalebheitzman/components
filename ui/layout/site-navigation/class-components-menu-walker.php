<?php
/**
 * Site Navigation Menu Walker
 *
 * Customize to your hearts desire. This is one of many ways to customize your
 * site's navigation. I'm using it to add custom classes to the menu for various
 * hover effects. You could use a Menu Walker to things like build mega menus,
 * add icons to your menu, etc.
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Components Menu Walker Class
 */
class Components_Menu_Walker extends Walker_Nav_Menu {

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
		$object      = $item->object;
		$type        = $item->type;
		$title       = $item->title;
		$description = $item->description;
		$permalink   = $item->url;

		// opening li.
		$output .= "<li class='" . implode( ' ', $item->classes ) . "'>";

		// add span if no permalink.
		if ( $permalink && '#' !== $permalink && $this->has_children ) {
			// add a hover style to the first level with children.
			$output .= '<a href="' . $permalink . '" aria-haspopup="true" class="has-sub-menu level-' . $depth . '" data-submenu-open="false">';
		} elseif ( $permalink && '#' !== $permalink ) {
			$output .= '<a href="' . $permalink . '">';
		} else {
			$output .= '<span>';
		}

		// title.
		$output .= $title;

		// description if visible.
		if ( '' !== $description && 0 === $depth ) {
			$output .= '<small class="description">' . $description . '</small>';
		}

		// close out a/span.
		if ( $permalink && '#' !== $permalink ) {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}

	}
}
