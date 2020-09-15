<?php
/*
 * Plugin Name: Style Guide
 * Description: Adds a style guide page to demonstrate site styling. See readme for further instructions.
 * Version:     1.1
 */


/**
 * Define constants
 * See https://stackoverflow.com/questions/1290318/php-constants-containing-arrays if using PHP < 7
 */
define('MODULES_FIELD_NAME', 'content_modules');
define('MODULES_POST_TYPES', array('page'));
define('MODULES_PARTIAL_PATH', 'partials/modules/');

/**
 * Create the endpoint
 */
function lp_styleguide_endpoint() {
	add_rewrite_endpoint('styleguide', EP_PERMALINK);
}
add_action('init', 'lp_styleguide_endpoint');


/**
 * Load the template
 *
 * @param $template
 *
 * @return string
 */
function lp_styleguide_template($template) {

	if(current_user_can('manage_options')) {
		global $wp_query;
		if ( $wp_query->query_vars['name'] == 'styleguide' ) {
			$template = plugin_dir_path( __FILE__ ).'page-styleguide.php';
		}
	}

	return $template;
}
add_action('template_include', 'lp_styleguide_template', 100, 1);


/**
 * Fix the <title>
 *
 * @param $title
 *
 * @return string
 */
function lp_styleguide_title_tag($title) {

	if(current_user_can('manage_options')) {
		global $wp_query;
		if ( $wp_query->query_vars['name'] == 'styleguide' ) {
			$title = 'Style Guide';
		}
	}

	return $title;
}
add_filter('wp_title', 'lp_styleguide_title_tag');
add_filter('wpseo_title', 'lp_styleguide_title_tag');
add_filter('the_seo_framework_title_from_generation', 'lp_styleguide_title_tag');


/**
 * Add body class
 *
 * @param $classes
 *
 * @return mixed
 */
function lp_styleguide_body_classes($classes) {
	global $wp_query;
	if($wp_query->query_vars['name'] == 'styleguide') {

		// Add styleguide class
		$classes[] = 'styleguide-page';

		// Remove error404 class
		$classes = array_diff($classes, array('error404'));
	}
	return $classes;
}
add_filter('body_class',  'lp_styleguide_body_classes');


/**
 * Add stylesheet
 */
function lp_styleguide_css() {
	wp_enqueue_style('styleguide', plugins_url() . '/styleguide-lp/styleguide.min.css');
}
add_action('wp_enqueue_scripts', 'lp_styleguide_css');


/**
 * Utility function to get all the flexible module names
 *
 * @return mixed
 */
function lp_get_flexible_module_names() {
	// get_field_objects() requires an ID, we can use anything that has flexible modules enabled - this assumes the homepage does
	$homepage_id = get_option('page_on_front');
	$field_objects = get_field_objects($homepage_id);
	$flexible_layouts = $field_objects[MODULES_FIELD_NAME]['layouts'];

	return $flexible_layouts;
}


/**
 * Utility function to get usages of modules
 *
 * @param $modules
 * @param string $orderby
 *
 * @return array
 */
function lp_get_flexible_module_usages($modules, $orderby = 'id') {

	// Create an array of [module_name] => Array() pairs
	// This will be populated with post IDs of pages/posts that use that module
	$flexibles = array();
	foreach($modules as $flexible_layout) {
		$name = $flexible_layout['name'];
		$flexibles[$name] = Array();
	}

	// Query all post types that have flexible modules enabled
	$args = array(
		'post_type'         => MODULES_POST_TYPES,
		'post_status'       => array('publish'),
		'posts_per_page'    => -1,
		'order'             => 'ASC',
		'orderby'           => $orderby,
	);
	$query = new WP_Query($args);
	if($query->have_posts()) {
		// Loop through the posts and add their IDs to the sub-array of each module they have
		while ($query->have_posts()) {
			$query->the_post();
			while(have_rows(MODULES_FIELD_NAME)) {
				the_row();
				$layout = get_row_layout();
				$flexibles[$layout][] = get_the_id();
			}
		}
	}
	wp_reset_postdata();

	return $flexibles;
}