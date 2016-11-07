<?php get_header(); ?>

<?php
  $image_url = get_field('image');
  $image_alt = get_field('image_alt');
?>

<header class="article-header">
  <div class="hero-img" style="background-image: url(<?php echo $image_url ?>)"></div>
  <div class="hero-overlay"></div>
  <div class="hero-text">
  <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
  <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
  </div>
</header>

<article class="article">
  <main id="content" role="main">
  <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
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