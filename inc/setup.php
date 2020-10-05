<?php
/**
 * Theme basic setup
 *
 * @package ocs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}