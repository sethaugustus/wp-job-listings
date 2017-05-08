<?php
/**
* Plugin Name: WP Job Listings
* Plugin URI: http://sethquittner.com
* Description: A test plugin
* Author: Seth Quittner
* Author URI: http://sethquittner.com
* Version: 1.0.0
* License: GPLv2
*/
//exit if accessed directly
if (! defined( 'ABSPATH' ) ) {
  exit;
}

$dir = plugin_dir_path(__FILE__);
require ( $dir . 'inc/wp-jobs-sqd.php');

