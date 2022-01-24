<?php
/*
* Template Name: O nas
* @package ths
*/

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$args2 = array(
  'post_type' => 'trips',
  'status'    => 'approve',
  'orderby' => 'rand',
  'order' => 'ASC',
  'number' => '3',
);
$opinions = get_comments( $args2 );

$context['opinions'] = $opinions;



Timber::render( array( 
  'templates/views/5_pages/about_us.twig',
  'page.twig'
), $context );

?>