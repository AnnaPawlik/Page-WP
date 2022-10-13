<?php
/**
 * ------------------------------------------------------------------------
 * ACF Configuration
 * ------------------------------------------------------------------------
 */

// create the default options page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// acf fields update & save to the JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}

/**
 * Register the path to load the ACF json files so that they are version controlled.
 * @param $paths The default relative path to the folder where ACF saves the files.
 * @return string The new relative path to the folder where we are saving the files.
 */

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/acf-json';
  return $paths;
}
