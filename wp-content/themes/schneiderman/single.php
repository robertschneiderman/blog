<?php get_header(); ?>

<?php
  $image_url = get_field('image');
  $image_alt = get_field('image_alt');
?>

<header id="article-header" class="article-header">
  <a href="<?php echo home_url() ?>"><img class="icon-home" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/icon_home.svg" alt="A home button for getting back to home page"></a>
  <div class="hero-img" style="background-image: url(<?php echo $image_url ?>)"></div>
  <div class="hero-overlay"></div>
  <div id="hero-text" class="hero-text">
  <?php if ( is_singular() ) { echo '<h1 id="entry-title"  class="entry-title">'; } else { echo '<h2 id="entry-title" class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
  <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
  </div>
  <div id="trigger"></div>  
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