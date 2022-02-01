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



function sort_terms_hierarchically(Array &$cats, Array &$into, $parentId = 0)
{
    foreach ($cats as $i => $cat) {
        if ($cat->parent == $parentId) {
            $into[$cat->term_id] = $cat;
            unset($cats[$i]);
        }
    }

    foreach ($into as $topCat) {
        $topCat->children = array();
        sort_terms_hierarchically($cats, $topCat->children, $topCat->term_id);
    }
}
