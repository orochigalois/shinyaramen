<?php

/*
 * Convert an iframe (like from an ACF oEmbed field) to a Vimeo background embed
 */
function lp_convert_embed_to_vimeo_background($embed) {
	if($embed && strpos($embed, 'vimeo.com') !== false) {
		$embed = lp_add_params_to_embed($embed, array('background' => 1));
	}

	return $embed;
}

/*
 * Add extra parameters to an embed's src attribute
 */
function lp_add_params_to_embed($embed, $params) {
	// Break at the src attribute
	$embed = explode('src="', $embed, 2);
	$before_src = $embed[0];

	// Break after the src attribute value
	$embed = explode('"', $embed[1], 2);
	$after_src = $embed[1];

	// Add the background parameter to the src attribute value
	$src = $embed[0];
	$src = add_query_arg($params, $src);

	// Reassemble
	$embed = $before_src.'src="'.$src.'"'.$after_src;

	return $embed;
}