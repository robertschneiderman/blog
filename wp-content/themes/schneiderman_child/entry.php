<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- <img class="icon-home one-half" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/icon_home.svg" alt="house button for going back to homepage"> -->
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>