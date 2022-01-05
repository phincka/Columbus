<?php
  /*
  * Template Name: Realizacje
  * @package ths
  */


$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
$context['field'] = get_fields();

$termName = 'realizations-category';
$context['terms'] = get_terms($termName);


Timber::render( array( 
  'templates/views/5_pages/realizations.twig',
  'page.twig'
), $context );

?>
