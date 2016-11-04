<?php error_reporting(1); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div> -->
<!-- <div id="site-description"><?php bloginfo( 'description' ); ?></div> -->
</section>
<nav id="menu" role="navigation">
<div id="search">
<?php
  // get_search_form();
?>
</div>
<?php
  // wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
?>
</nav>
</header>
<div id="container">

<?php
  $image_url = get_field('image');
  $image_alt = get_field('image_alt');
  if ( has_post_thumbnail() ) { 
  // $thumb_id = get_post_thumbnail_id();
  // $thumb_url = wp_get_attachment_image_src(1,'thumbnail', true);  
  // echo $thumb_id;  
    // $url = get_the_post_thumbnail();
    // echo $url;
  }
    // echo "ure"
  ?>


<header class="article-header">
  <div class="hero-img" style="background-image: url(<?php echo $image_url ?>)"></div>
  <div class="hero-overlay"></div>
  <div class="hero-text">
  <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
  <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
  </div>
</header>

<?php
// if ( has_post_thumbnail() ) { the_post_thumbnail('full', array( 'class' => 'img-thumbnail' )); }
?>
