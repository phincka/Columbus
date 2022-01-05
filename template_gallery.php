<?php
  /*
  * Template Name: Galeria
  * @package ths
  */


$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
$context['field'] = get_fields();



Timber::render( array( 
  'templates/views/5_pages/gallery.twig',
  'page.twig'
), $context );

?>
