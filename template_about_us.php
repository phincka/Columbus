<?php
/*
* Template Name: O nas
* @package ths
*/

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
// $context['field'] = get_fields();



Timber::render( array( 
  'templates/views/5_pages/about_us.twig',
  'page.twig'
), $context );

?>