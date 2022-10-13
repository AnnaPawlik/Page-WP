<?php

/**
 * ------------------------------------------------------------------------
 * Theme's JavaScript Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's scripts. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if (!function_exists('wppage_register_scripts')) {
	/**
	 * Registers theme's JavaScript scripts.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function wppage_register_scripts()
	{
		wp_enqueue_script('theme-script', get_template_directory_uri() . '/public/js/app.js', '', null, true);
	}
}
add_action('wp_enqueue_scripts', 'wppage_register_scripts', 10, 2);
