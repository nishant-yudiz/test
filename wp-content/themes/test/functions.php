<?php
// child theme css created
add_action('wp_enqueue_scripts', 'enqueue_parent_styles' , 10 , 2);
function enqueue_parent_styles()
{
	wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/style.css');
}