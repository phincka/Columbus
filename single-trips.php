<?php
$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;



$args = array(
  'post__in'  => $timber_post->ID,
  'post_type' => 'trips',
  'status' => 'approve',
);
$opinions = get_comments( $args );

$context['opinions'] = $opinions;


Timber::render( array( 
  'templates/views/6_trips/single.twig',
  'page.twig'
), $context );
?>