<?php
/*
Plugin Name: Cornerstone Facebook Comments
Plugin URI:
Description: Facebook commments as a Cornerstone element.
Author: Dean Barrow
Author URI: https://woofyweb.com/
Version: 0.1.0
*/

function cornerstone_fb_comments_activate(){
    if ( ! is_plugin_active( 'x-facebook-comments/x-facebook-comments.php' ) and current_user_can( 'activate_plugins' ) ) {
        wp_die('Sorry, but this plugin requires the X - Facebook Comments plugin to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}
register_activation_hook( __FILE__, 'cornerstone_fb_comments_activate' );


function fb_comments_register_elements() {
	cornerstone_register_element( 'FB_Comments', 'fb-comments', plugin_dir_path( __FILE__ ) . 'includes/fb-comments' );
}
add_action( 'cornerstone_register_elements', 'fb_comments_register_elements' );

function fb_comments_icon_map( $icon_map ) {
	$icon_map['fb-comments'] = plugin_dir_url( __FILE__ ) . '/assets/svg/icons.svg';
	return $icon_map;
}
add_filter( 'cornerstone_icon_map', 'fb_comments_icon_map' );