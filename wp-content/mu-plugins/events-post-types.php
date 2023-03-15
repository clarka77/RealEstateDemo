<?php
/**
 * Add post type 'Showings'.
 */
 add_action('init', 'clarka_post_types_showings');
 function clarka_post_types_showings() {
   // Adds post type -> Showings to Admin themes
   register_post_type('showings', array(
     'rewrite' => array('slug' => 'showings'),
     'has_archive' => true,
     'public' => true,
     //'show_in_rest' => true,
     'labels' => array(
       'name' => 'House Showings',
       'add_new_item' => 'Add New House Showing',
       'edit_item' => 'Edit House Showing',
       'all_items' => 'All House Showings',
       'singular_name' => 'House Showing'
     ),
     'menu_icon' => 'dashicons-calendar'
   ));
 }

/**
 * Add post type 'SalesAgents'.
 */
add_action('init', 'clarka_post_types_salesagents');
function clarka_post_types_salesagents() {
  // Adds post type -> SalesAgents to Admin themes
  register_post_type('salesagents', array(
    'rewrite' => array('slug' => 'salesagents'),
    'has_archive' => true,
    'public' => true,
    //'show_in_rest' => true,
    'labels' => array(
      'name' => 'Sales Agents',
      'add_new_item' => 'Add New Sales Agent',
      'edit_item' => 'Edit Sales Agent',
      'all_items' => 'All Sales Agents',
      'singular_name' => 'Sales Agent'
    ),
    'menu_icon' => 'dashicons-businessperson'
  ));
}
