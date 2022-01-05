<?php 
/**
 * Reguster post types
 *
 * @return void
 */


function postTypes()
{
  $sales_args = array(
    'public' => true,
    'label'  => 'Promocje',
    'supports' => array( 'title', 'thumbnail'),
    'show_in_nav_menus' => true,
    'rewrite' => array( 'slug' => 'promocje'),
  );
  register_post_type( 'sales', $sales_args );


  register_taxonomy(  
    'sales-category',  
    'sales',  
      array(  
        'hierarchical' => true,
        'labels' => array('name' => 'Lokalizacja', 'add_new_item' => __( 'Dodaj nową lokalizacje' )),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'kategoria', 'hierarchical' => true),
      )  
  );  


  $products_args = array(
    'public' => true,
    'label'  => 'Produkty',
    'supports' => array( 'title', 'thumbnail'),
    'show_in_nav_menus' => true,
    'rewrite' => array( 'slug' => 'produkty'),
  );
  register_post_type( 'products', $products_args );


  register_taxonomy(  
    'products-city',  
    'products',  
      array(  
        'hierarchical' => true,
        'labels' => array('name' => 'Lokalizacja', 'add_new_item' => __( 'Dodaj nową lokalizacje' )),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'miasto', 'hierarchical' => true),
      )  
  );  

  register_taxonomy(  
    'products-category',  
    'products',  
      array(  
        'hierarchical' => true,
        'labels' => array('name' => 'Kategoria', 'add_new_item' => __( 'Dodaj nową kategorie' )),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'kateogria', 'hierarchical' => true),
      )  
  );  
}
add_action('init', 'postTypes', 0);


?>



