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

// register jquery and style on initialization
add_action('init', 'register_script');
function register_script() {
    wp_register_script( 'skipperjs', plugins_url(), 'includes/skipper.js', array('jquery') );
    wp_register_style( 'skippercss', plugins_url(), 'includes/skipper.css', false, '1.0.0', 'all');
    wp_register_style( 'hovercss', plugins_url(), 'includes/hover.css', false, '1.0.0', 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style', 12);

function enqueue_style(){
   wp_enqueue_script('skipperjs');
   wp_enqueue_style( 'skippercss' );
   wp_enqueue_style( 'hovercss' );
}

require 'includes/wp-add-custom-css/wordpress-add-custom-css.php';

//require 'social-icons/social-icons.php';

// Update CSS within in Admin
//Second solution : two or more files.
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
  wp_enqueue_style( 'skipper_admin', '/app/plugins/skipper-addons/includes/admin.css', '', false, '1.0.0' );
  //wp_enqueue_style( 'admin_css_bar', get_template_directory_uri() . '/admin-style-bar.css', false, '1.0.0' );
}

?>
