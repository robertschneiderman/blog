<?php get_header(); ?>
<h1 class="headline-stories">Schneiderman.io</h1>
<section id="content-story" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'story' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php
// get_sidebar();
?>
<?php
get_footer();
?>