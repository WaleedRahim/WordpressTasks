<?php
/* This is The Custom Post type Functions File */

// Register Custom Post Type Project

add_action( 'init', 'create_project_cpt' ); // action Hook for custom post types
function create_project_cpt() {

    $labels = array(
        'name' => _x( 'Projects', 'test' ),
        'singular_name' => _x( 'Project', 'test' ),
        'menu_name' => _x( 'Projects', 'test' ),
        'name_admin_bar' => _x( 'Project', 'test' ),
        'archives' => __( 'Project Archives', 'test' ),
        'attributes' => __( 'Project Attributes', 'test' ),
        'parent_item_colon' => __( 'Parent Project:', 'test' ),
        'all_items' => __( 'All Projects', 'test' ),
        'add_new_item' => __( 'Add New Project', 'test' ),
        'add_new' => __( 'Add New', 'test' ),
        'new_item' => __( 'New Project', 'test' ),
        'edit_item' => __( 'Edit Project', 'test' ),
        'update_item' => __( 'Update Project', 'test' ),
        'view_item' => __( 'View Project', 'test' ),
        'view_items' => __( 'View Projects', 'test' ),
        'featured_image' => __( 'Featured Image', 'test' ),
        'set_featured_image' => __( 'Set featured image', 'test' ),
        'remove_featured_image' => __( 'Remove featured image', 'test' ),
        'use_featured_image' => __( 'Use as featured image', 'test' ),
        'insert_into_item' => __( 'Insert into Project', 'test' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Project', 'test' ),
        'items_list' => __( 'Projects list', 'test' ),
        'items_list_navigation' => __( 'Projects list navigation', 'test' ),
        'filter_items_list' => __( 'Filter Projects list', 'test' ),
    );
    $args = array(
        'label' => __( 'Project', 'test' ),
        'description' => __( '', 'test' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',


    );

    register_taxonomy('projecttype', 'project', array(
   
    'hierarchical' => true,
   
    'labels' => array(
      'name' => _x( 'Project Type', 'Project Type' ),
      'singular_name' => _x( 'Project Type', 'Project Type' ),
      'search_items' =>  __( 'Search Project Type' ),
      'all_items' => __( 'All Project Types' ),
      'parent_item' => __( 'Parent Project Type' ),
      'parent_item_colon' => __( 'Parent Project Type:' ),
      'edit_item' => __( 'Edit Project Type' ),
      'update_item' => __( 'Update Project Type' ),
      'add_new_item' => __( 'Add New Project Type' ),
      'new_item_name' => __( 'New Project Type' ),
      'menu_name' => __( 'Project Type' ),
    ),
    
    'rewrite' => array(
      'slug' => 'Projecttypee', 
      'with_front' => false, 
      'hierarchical' => true 
    ),
  ));

    register_post_type( 'project', $args );

}



 


?>