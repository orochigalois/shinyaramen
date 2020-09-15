<?php

function lp_enqueue_frontend() {
	// Dequeue existing scripts
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

	// Third-party styles

	// Our styles
	wp_enqueue_style('main-style', get_template_directory_uri().'/dist/css/main.min.css');

	// Third-party scripts
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', '', true);
	//wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', '', '', true);
	wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '', true);

	if(defined('LP_GMAPS_KEY') && LP_GMAPS_KEY) { wp_enqueue_script('gmaps_api', 'https://maps.googleapis.com/maps/api/js?key='.LP_GMAPS_KEY, '', '', true); }

	// Our scripts
	wp_enqueue_script('vendor-script', get_template_directory_uri().'/dist/js/vendor.min.js', 'jquery','', true);
	wp_enqueue_script('main-script', get_template_directory_uri().'/dist/js/main.min.js', array('jquery', 'bootstrap'),'', true);
}
add_action('wp_enqueue_scripts', 'lp_enqueue_frontend');

function lp_enqueue_admin() {
	//add_editor_style(get_template_directory_uri().'/dist/css/editor-styles.css');
}
add_action('admin_init', 'lp_enqueue_admin');
