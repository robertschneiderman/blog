<?php get_header(); ?>

<article class="article">
  <main id="content" role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry' ); ?>
  <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
  <?php endwhile; endif; ?>
  <footer class="footer">
  <?php get_template_part( 'nav', 'below-single' ); ?>
  </footer>
  </main>
  <?php get_sidebar(); ?>
</article>
<?php get_footer(); ?>