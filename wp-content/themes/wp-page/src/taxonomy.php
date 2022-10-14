<?php
// hook into the init action and call mentors_taxonomies when it fires
add_action('init', 'services_taxonomies', 0);

function services_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x('Kategorie', 'taxonomy general name', 'wppage'),
    'singular_name'     => _x('Kategorie', 'taxonomy singular name', 'wppage'),
    'search_items'      => __('Szukaj', 'wppage'),
    'all_items'         => __('Wszystkie', 'wppage'),
    'parent_item'       => __('Rodzic', 'wppage'),
    'parent_item_colon' => __('Rodzic:', 'wppage'),
    'edit_item'         => __('Edytuj', 'wppage'),
    'update_item'       => __('Aktualizuj', 'wppage'),
    'add_new_item'      => __('Dodaj nową', 'wppage'),
    'new_item_name'     => __('Nowa pozycja', 'wppage'),
    'menu_name'         => __('Kategorie', 'wppage'),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'kategoria', 'with_front' => true),
  );

  register_taxonomy('services_category', array('services'), $args);
}
?>