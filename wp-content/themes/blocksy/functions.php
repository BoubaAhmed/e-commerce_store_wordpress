<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';



function product_count_shortcode($atts)
{
	$atts = shortcode_atts(['slug' => ''], $atts);
	$term = get_term_by('slug', $atts['slug'], 'product_cat');
	return $term ? $term->count : '0';
}
add_shortcode('product_count', 'product_count_shortcode');


