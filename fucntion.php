<?php
function awesome_script_enqueue(){
	wp_enqueue_style('customstyle', get_template_directory_url().'/css/awesome.css',  array (), '1.0.0', 'all');
	wp_enqueue_style('customjs', get_template_directory_url().'/js/awesome.js',  array (), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');