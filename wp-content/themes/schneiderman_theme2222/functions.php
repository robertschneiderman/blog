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
	    wp_register_script( 'lazyloadxt', get_template_directory_uri() . '/js/jquery.lazyloadxt.js' );
		
	}
	add_action( 'wp_enqueue_scripts', 'blog_scripts' );

	// wp_enqueue_style( 'prism', get_template_directory_uri() . '/css/prism.css' );
	// wp_enqueue_script( 'prism', get_template_directory_uri() . '/js/prism.js' );	

?>