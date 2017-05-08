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

function sqd_register_jobs_post_type(){
  $args = array( 'public' => true, 'label' => 'Job Listing');
  register_post_type( 'job', $args );
}
add_action( 'init', 'sqd_register_jobs_post_type' );