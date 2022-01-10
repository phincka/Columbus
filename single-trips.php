<?php
$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;



Timber::render( array( 
  'templates/views/6_trips/single.twig',
  'page.twig'
), $context );
?>