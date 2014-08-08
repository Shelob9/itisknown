<?php
$root_dir = dirname(__DIR__);

if ( defined( 'WP_ROOT_DIR' ) ) {
	$webroot_dir = WP_ROOT_DIR;
}
else {
	$webroot_dir = $root_dir . '/web';
	define( 'WP_ROOT_DIR', $webroot_dir );
}

/**
 * Custom Content Directory
 */
define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * DB settings
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'isk_';

/**
 * Debug
 */

/**
 * Custom Settings
 */
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wp/');
}
