<?php
/*
 * Template utilities
 */
function is_blog () {
	return (is_archive() || is_author() || is_category() || is_single() || is_tag()) && 'post' == get_post_type();
}

function lp_theme_url() {
	return get_stylesheet_directory_uri();
}

function lp_theme_dir() {
	return get_stylesheet_directory();
}

function lp_theme_partial($path, $args = array()) {
	extract($args);
	include lp_theme_dir().$path;
}

function lp_image_dir(){
	echo lp_theme_url().'/images';
}

/*
 * Convert a given string to a slug
 */
function lp_slugify($text) {
	return sanitize_title($text);
}

/*
 * Theme file contents
 */
function lp_file_contents($path) {
	return file_get_contents(lp_theme_dir().$path);
}

/*
 * SVG icons
 */
function lp_svg_use($id, $width = 32, $height = 32, $class = 'icon') {
	return '<svg class="'.$class.'" width="'.$width.'" height="'.$height.'"><use xlink:href="#'.$id.'"></use></svg>';
}

/*
 * Font Awesome
 */
function lp_fa($icon, $alt = '') {
	return '<i class="fa '.$icon.'" aria-hidden="true"></i>'.($alt ? '<span class="sr-only">'.$alt.'</span>' : '');
}

/**
 * Check if a plugin is active
 *
 * @param $plugin_file Name of plugin file eg woocommerce/woocommerce.php
 * @return bool
 */
function lp_is_plugin_active($plugin_file) {
	static $plugins = null;

	if(!$plugins) {
		$plugins = get_option('active_plugins');
	}

	return in_array($plugin_file, $plugins);
}

/**
 * Return the type part of a mime type, eg for image/jpeg returns jpeg
 *
 * @param $mime the mime type to parse
 * @return string
 */
function lp_parse_mime($mime) {
	preg_match('/.*\/(\w*)\+?.*/', $mime, $matches);
	return $matches[1];
}