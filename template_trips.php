<?php
/*
* Template Name: Wycieczki
* @package ths
*/

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
$context['field'] = get_fields();

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
  $paged = get_query_var('page');
} else {
$paged = 1;
}
$args = array(
  'post_type' => 'trips',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'orderby' => 'date',
  'order'=>'asc',
  'paged' => $paged,
); 
$context['posts'] = new Timber\PostQuery($args);


$categories = array();
foreach (get_terms('category') as $category) {
  $url = get_term_link($category->term_id, 'category');
  $singleCategory = array($category->count, $category->name, $url);
  
  array_push($categories, $singleCategory);
}

$context['categories'] = $categories;


Timber::render( array( 
  'templates/views/6_trips/trips.twig',
  'page.twig'
), $context );

?>