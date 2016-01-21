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
		error_log( 'Func test plugin constructed...' );
		register_activation_hook( __FILE__, [ $this, 'plugin_was_activated' ] );
	}

	public function plugin_was_activated() {
		//activation hook
	}
}
new WP_Pusher_Review();

