<?php
/**
 * Register Sidebars
 *
 * Registers sidebars for use throughout the site.
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Main Sidebar
 *
 * @return void
 */
function components_register_main_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'components' ),
			'id'            => 'main-sidebar',
			'description'   => __( 'Widgets in this area will be shown on the main sidebar.', 'components' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'components_register_main_sidebar' );

/**
 * Register Post Sidebar
 *
 * @return void
 */
function components_register_post_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Post Sidebar', 'components' ),
			'id'            => 'post-sidebar',
			'description'   => __( 'Widgets in this area will be shown on all posts.', 'components' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'components_register_post_sidebar' );

/**
 * Register Page Sidebar
 *
 * @return void
 */
function components_register_page_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Page Sidebar', 'components' ),
			'id'            => 'page-sidebar',
			'description'   => __( 'Widgets in this area will be shown on all pages.', 'components' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'components_register_page_sidebar' );


/**
 * Register Colophon Sidebar
 *
 * @return void
 */
function components_register_colophon_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Colophon Sidebar', 'components' ),
			'id'            => 'colophon-sidebar',
			'description'   => __( 'Widgets in this area will be shown on the colophon area.', 'components' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'components_register_colophon_sidebar' );
