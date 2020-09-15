<?php

require 'inc/constants.php';

require 'inc/acf.php';
require 'inc/admin.php';
require 'inc/ajax.php';
require 'inc/enqueue.php';
require 'inc/forms.php';
require 'inc/markup.php';
require 'inc/media.php';
require 'inc/menus.php';
require 'inc/misc.php';
require 'inc/query.php';
require 'inc/register.php';


// Set the homepage <title> attribute;
/*function different_document_title($title) {
    if(is_front_page()) {
        $title = get_bloginfo('name');
    }

    return $title;
}
add_filter('pre_get_document_title', 'different_document_title', 100);*/

// Reroute inaccessible pages to 404
function reroute_to_404($template) {
	if(get_field('page_inaccessible')) {
		return locate_template('404.php');
	}
	else {
		return $template;
	}
}
add_filter('template_include', 'reroute_to_404');

// Redirect to a URL
function redirect_to_url() {
	$redirect = get_field('page_redirect');
	if($redirect && $redirect['url']) {
		wp_redirect($redirect['url']);
	}
}
add_action('template_redirect', 'redirect_to_url');
