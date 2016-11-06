<?php error_reporting(1); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:title" content="My Shared Article Title" />
<meta property="og:description" content="Description of shared article" />
<meta property="og:url" content="http://example.com/my_article.html" />
<meta property="og:image" content="http://example.com/foo.jpg" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />


<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1784214481850470',
      xfbml      : true,
      version    : 'v1.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
  const fbDialog = e => {
    FB.ui({
      method: 'share',
      href: 'https://developers.facebook.com/docs/',
    }, function(response){});
  };
</script>


<div id="wrapper" class="hfeed">
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
