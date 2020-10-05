<?php
/**
 * ocs functions and definitions
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$ocs_includes = array(
	'/setup.php',                           // Theme setup and custom theme supports.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/pagination.php',                      // Custom pagination for this theme.
	'/class-wp-bootstrap-navwalker.php',    
	'/editor.php',                          // Load Editor functions.
);

foreach ( $ocs_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
