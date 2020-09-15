<?php

// Filter the main queries
/*function filter_get_posts($query) {
	if(!is_admin()) {
		if($query->is_main_query() && $query->is_post_type_archive('project')) {
			$query->set('posts_per_page', 12);
		}
	}

	return $query;
}
add_filter('pre_get_posts', 'filter_get_posts');*/

/*
 * Query utils
 */
function lp_has_next_page($query = null) {
	if(!$query) {
		global $wp_query;
		$query = $wp_query;
	}

	$paged = $query->get('paged');
	if($paged < 1) {
		$paged = 1;
	}

	return $paged < $query->max_num_pages;
}

function lp_acf_source($source = null) {
	if(is_front_page()) {
		$source = get_option('page_on_front');
	}
	else if(is_home()) {
		$source = get_option('page_for_posts');
	}
	else if(!$source && !is_search() && !is_404()) {
		global $post;
		$source = $post->ID;
	}

	return $source;
}

function lp_get_primary_term($taxonomy, $id = false) {
	$id = ($id ? $id : get_the_ID());

	$term = false;
	if(class_exists('WPSEO_Primary_Term')) {
		$primary_term = new WPSEO_Primary_Term($taxonomy, $id);
		$term = get_term($primary_term->get_primary_term());
	}

	if(!$term || is_wp_error($term)) {
		$terms = get_the_terms($id, $taxonomy);

		if($terms && !is_wp_error($terms)) {
			foreach($terms as $t) {
				if($t->parent !== 0) {
					$term = $t;
					break;
				}
			}
		}

		if((!$term || is_wp_error($term)) && !empty($terms) && !is_wp_error($terms)) {
			$term = reset($terms);
		}
	}

	return $term;
}

function lp_count_results_for_posttype($post_type, $wp_query = null) {
	if($wp_query == null) {
		global $wp_query;
	}

	$args = array_merge(
		$wp_query->query,
		array(
			'post_type' => explode(',', $post_type),
			'posts_per_page' => 1,
			'paged' => 1,
		)
	);

	$transient_key = 'lp_count_results_'.md5(json_encode($args));

	$num_posts = get_transient($transient_key);
	if($num_posts === false) {
		$query = new WP_Query($args);
		$num_posts = $query->found_posts;

		set_transient($transient_key, $num_posts, WEEK_IN_SECONDS);
	}

	return $num_posts;
}

// Helper to get the full list of post IDs for the given WP_Query
function lp_get_current_query_post_ids($in_query = null) {
	static $posts = false;

	if(!$posts) {
		if(!$in_query) {
			global $wp_query;
			$in_query = $wp_query;
		}

		$query_args = $in_query->query_vars;
		$query_args['fields'] = 'ids';
		$query_args['posts_per_page'] = -1;
		$query_args['paged'] = 0;
		$query_args['nopaging'] = true;

		$query = new WP_Query($query_args);

		$posts = $query->posts;
	}

	return $posts;
}