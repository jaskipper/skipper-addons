<?php

/*
Plugin Name:  Skipper Customized Addons
Plugin URI:   https://skipperinnovations.com
Description:  Custom Plugins from the man himself... Jason Skipper
Version:      1.0.0
Author:       Jason Skipper
Author URI:   https://skipperinnovations.com
License:      MIT License
*/

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style' );
function enqueue_style(){
   wp_enqueue_script('skipperjs', plugins_url('skipper-addons/includes/skipper.js', __FILES__) );
   wp_enqueue_style( 'skippercss', plugins_url('skipper-addons/includes/skipper.css', __FILES__) );
   wp_enqueue_style( 'hovercss', plugins_url('skipper-addons/includes/hover.css', __FILES__) );
}

//require 'social-icons/social-icons.php';

// Update CSS within in Admin
//Second solution : two or more files.
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
  wp_enqueue_style( 'skipper_admin', plugins_url('includes/admin.css', __FILE__) );
  //wp_enqueue_style( 'admin_css_bar', get_template_directory_uri() . '/admin-style-bar.css', false, '1.0.0' );
}

?>
