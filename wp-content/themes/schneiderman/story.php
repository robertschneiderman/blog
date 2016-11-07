<?php $image_url = get_field('image'); ?>

<div class="story">
  <img class="story-img" src="<?php echo $image_url; ?>" alt="">
  <div class="story-text">
    <h3 class="story-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
    <p class="story-excerpt"><?php echo get_the_excerpt(); ?></p>
  </div>
</div>
