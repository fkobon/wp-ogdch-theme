<?php
// =======================================================================//
// Statistics API
// =======================================================================//

function tweet_statistics_handler() {
	wp_send_json_success( array( "tweet_count" => get_tweet_count() ) );
	die;
}

add_action( 'wp_ajax_tweet_statistics', 'tweet_statistics_handler' );
add_action( 'wp_ajax_nopriv_tweet_statistics', 'tweet_statistics_handler' );

function app_statistics_handler() {
	wp_send_json_success( array( "app_count" => get_localized_post_count( 'app' ) ) );
	die;
}

add_action( 'wp_ajax_app_statistics', 'app_statistics_handler' );
add_action( 'wp_ajax_nopriv_app_statistics', 'app_statistics_handler' );