<?php

  add_theme_support( 'post-thumbnails' ); 

  if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
    'label' => 'Secondary Image',
    'id' => 'secondary-image',
    'post_type' => 'post'
     ) );

  }

  function blog_scripts() {

      // Register the script like this for a theme:
      // wp_register_script( 'custom-script', get_template_directory_uri() . '/js/jquery.js' );
      // wp_register_script( 'lazyloadxt', get_template_directory_uri() . '/js/jquery.lazyloadxt.js' );
    
  }
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js');
  wp_enqueue_script('twitter-popup', 'https://platform.twitter.com/widgets.js');
  wp_enqueue_script('google-plus', 'https://apis.google.com/js/platform.js');
  wp_enqueue_script( 'prism', get_template_directory_uri() . '/js/prism.js' ); 

?>