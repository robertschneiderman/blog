<?php

  add_theme_support( 'post-thumbnails' ); 

  if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
    'label' => 'Secondary Image',
    'id' => 'secondary-image',
    'post_type' => 'post'
     ) );

  }


  wp_enqueue_style( 'prism', get_template_directory_uri() . '/css/prism.css' );

  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js');
  // wp_enqueue_script('twitter-popup', 'https://platform.twitter.com/widgets.js');
  // wp_enqueue_script('google-plus', 'https://apis.google.com/js/platform.js');
  wp_enqueue_script( 'prism', get_template_directory_uri() . '/js/prism.js' ); 
  wp_enqueue_script( 'lazyload-xt', "//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.min.js" ); 
  wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js' ); 
  wp_enqueue_script( 'scrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js' ); 
  wp_enqueue_script( 'smIndicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js' );
  wp_enqueue_script( 'GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js' );
  wp_enqueue_script( 'animationGSAP', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js' ); 
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' ); 



?>