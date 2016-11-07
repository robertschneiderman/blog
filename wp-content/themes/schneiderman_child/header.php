<?php error_reporting(1); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:title" content="<?php echo get_the_title(); ?>" />
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
<meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
<meta property="og:image" content="<?php if ( get_field('image') ) { echo get_field('image'); } ?>" />
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
      href: '<?php echo get_the_permalink(); ?>',
    }, function(response){});
  };
</script>


<div id="wrapper" class="hfeed">
<div id="container">
