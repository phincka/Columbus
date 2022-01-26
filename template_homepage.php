<?php
  /*
  * Template Name: Home
  * @package ths
  */


$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;


$args = array(
  'post_type' => 'trips',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'orderby' => 'date',
  'order'=>'asc',
); 
$context['posts'] = new Timber\PostQuery($args);


$args2 = array(
  'post_type' => 'trips',
  'status'    => 'approve',
  'orderby' => 'rand',
  'order' => 'ASC',
  'number' => '3',
);
$opinions = get_comments( $args2 );
$context['opinions'] = $opinions;

$taxArgs = array(
  'taxonomy' => 'trips-category',
  'parent' => 0,
  'hide_empty' => false,
);
$context['terms'] = get_terms($taxArgs);





Timber::render( array( 
  'templates/views/5_pages/homepage.twig',
  'page.twig'
), $context );

?>
