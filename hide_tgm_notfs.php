<?php
/**
 * Plugin Name: Hide TGM plugin notification for non-admin logged-in users.	
 * Description: This plugin written by TieLabs Support Team to hide the TGM plugin notifications for non-admin users.
 * Version: 1.0.0
 * Author: TieLabs Support Team
 * License: GPL2
 */
function hide_tgm_notifications() {
		if(!current_user_can('install_plugins') ){
			wp_enqueue_style('tgm_hide', plugins_url('style.css', __FILE__));		    
		}
}
add_action('admin_enqueue_scripts', 'hide_tgm_notifications');
add_action('login_enqueue_scripts', 'hide_tgm_notifications');
add_action('plugins_loaded','hide_tgm_notifications');
?>


