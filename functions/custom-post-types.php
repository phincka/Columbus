<?php 
/**
 * Reguster post types
 *
 * @return void
 */


function postTypes()
{
  $trips_args = array(
    'public' => true,
    'label'  => 'Wycieczki',
    'supports' => array( 'title', 'thumbnail'),
    'show_in_nav_menus' => true,
    'rewrite' => array( 'slug' => 'wycieczki'),
  );
  register_post_type( 'trips', $trips_args );


  register_taxonomy(  
    'trips-category',  
    'trips',  
      array(  
        'hierarchical' => true,
        'labels' => array('name' => 'Wycieczki', 'add_new_item' => __( 'Dodaj nową lokalizacje' )),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'wycieczka', 'hierarchical' => true),
      )  
  );  

}
add_action('init', 'postTypes', 0);