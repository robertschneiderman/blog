<?php
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
      <div class="fb">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 100, null, null, array('class' => 'comment-author-avatar') ); ?>      
        <?php if ( 'div' != $args['style'] ) : ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>

        <div class="comment-author vcard cj">        
        <?php printf( __( '<cite class="comment-author-name fn ibm fs1">%s</cite>' ), get_comment_author_link( $comment ) ); ?>    
        <div class="comment-meta commentmetadata ibm"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
            <?php
            /* translators: 1: date, 2: time */
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
            ?>
        </div>

        <span style="color: #bbb; font-size:.9rem;">•</span>

        <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>

          </div>
        <?php if ( $comment->comment_approved == '0' ) : ?>
             <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
              <br />
        <?php endif; ?>     
    
    <div class="comment-text">

        <?php comment_text(); ?>
        <?php if ( 'div' != $args['style'] ) : ?>
        </div>
        <?php endif; ?>
    </div>  

    </div>

  <?php
  } 
?>