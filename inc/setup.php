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

add_action( 'wp_before_admin_bar_render', 'ocs_admin_bar_render' );

function ocs_admin_bar_render() {
	
    global $wp_admin_bar;
	$wp_admin_bar->remove_menu('gappointments');
	
}

add_action('admin_menu', 'ocs_remove_admin_posts' );

function ocs_remove_admin_posts() {
	
	remove_menu_page('edit.php'); 

}

add_action( 'admin_init', 'ocs_rename_plugin_menus' );

function ocs_rename_plugin_menus() {
	
    global $menu;

    $updates = array(
        "gAppointments" => array(
            'name' => 'Schedule',
        )
    );

    foreach ( $menu as $k => $props ) {

        // Check for new values
        $new_values = ( isset( $updates[ $props[0] ] ) ) ? $updates[ $props[0] ] : false;
        
        if ( ! $new_values ) continue;

        // Change menu name
        $menu[$k][0] = $new_values['name'];

    }
    
}