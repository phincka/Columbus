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




$categories = get_terms('trips-category', array('hide_empty' => false));
$categoryHierarchy = array();
sort_terms_hierarchically($categories, $categoryHierarchy);

$context['categoryHierarchy'] = $categoryHierarchy;




Timber::render( array( 
  'templates/views/6_trips/trips.twig',
  'page.twig'
), $context );

?>