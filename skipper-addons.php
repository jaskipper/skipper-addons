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
    wp_register_script( 'skipperjs', plugins_url('includes/skipper.js', __FILE__), array('jquery') );
    wp_register_style( 'skippercss', plugins_url('includes/skipper.css', __FILE__), false, '1.0.0', 'all');
    wp_register_style( 'hovercss', plugins_url('includes/hover.css', __FILE__), false, '1.0.0', 'all');
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
function admin_style() {
  wp_enqueue_style('admin-styles', 'includes/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

?>
