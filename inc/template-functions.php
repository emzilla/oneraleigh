<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package oneraleigh
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

/* Custom Setup
------------------------------------------------------------------------ */

function custom_setup() {
	// launching operation cleanup
	add_action( 'init', 'head_cleanup' );
	// remove pesky injected css for recent comments widget
	add_filter( 'wp_head', 'remove_wp_widget_recent_comments_style', 1 );
	// clean up comment styles in the head
	add_action( 'wp_head', 'remove_recent_comments_style', 1 );
	// enqueue base scripts and styles
	add_action( 'wp_enqueue_scripts', 'scripts_and_styles', 999 );
	// launching this stuff after theme setup
	theme_setup();
	// adding sidebars to Wordpress (these are created in functions.php)
	// add_action( 'widgets_init', 'theme_widgets_init' );
	add_action( 'wp_head', 'oneraleigh_pingback_header' );
  }


/* Extras
------------------------------------------------------------------------ */
function head_cleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	// windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );
	// remove WP version from css
	add_filter( 'style_loader_src', 'remove_wp_ver_css_js', 9999 );
	// remove Wp version from scripts
	add_filter( 'script_loader_src', 'remove_wp_ver_css_js', 9999 );
}

// remove WP version from scripts
function remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
	  $src = remove_query_arg( 'ver', $src );
	return $src;
}

// remove admin bar
// add_filter('show_admin_bar', '__return_false');



/* Enqueue scripts and styles.
------------------------------------------------------------------------ */

function scripts_and_styles() {

	// Enqueue Styles
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Register Styles
	wp_register_style( 'oneraleigh-stylesheet', get_stylesheet_directory_uri() . '/assets/styles/style.css', array(), '', 'all' );

	// Register Scripts

	wp_register_script( 'oneraleigh-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

	// enqueue styles and scripts
	wp_enqueue_style( 'oneraleigh-stylesheet' );
	wp_enqueue_script( 'oneraleigh-scripts' );
}


function oneraleigh_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'oneraleigh_body_classes' );


/* Theme Setup
------------------------------------------------------------------------ */

function theme_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 825, 510, true );

	// wp custom background (thx to @bransonwerner for update)
	  add_theme_support( 'custom-background',
	      array(
	      'default-image' => '',    // background image default
	      'default-color' => '',    // background color default (dont add the #)
	      'wp-head-callback' => '_custom_background_cb',
	      'admin-head-callback' => '',
	      'admin-preview-callback' => ''
	      )
	  );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
		'social'  => __( 'Social Links Menu' ),
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function oneraleigh_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
