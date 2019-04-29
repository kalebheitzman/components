<?php
/**
 * components functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package components
 */

if ( ! function_exists( 'components_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function components_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change '_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'components', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', '_s' ),
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'components_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'components_setup' );

/**
 * Enqueue scripts and styles.
 */
function components_scripts() {
	wp_enqueue_style( 'components-style', get_template_directory_uri() . '/css/style.css' );
	//wp_enqueue_script( 'components-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//wp_enqueue_script( 'components-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
	wp_enqueue_script( 'fontloader_js', get_template_directory_uri() . '/js/webfont.js', null, '', true );
	wp_add_inline_script( 'fontloader_js', 'WebFont.load({google:{families:["Lato:100,300,400,700", "Glyph:300"]}});', 'after' );
}
add_action( 'wp_enqueue_scripts', 'components_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';