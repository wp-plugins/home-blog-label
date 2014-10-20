<?php
/*
Plugin Name: Home &amp; Blog Label
Plugin URI: https://github.com/dannisbet/home-blog-label
Version: 14.10
Description: Adds a Home or Blog label to a page title if it's manually set to display as the home or blog page.
Author: Dan Nisbet
Author URI: http://nisbetcreative.com/
*/

add_filter('display_post_states', 'hpl_home_label');
function hpl_home_label($post_states) {
	if(get_the_ID() == get_option('page_on_front')) {
		$post_states['home'] = __('Home');
	}
	elseif(get_the_ID() == get_option('page_for_posts')) {
		$post_states['blog'] = __('Blog');
	}
	return $post_states;
}