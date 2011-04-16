<?php
/**
 * @package WordPress
 * @subpackage YOUR_THEME
 */

add_theme_support('automatic-feed-links');

/*
	
	Remove the admin bar

*/

add_filter( 'show_admin_bar', '__return_false' );