<aside id="sidebar" role="complementary">
<?php
// if ( is_active_sidebar( 'primary-widget-area' ) ) :
?>

<!--   <div class="author-container">
    <img class="author-img" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/avatar.jpg" alt="">
    <div class="author-text">
      <p class="author-description">Robert Schneiderman is an amazing person and web designer and developer who has done a lot of amazing work. He is currenly looking for a job as as React and Rails developer. You should hire him asap.</p>
    </div>
  </div> -->

  <div class="newsletter">
    <h3 class="newsletter-title">Newsletter</h3>
    <p class="newsletter-description">I will release an awesome article every other Monday. Sign up!</p>


<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" class="newsletter-form-wrapper">
  <form class="newsletter-form" action="//robertschneiderman.us13.list-manage.com/subscribe/post?u=dc102bba24b568e076fee3ae1&amp;id=fa078ed81a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

    <div class="mc-field-group" style="padding:0; margin:0;width:100%">
      <label class="none" for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
    </label>
      <input type="email" value="" style="font-family: MetaSerif-Book, serif;" name="EMAIL" placeholder="Email" class="required email newsletter-input" id="mce-EMAIL">
    </div>
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none; top:10px"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dc102bba24b568e076fee3ae1_fa078ed81a" tabindex="-1" value=""></div>
    <div class="clear"><input class="newsletter-btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
  </form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>


    <!-- <input type="text" class="newsletter-input"> -->
    <!-- <button class="newsletter-btn">Subscribe</button> -->
</div>

  <!-- get_field('image') -->

  <div class="sm">
    <div class="fb sb">
      <a id="fb-link" onClick="fbDialog()" class="sm-anchor"><img src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/facebook_round.svg" alt="A button to share this article on Facebook" class="sm-icon"></a>
      <a 
        id="twitter-link"
        class="sm-anchor"
        target="_blank"
        href="https://twitter.com/share">
          <img src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/twitter_round.svg" alt="A button to share this article on Twitter" class="sm-icon">
      </a>
      <a
        id="linked-in-link"
        class="sm-anchor"
        target="_blank"
        href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo get_the_title(); ?>
        &summary=<?php echo get_the_excerpt(); ?>&source=LinkedIn"
        class="sm-anchor">
        <img src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/linkedin_round.svg"alt="A button to share this article on LinkedIn" class="sm-icon">
      </a>
      <a 
        href="https://plus.google.com/share?url=<?php echo get_the_permalink() ?>"
        target="_blank"        
        class="sm-anchor">
        <img class="sm-icon" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/google_plus_round.svg" alt="A button to share this article on Google Plus">
      </a>
    </div>
  </div>

<!--   <script>
  twttr.events.bind('tweet', function (event) {
  });
  </script> -->

<?php 
// endif;
?>
</aside>