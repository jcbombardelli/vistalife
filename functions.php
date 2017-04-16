<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */

add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

/**
 * Add/Remove some scripts
 */

function wpbuild_scripts(){
	
	if(is_admin()){ return; }
	
	// Remove WP jQuery version
	wp_deregister_script('jquery');
	
}

add_action('init', 'wpbuild_scripts');