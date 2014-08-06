<?php

$local_config = dirname( dirname( __FILE__ ) ) . '/local-config.php';
$prod_config = dirname( dirname( __FILE__ ) ) . '/production-config.php';

if ( file_exists( $local_config ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( $local_config  );
}
elseif ( file_exists( $prod_config ) ) {
	define( 'WP_LOCAL_DEV', false );
	include( $prod_config );
}
else{
	die( 'No config found:( Much saddness, very failure.');
}
require_once( 'application.php' );


require_once(ABSPATH . 'wp-settings.php');
