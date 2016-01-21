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
		add_shortcode( 'busey-me', [ $this, 'busey_me' ] );
	}

	public function plugin_was_activated() {
		//activation hook
	}

	public function busey_me() {
		$response = wp_remote_get( 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=Gary+Busey' );
		if ( is_wp_error( $response ) ){
			return;
		}

		$response = json_decode( $response['body'], true );
		$gif = $response['data']['image_url'];

		return "<img src='{$gif}' alt='Utah, gimme two!' />";
	}
}
new WP_Pusher_Review();

