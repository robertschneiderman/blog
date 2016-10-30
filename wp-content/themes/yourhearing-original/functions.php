<?php

function wpb_move_comment_field_to_bottom( $fields ) {

	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;

}


add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

	add_theme_support( 'post-thumbnails' ); 

	/**
	 * Hide Admin Bar
	 *
	 */

	add_filter('show_admin_bar', '__return_false');


	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */

	function arphabet_widgets_init() {

	    register_sidebar( array(
			'name'          => 'Sidebar 1',
			'id'            => "sidebar-1",
			'before_widget' => '<div>',
			'after_widget'  => '</div>',	
	    ) );		

		register_sidebar(array(
			'name'          => 'Sidebar 2',
			'id'            => "sidebar-2",
			'before_widget' => '<div>',
			'after_widget'  => '</div>',			
		));

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );


	// set_post_thumbnail_size(465, 310, TRUE);
	// add_image_size('article-featured-size', 655, 437, TRUE);	

	if (class_exists('MultiPostThumbnails')) {

		new MultiPostThumbnails(array(
		'label' => 'Secondary Image',
		'id' => 'secondary-image',
		'post_type' => 'post'
		 ) );

	}

	function filter_ptags_on_images($content){
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}

	add_filter('the_content', 'filter_ptags_on_images');	


	function blog_styles() {
		wp_enqueue_style( 'helpers', get_template_directory_uri() . '/css/helpers.css', false );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false );
	    wp_enqueue_style( 'isotope', get_template_directory_uri() . '/css/isotope.css' );		
	}
	add_action( 'wp_enqueue_scripts', 'blog_styles' );


	function blog_scripts() {
	    // wp_enqueue_script( 'head', get_template_directory_uri() . '/js/head.js', true );

	    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', false );	    
	    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', false );    
	    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.js', false );
	    wp_enqueue_script( 'textillate', get_template_directory_uri() . '/js/jquery.textillate.js', false );
	    wp_enqueue_script( 'lettering', get_template_directory_uri() . '/js/jquery.lettering.js', false );	    
	    wp_enqueue_script( 'typed', get_template_directory_uri() . '/js/typed.js', false );
	    wp_enqueue_script( 'masonry', 'https://npmcdn.com/masonry-layout@4.0/dist/masonrypkgd.min.js', false );
	    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.js', false );
	    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js', false );
	    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.js', false );	    

	    wp_enqueue_script( 'AnimOnScroll', get_template_directory_uri() . '/js/AnimOnScroll.js', false );
	    wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', false );
	    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', false );


	    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), 1, true );
	}
	add_action( 'wp_enqueue_scripts', 'blog_scripts' );	


	/* Change Excerpt length */
	function custom_excerpt_length( $length ) {
		return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


	function mytheme_comment($comment, $args, $depth) {
	    if ( 'div' === $args['style'] ) {
	        $tag       = 'div';
	        $add_below = 'comment';
	    } else {
	        $tag       = 'li';
	        $add_below = 'div-comment';
	    }
	    ?>
	    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	    <?php if ( 'div' != $args['style'] ) : ?>
	        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	    <?php endif; ?>

	    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 100, null, null, array('class' => 'avatar-comment') ); ?>

		    <div class="comment-author vcard cj">
				<?php printf( __( '<cite class="fn ibm fs1">%s</cite>' ), get_comment_author_link( $comment ) ); ?>

				    <div class="comment-meta commentmetadata ibm"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				        <?php
				        /* translators: 1: date, 2: time */
				        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
				        ?>
				    </div>	        
			    </div>
		    <?php if ( $comment->comment_approved == '0' ) : ?>
		         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		          <br />
		    <?php endif; ?>	    
		
		<div class="comment-text">

		    <?php comment_text(); ?>

		    <div class="reply">
		        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		    </div>
		    <?php if ( 'div' != $args['style'] ) : ?>
		    </div>
		    <?php endif; ?>
		</div>
	<?php
    }	
    // mytheme_comment($comment, $args, $depth);

?>