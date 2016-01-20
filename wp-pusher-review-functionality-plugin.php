<?php
/*
Plugin Name: WP Pusher Review Site Functionality
Plugin URI: http://deliciousbrains.com/blog
Description: Functionality plugin for WP Pusher Review Site
Author: Jeff Gould
Version: 0.1
Author URI: http://deliciousbrains.com
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


class WP_Pusher_Review {
	function __construct() {
		// Register hooks here
		error_log( 'plugin constructed...' );
		add_action('wppusher_plugin_was_updated', [ $this, 'plugin_was_updated'], 10, 1);
	}
	public function plugin_was_updated( $action ) {
		error_log( print_r( [ 'action' => $action], 1 ) );
	}
}
new WP_Pusher_Review();

