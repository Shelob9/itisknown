<?php
//defien locations for
$local_config = dirname( dirname( __FILE__ ) ) . '/local-config.php';
$prod_config = dirname( dirname( __FILE__ ) ) . '/production-config.php';

//use local-config if we have one
if ( file_exists( $local_config ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( $local_config  );
}
else{
	//correct if production-config is in root, not above root
	if ( ! file_exists( $prod_config ) ) {
		$prod_config = dirname( __FILE__ ) . '/production-config.php';
	}

	//attempt to load production-config
	if ( file_exists( $prod_config ) ) {
		define( 'WP_LOCAL_DEV', false );
		include( $prod_config );
	}
	else {
		//@TODO include a static HTML fallback file before dying
		die( 'No config found:( Much saddness, very failure.' );
	}
}

//include common config stuff
require_once( 'application.php' );

//require wp-settings so we may have WordPress
require_once(ABSPATH . 'wp-settings.php');
