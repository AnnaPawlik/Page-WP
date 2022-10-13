<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 */

if ( ! function_exists( 'wppage_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function wppage_register_thumbnails() {
		add_image_size('post_image', 856, 443, true);
		add_image_size('post_thumbnail', 80, 80, true);
	}
}
add_action( 'after_setup_theme', 'wppage_register_thumbnails' );
