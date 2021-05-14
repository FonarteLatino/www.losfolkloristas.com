<?php
/**
 * Omni Filters
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */

/**
 * Post Navigation Links
 */
function ant_add_class($format){
  $format = str_replace('href=', 'class="border-btn btn-small" href=', $format);
  return $format;
}
add_filter('next_post_link', 'ant_add_class');
add_filter('previous_post_link', 'ant_add_class');

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="border-btn btn-small"';
}

/**
 * Posts Order By
 */
add_filter( 'posts_orderby', 'sort_query_by_post_in', 10, 2 );
function sort_query_by_post_in( $sortby, $thequery ) {
	if ( !empty($thequery->query['post__in']) && isset($thequery->query['orderby']) && $thequery->query['orderby'] == 'post__in' )
		$sortby = "find_in_set(ID, '" . implode( ',', $thequery->query['post__in'] ) . "')";
	return $sortby;
}

/**
 * Set Custom Excerpt Length to 17
 */
function custom_excerpt_length( $length ) {
	return 17;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Change Excerpt More to Three Dots (...)
 */
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Filter Search query to only show blog posts
 */
function search_filter_posts($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','search_filter_posts');


/**
 * Function to diplay number of posts
 */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


/**
 * Function to count views
 */
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
