<?php

function page_link($page_name) {
	$page_obj = get_page_by_title($page_name);
	return get_page_link($page_obj->ID);
}

/**
* Check to see if this page will paginate
*
* @return boolean
*/
function will_paginate() {
	global $wp_query;

	if ( !is_singular() )
	{
		$max_num_pages = $wp_query->max_num_pages;

		if ( $max_num_pages > 1 )
		{
			return true;
		}
	}
	return false;
}

/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param mixed $cats The target categories. Integer ID or array of integer IDs
 * @param mixed $_post The post
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Gets descendants of target category
 * @uses in_category() Tests against descendant categories
 * @version 2.7
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

function filter_shorten_linktext($linkstring,$link) {
	$characters = 33;
	preg_match('/<a.*?>(.*?)<\/a>/is',$linkstring,$matches);
	$displayedTitle = $matches[1];
	$newTitle = shorten_with_ellipsis($displayedTitle,$characters);
	return str_replace('>'.$displayedTitle.'<','>'.$newTitle.'<',$linkstring);
}

function shorten_with_ellipsis($inputstring,$characters) {
	return (strlen($inputstring) >= $characters) ? substr($inputstring,0,($characters-3)) . '...' : $inputstring;
}

// This adds filters to the next and previous links, using the above functions
// to shorten the text displayed in the post-navigation bar. The last 2 arguments
// are necessary; the last one is the crucial one. Saying "2" means the function
// "filter_shorten_linktext()" takes 2 arguments. If you don't say so here, the
// hook won't pass them when it's called and you'll get a PHP error.
add_filter('previous_post_link','filter_shorten_linktext', 10, 2);
add_filter('next_post_link','filter_shorten_linktext', 10, 2);

// Register Theme Features
function custom_theme_features() {
	global $wp_version;

	// Add theme support for Automatic Feed Links
	if ( version_compare( $wp_version, '3.0', '>=' ) ) :
		add_theme_support( 'automatic-feed-links' );
	else :
		automatic_feed_links();
	endif;

	// Pitch the admin bar
	show_admin_bar(false);
}

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, true);

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );

?>