<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'wppage_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function wppage_register_navigations() {
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'wppage' ),
				'footer_links' => esc_html__('Footer Menu Links', 'wppage'),
				'footer_services' => esc_html__('Footer Menu Services', 'wppage'),
			)
		);
	}
}
add_action( 'after_setup_theme', 'wppage_register_navigations' );
