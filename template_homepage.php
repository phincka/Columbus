<?php
  /*
  * Template Name: Home
  * @package ths
  */


$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
$context['field'] = get_fields();

function getVideo($videoUrl){
  // Get the Video Fields
  $attr =  array(
    'mp4'      => $videoUrl,
    'preload'  => 'auto'
  );

  // Display the Shortcode
  return wp_video_shortcode(  $attr );
}

Timber::render( array( 
  'templates/views/5_pages/homepage.twig',
  'page.twig'
), $context );

?>
