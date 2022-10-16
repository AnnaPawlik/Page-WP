<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'services_post_type' ) ) {
	/**
	 * Registers a `products` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function services_post_type() {
		register_post_type(
			'services', array(
				'public'      => true,
				'supports'    => array( 'title', 'thumbnail' ),
				'rewrite' => array( 'slug' => 'services', 'with_front' => FALSE ),
				'menu_icon' => 'dashicons-database',
				'has_archive' => true,
				'labels'      => array(
					'name'                => _x( 'services', 'Post Type General Name', 'wppage' ),
					'singular_name'       => _x( 'service', 'Post Type Singular Name', 'wppage' ),
					'menu_name'           => __( 'Services', 'wppage' ),
					'name_admin_bar'      => __( 'services', 'wppage' ),
					'parent_item_colon'   => __( 'Rodzic:', 'wppage' ),
					'all_items'           => __( 'Wszystkie', 'wppage' ),
					'add_new_item'        => __( 'Dodaj nowy', 'wppage' ),
					'add_new'             => __( 'Dodaj nowy', 'wppage' ),
					'new_item'            => __( 'Nowy', 'wppage' ),
					'edit_item'           => __( 'Edytuj', 'wppage' ),
					'update_item'         => __( 'Aktualizuj', 'wppage' ),
					'view_item'           => __( 'Zobacz', 'wppage' ),
					'search_items'        => __( 'Szukaj', 'wppage' ),
					'not_found'           => __( 'Nie znaleziono', 'wppage' ),
					'not_found_in_trash'  => __( 'Nie znaleziono w koszu', 'wppage' ),
				),
			)
		);
	}
}
add_action( 'init', 'services_post_type' );

?>