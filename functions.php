<?php

function page_link($page_name) {
	$page_obj = get_page_by_title($page_name);
	return get_page_link($page_obj->ID);
}

/**
* @desc a wrapper for the wordpress wp_list_pages() function that
* will display one or two unordered lists:
* 1) primary nav, a ul with css id #nav - always shown even if empty
* 2) Optional secondary nav, a ul with css id #subNav
*
* TODO: default css provided to allow space for both nav 'bars' one below the other to stop the page jig
*
* @return string (html)
*/

function main_nav() {
	$output = "";
	$home_id = get_page_id(home);
	$params = "title_li=&depth=1&echo=0&exclude=$home_id";

	// always show top level
	$output .= '<div class="main-menu">';
	$output .= '<ul>';
	$output .= wp_list_pages($params);
	$output .= '</ul>';
	$output .= '</div>';

	return $output;
}

/**
* @desc make the site's heading & tagline an h1 on the homepage and an h4 on internal pages
* Naked's default CSS should make the two different states look identical
*/
function do_heading() {
	$output = "";
	
	if(is_home()) $output .= "<h1 id='site-title'>"; else  $output .= "<h4 id='site-title'>";

	$output .= "<a href='"  . get_bloginfo('url') . "'>" . get_bloginfo('name') . "</a>";

	if(is_home()) $output .= "</h1>"; else  $output .= "</h4>";

	return $output;
}

/**
* register_sidebar()
*
* @desc Registers the markup to display in and around a widget
*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array('name'=>'journal'));
	register_sidebar(array('name'=>'portfolio'));
	register_sidebar(array('name'=>'about'));
	register_sidebar(array('name'=>'pastime'));
	register_sidebar(array(
		'name'=>'twitter-box', 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''));
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
function post_is_in_descendant_category( $cats, $_post = null ) {
	foreach ( (array) $cats as $cat ) {
		// get_term_children() accepts integer ID only
		$descendants = get_term_children( (int) $cat, 'category');
		if ( $descendants && in_category( $descendants, $_post ) )
			return true;
	}
	return false;
}

// Register Theme Features
function custom_theme_features() {
	global $wp_version;

	// Add theme support for Automatic Feed Links
	if ( version_compare( $wp_version, '3.0', '>=' ) ) :
		add_theme_support( 'automatic-feed-links' );
	else :
		automatic_feed_links();
	endif;

	// Customize menu items?
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	function special_nav_class($classes, $item){
		if (get_the_ID() != $item->ID){ //Notice you can change the conditional from is_single() and $item->title
			$classes[] = "hidden";
		}
		return $classes;
	}

	// Pitch the admin bar
	show_admin_bar(false);
}

// Init jQuery
function init_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		// Load the Google jQuery script
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', false, '2.1.1', true);
		wp_enqueue_script('jquery');

		// Get my script
		if (!is_front_page()) {
			wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/theme-script.js', array('jquery'), '1.0', true);
		}
	}
}
add_action( 'init', 'init_jquery' );

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'custom_theme_features' );

?>