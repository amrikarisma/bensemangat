<?php

/**
 * BenSemangat enqueue scripts
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('bensemangat_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function bensemangat_scripts()
	{
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get('Version');

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style('bensemangat-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

		wp_enqueue_script('jquery');

		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script('bensemangat-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true);
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
} // End of if function_exists( 'bensemangat_scripts' ).

add_action('wp_enqueue_scripts', 'bensemangat_scripts');

if (!function_exists('bensemangat_global_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function bensemangat_global_scripts()
	{
		// Get the theme data.
		wp_enqueue_style('swiper-styles', 'https://unpkg.com/swiper@6.8.1/swiper-bundle.min.css', array(), '6.3.5');

		wp_enqueue_style('bensemangat-global-styles', get_template_directory_uri() . '/css/global.css', array(), '1.0.' . rand(10000, 99999));

		wp_enqueue_script('jquery');

		wp_enqueue_script('swiper-scripts', 'https://unpkg.com/swiper@6.8.1/swiper-bundle.min.js', array(), '6.3.5.', true);
		wp_enqueue_script('bensemangat-global-scripts', get_template_directory_uri() . '/js/global.js', array(), '1.0.' . rand(10000, 99999), true);
	}
} // End of if function_exists( 'bensemangat_global_scripts' ).

add_action('wp_enqueue_scripts', 'bensemangat_global_scripts', 1);
