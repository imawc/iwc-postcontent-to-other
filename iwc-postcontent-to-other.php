<?php
/**
 * Plugin Name: IWC PostContent to Other
 * Plugin URI:
 * Description: Display the content of a posted article in a separate article
 * Version: 0.1.0
 * Author: imawc
 * Author URI: https://ima-wc.jp
 * License: GPLv2 or later
 * Text Domain: iwc-postcontent-to-other
 *
 * @package iwc-postcontent-to-other
 * @author imawc
 * @license GPL-2.0+
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * shortcode.
 *
 * @param array $atts User defined attributes in shortcode tag.
 *
 * @return string
 */

function post_to_page_posts($atts) {
	extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );
	$post_data = get_post($id);
	$content = wp_kses_post($post_data->post_content);
	return $content;
}
add_shortcode('iwc-postby', 'post_to_page_posts');
