<?php
/**
 * Get the browser from the $_SERVER special variable
 *
 * @return string
 */
function lp_get_browser() {
	if(empty($_SERVER['HTTP_USER_AGENT'])) {
		return '';
	}

	$useragent = $_SERVER['HTTP_USER_AGENT'];

	// NOTE: check for Edge before Chrome, because it's sneaky and tries to masquerade as Chrome
	switch($useragent) {
		case(stripos($useragent, 'MSIE') > 0):
		case(stripos($useragent, 'Trident') > 0):
			$browser = 'ie';
			break;
		case(stripos($useragent, 'Edge') > 0):
			$browser = 'ie edge';
			break;
		case(stripos($useragent, 'chrome') > 0):
			$browser = 'chrome';
			break;
		case(stripos($useragent, 'firefox') > 0):
			$browser = 'firefox';
			break;
		case(stripos($useragent, 'safari') > 0):
			$browser = 'safari';
			break;
		default:
			$browser = '';
	}

	return $browser;
}


/**
 * Add classes to the body tag
 *
 * @param $classes
 * @return array
 */
function lp_body_classes($classes) {
	// Page parent/section
	if(!is_archive() && !is_search() && !is_404()) {
		$post = get_post();
		$ancestors = get_post_ancestors($post->ID);

		if($post->post_parent) {
			$parent_id = end($ancestors);
		}
		else {
			$parent_id = $post->ID;
		}

		$parent_data = get_post($parent_id, ARRAY_A);
		$classes[] = 'section-' . $parent_data['post_name'];
	}

	// Browser
	$classes[] = lp_get_browser();

	return $classes;
}
add_filter('body_class', 'lp_body_classes');


/**
 * Add classes to post items
 */
function lp_post_classes($classes) {
	return $classes;
}
add_filter('post_class', 'lp_post_classes');


/**
 * remove p around img
 * @param $content
 *
 * @return string|string[]|null
 */
function lp_filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'lp_filter_ptags_on_images');


/**
 * Add a div around tables
 * @param $content
 *
 * @return string|string[]|null
 */
function lp_filter_div_on_table($content){
	return preg_replace('/(<table.*<\/table\>)/si','<div class="table-wrap">$0</div>', $content);
}
add_filter('the_content', 'lp_filter_div_on_table');


/**
 * Add a div around oEmbeds
 * @param $html
 * @param $url
 * @param $attr
 * @param $post_id
 *
 * @return string
 */
function lp_filter_div_on_oembed($html, $url, $attr, $post_id) {
	return '<div class="oembed">'.$html.'</div>';
}
add_filter('embed_oembed_html', 'lp_filter_div_on_oembed', 100, 4);