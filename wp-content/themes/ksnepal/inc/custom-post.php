<?php
// Committee Post Types
function customPostCommittee()
{

  $labels = array(
    'name' => __('Committee'),
    'singular_name' => __('Committee'),
    'search_items' => __('Search Committee'),
    'all_items' => __('All Committee'),
    'parent_item' => __('Parent Committee'),
    'parent_item_colon' => __('Parent Committee:'),
    'edit_item' => __('Edit Committee'),
    'update_item' => __('Update Committee'),
    'add_new_item' => __('Add New Committee'),
    'new_item_name' => __('New Committee Name'),
    'menu_name' => __('Committee'),
  );

  $args = array(
    'label'   => __('Committee'),
    'description' => __('Committee'),
    'hierarchical' => true,
    'labels'            => $labels,
    'public'              => true,
    'hierarchical'        => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_rest' => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'has_archive'         => true,
    'can_export'          => true,
    'exclude_from_search' => false,
    'yarpp_support'       => true,
    'taxonomies'         => array('post_tag'),
    'publicly_queryable'  => true,
    'menu_icon'          => 'dashicons-clipboard',
    'capability_type'     => 'page',
    'rewrite'             => array(
      'slug'            => 'committee',
    ),
    'supports'            => array('title', 'thumbnail', 'editor', 'excerpt', 'page-attributes'),
  );
  register_post_type('committee', $args);
}
add_action('init', 'customPostCommittee');

// Taxonomy

function add_custom_taxonomy()
{

  $labels = array(
    'name' => _x('Designations', 'taxonomy general name'),
    'singular_name' => _x('Designation', 'taxonomy singular name'),
    'search_items' =>  __('Search Designation'),
    'all_items' => __('All Designations'),
    'parent_item' => __('Parent Type'),
    'parent_item_colon' => __('Parent Designation:'),
    'edit_item' => __('Edit Designation'),
    'update_item' => __('Update Designation'),
    'add_new_item' => __('Add New Designation'),
    'new_item_name' => __('New Designation Name'),
    'menu_name' => __('Designations'),
  );

  register_taxonomy('designation', array('committee'), array(
    'labels' => $labels,
    'hierarchical' => true,
    'public'  => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  ));
}
add_action('init', 'add_custom_taxonomy');

function add_custom_place_taxonomy()
{

  $labels = array(
    'name' => _x('Places', 'taxonomy general name'),
    'singular_name' => _x('Place', 'taxonomy singular name'),
    'search_items' =>  __('Search Place'),
    'all_items' => __('All Places'),
    'parent_item' => __('Parent Place'),
    'parent_item_colon' => __('Parent Place:'),
    'edit_item' => __('Edit Place'),
    'update_item' => __('Update Place'),
    'add_new_item' => __('Add New Place'),
    'new_item_name' => __('New Place Name'),
    'menu_name' => __('Places'),
  );

  register_taxonomy('place', array('committee'), array(
    'labels' => $labels,
    'hierarchical' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'place'),
  ));
}
add_action('init', 'add_custom_place_taxonomy');



// Programs Post Type

function customPostProgram()
{

  $labels = array(
    'name' => __('Program'),
    'singular_name' => __('Program'),
    'search_items' => __('Search Program'),
    'all_items' => __('All Program'),
    'parent_item' => __('Parent Program'),
    'parent_item_colon' => __('Parent Program:'),
    'edit_item' => __('Edit Program'),
    'update_item' => __('Update Program'),
    'add_new_item' => __('Add New Program'),
    'new_item_name' => __('New Program Name'),
    'menu_name' => __('Program'),
  );

  $args = array(
    'label'   => __('Program'),
    'description' => __('Program'),
    'hierarchical' => false,
    'labels'            => $labels,
    'public'              => true,
    'hierarchical'        => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'has_archive'         => false,
    'can_export'          => true,
    'exclude_from_search' => false,
    'yarpp_support'       => true,
    'taxonomies'         => array('post_tag'),
    'publicly_queryable'  => true,
    'menu_icon'          => 'dashicons-menu',
    'capability_type'     => 'page',
    'rewrite'             => array(
      'slug'            => 'program',
    ),
    // 'has_archive'       => true,
    'supports'            => array('title', 'thumbnail', 'editor', 'excerpt'),
  );
  register_post_type('program', $args);
}
add_action('init', 'customPostProgram');

function customPostGallery()
{

  $labels = array(
    'name' => __('Gallery'),
    'singular_name' => __('Gallery'),
    'search_items' => __('Search Gallery'),
    'all_items' => __('All Gallery'),
    'parent_item' => __('Parent Gallery'),
    'parent_item_colon' => __('Parent Gallery:'),
    'edit_item' => __('Edit Gallery'),
    'update_item' => __('Update Gallery'),
    'add_new_item' => __('Add New Gallery'),
    'new_item_name' => __('New Gallery Name'),
    'menu_name' => __('Gallery'),
  );

  $args = array(
    'label'   => __('Gallery'),
    'description' => __('Gallery'),
    'hierarchical' => false,
    'labels'            => $labels,
    'public'              => true,
    'hierarchical'        => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'has_archive'         => false,
    'can_export'          => true,
    'exclude_from_search' => false,
    'yarpp_support'       => true,
    'taxonomies'         => array('post_tag'),
    'publicly_queryable'  => true,
    'menu_icon'          => 'dashicons-images-alt2',
    'capability_type'     => 'page',
    'rewrite'             => array(
      'slug'            => 'gallery',
    ),
    'has_archive'       => true,
    'supports'            => array('title', 'thumbnail', 'editor', 'excerpt'),
  );
  register_post_type('gallery', $args);
}
add_action('init', 'customPostGallery');