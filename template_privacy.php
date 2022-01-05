<?php
  /*
  * Template Name: Polityka prywatności
  * @package ths
  */


$context = Timber::context();
$timber_post = new Timber\Post();

$context['post'] = $timber_post;
$context['field'] = get_fields();


Timber::render( array( 
  'templates/views/3_privacy/privacy.twig',
  'page.twig'
), $context );

?>