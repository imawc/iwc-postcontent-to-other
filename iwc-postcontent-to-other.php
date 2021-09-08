<?php
/*
Plugin Name: IWC PostContent to other
Plugin URI:
Description: Display the content of a posted article in a separate article
Version: 0.1.0
Author: IMAWC
Author URI: https://ima-wc.jp
License: GPLv2 or later
*/

/**
 * usage [postto id="post_id"]
 */
function post_to_page_posts($atts) {
	extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );
	$post_data = get_post($id);
	$content = wp_kses_post($post_data->post_content);
	return $content;
}
add_shortcode('postto', 'post_to_page_posts');
