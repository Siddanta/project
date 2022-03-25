<?php
// Committee Post Types
function customPostCommittee(){

$labels = array(
    'name' => __( 'Committee'),
    'singular_name' => __('Committee'),
    'search_items' => __('Search Committee'),
    'all_items' => __('All Committee'),
    'parent_item' => __( 'Parent Committee' ),
    'parent_item_colon' => __( 'Parent Committee:' ),
    'edit_item' => __( 'Edit Committee' ),
    'update_item' => __( 'Update Committee' ),
    'add_new_item' => __( 'Add New Committee' ),
    'new_item_name' => __( 'New Committee Name' ),
    'menu_name' => __( 'Committee' ),
);

$args = array(
    'label'   => __('Committee'),
    'description' => __('Committee'),
    'hierarchical' => false,
    'labels'            => $labels,
    'public'              => true,
    'hierarchical'        => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'has_archive'         => true,
    'can_export'          => true,
    'exclude_from_search' => false,
    'yarpp_support'       => true,
    'taxonomies' 	      => array('post_tag'),
    'publicly_queryable'  => true,
    'menu_icon'          => 'dashicons-clipboard',
    'capability_type'     => 'page',
    'rewrite'             => array(
    'slug'            => 'committee',),
    // 'has_archive'       => true,
    'supports'            => array('title','thumbnail','editor','excerpt'),
);
register_post_type('committee',$args);
}
add_action('init','customPostCommittee');

// Taxonomy

function add_custom_taxonomy() {
 
    $labels = array(
      'name' => _x( 'Types', 'taxonomy general name' ),
      'singular_name' => _x( 'Type', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Types' ),
      'all_items' => __( 'All Types' ),
      'parent_item' => __( 'Parent Type' ),
      'parent_item_colon' => __( 'Parent Type:' ),
      'edit_item' => __( 'Edit Type' ), 
      'update_item' => __( 'Update Type' ),
      'add_new_item' => __( 'Add New Type' ),
      'new_item_name' => __( 'New Type Name' ),
      'menu_name' => __( 'Types' ),
    ); 	
   
    register_taxonomy('level',array('committee'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'level' ),
    ));
  }
  add_action( 'init', 'add_custom_taxonomy' );

?>