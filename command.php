<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Says "Hello World" to new users
 *
 * @when before_wp_load
 */
$q_command = function() {
	WP_CLI::success( "Hello Q world." );
};
WP_CLI::add_command( 'q', $q_command );
