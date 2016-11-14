<footer class="entry-footer">
<div class="taggings">
  <span class="cat-links"><?php _e( 'Categories: ', 'blankslate' ); ?><?php the_category( ', ' ); ?></span>
  <span class="tag-links"><?php the_tags(); ?></span>
</div>


<div class="author fb">
  <img class="author-avatar" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/headshot_square.jpg" alt="">
  <div class="author-text">
    <h3 class="author-name">
    <?php echo get_the_author_meta('first_name', $post->post_author) . ' ' . get_the_author_meta('last_name', $post->post_author); ?>
    </h3>
    <p class="author-description">
      <?php echo get_the_author_meta('description', $post->post_author); ?> 
    </p>
    <p>    
      <strong>Website: </strong><a href="http://robertschneiderman.com" target="_blank">http://robertschneiderman.com</a>
    </p>
    <div>
      <a href="https://twitter.com/nyc_robert" target="_blank">
        <img class="one-half ibm" style="margin-right: 0.4rem;" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/twitter_author.svg" alt="">
      </a>
      <a href="https://linkedin.com/in/robert-schneiderman/" target="_blank">
        <img class="one-half ibm" style="margin-right: 0.4rem;" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/linkedin_author.svg" alt="">
      </a>
      <a href="https://github.com/robertschneiderman" target="_blank">      
        <img class="one-half ibm" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/github_author.svg" alt="">
      </a>
    </div>
  </div>
</div>
</footer> 