<section class="entry-meta">
<div class="author">
  <img class="author-avatar" src="http://d4fd8edb5357e3663250-e9db5fe345a903020dd4e30b554d328e.r74.cf5.rackcdn.com/headshot_square.jpg" alt="">
  <p class="author-name">
  <?php echo get_the_author_meta('first_name', $post->post_author) . ' ' . get_the_author_meta('last_name', $post->post_author); ?>
  </p>
</div>
<span class="comments">
  <?php comments_number() ?>
</span>
<span class="meta-sep"> | </span>
<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</section>