<?php


$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;



$context['field'] = get_fields($context['pageID']);

$term = get_queried_object();
$context['term'] = $term;


$termName = 'trips-category';
$terms = get_terms(array(
  'taxonomy' => $termName,
  'hide_empty' => false,
));
$context['terms'] = $terms;


$args = array(
  'post_type' => 'trips',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order'=>'asc',
  'tax_query' => array(
    array(
      'taxonomy' => $termName,
      'terms' => $term->term_id,
      'field' => 'term_id',
    ),
  ),
); 
$context['posts'] = new Timber\PostQuery($args);



Timber::render( array( 
  'templates/views/6_trips/taxonomy.twig',
  'page.twig'
), $context );

?>
