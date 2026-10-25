<?php
/**
 * Store Theme functions.
 *
 * @package store-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the child stylesheet after Purple's styles.
 */
function store_theme_enqueue_styles() {
	wp_enqueue_style(
		'store-theme-style',
		get_stylesheet_uri(),
		array( 'purple-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'store_theme_enqueue_styles', 20 );
