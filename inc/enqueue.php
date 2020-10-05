<?php
/**
 * ocs enqueue scripts
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'ocs_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function ocs_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'ocs-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		
		wp_enqueue_style( 'ocs-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Zilla+Slab:wght@700&display=swap', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'ocs-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
	}
} // endif function_exists( 'ocs_scripts' ).

add_action( 'wp_enqueue_scripts', 'ocs_scripts' );
