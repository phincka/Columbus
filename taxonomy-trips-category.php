<?php


$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;



$context['field'] = get_fields($context['pageID']);

$term = get_queried_object();
$context['term'] = $term;


$termName = 'trips-category';
// $terms = get_terms(array(
//   'taxonomy' => $termName,
//   'hide_empty' => false,
// ));
// $context['terms'] = $terms;


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


$taxArgs = array(
  'hide_empty' => false, 
  'parent' => $term->term_id
);
$categories = get_terms('trips-category', $taxArgs);

array_push($categories, $term);

foreach ($categories as $category) {
  $taxArgsChilds = array(
    'hide_empty' => false, 
    'parent' => $category->term_id
  );
  $childs = get_terms('trips-category', $taxArgsChilds);

  foreach ($childs as $children) {
    array_push($categories, $children);
  }

}

$categoryHierarchy = array();
sort_terms_hierarchically($categories, $categoryHierarchy);

$context['categoryHierarchy'] = $categoryHierarchy;



Timber::render( array( 
  'templates/views/6_trips/taxonomy.twig',
  'page.twig'
), $context );

?>
