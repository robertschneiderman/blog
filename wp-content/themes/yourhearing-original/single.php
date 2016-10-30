<?php get_header(); ?>

	<?php $sprite = get_site_url() . "/wp-content/plugins/svg-spritemap/defs.svg"; ?>

	<header>
		<nav class="navbar--single cj" style="">
			<div class="logo-md ibm">
				<a href="<?php echo get_site_url(); ?>/blog/"><span class="text--your color-primary">your</span><!-- 
								 --><span class="text--hearing">hearing</span>
					<span class="font-secondary text--blog">Blog</span></a>
			</div>
				
			<div id="find-a-clinic" class="resp450 lh0" style="height: 2.5rem;">
				<input class="field-dark ibm" placeholder="Find a clinic"><!-- 
			 --><button class="field-dark--button btn ibm">
					<i class="icon-search lh0"><!-- 
					 --><svg class="icon-tiny"><use xlink:href="<?php echo $sprite ?>#:musica-searcher"></use></svg><!-- 
				     --><span class="anim--pulse abs-center"></span>
					</i>				
				</button>
			</div>
		</nav>
	</header>

	<div class="single-bg bg"></div>

	<div class="bg--main bg-fixed"></div>	

	<header style="margin-bottom: 2.3rem;">
		<h1 class="article_title"><?php the_title(); ?></h1>
	</header>	

	<main class="layout-article cj">
		
		<main class="layout-article_main ibt article-wrapper ibt">
			<?php if ( have_posts() ) : ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); 

				// echo get_the_ID(); 
				// echo wp_title();

				?>

				<div class="article">
<!-- 					<header style="margin-bottom: 2.3rem;">
						<h1 class="article_title"><?php the_title(); ?></h1>

						<?php echo get_avatar( get_the_author_meta("user_email"), 60, null, null, array( 'class' => 'authorship_photo_small' ) ); ?> 

						<div class="ibm" style="font-size: 0.85rem; margin-left: 0.4rem">
							<?php the_author_posts_link(); ?> in
							<a href=""><?php echo get_the_category()[0]->name ?><br></a>
							<small><?php the_time('F jS, Y'); ?> • <a href="#comments"><?php echo get_comments_number(); ?> comments</small></a>
						</div>
					</header> -->

					<?php if (has_post_thumbnail( $post->ID ) ): ?>

						<?php 
						// if (class_exists('MultiPostThumbnails')) : 
						// 	MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
						// endif;
						 ?>
						<img class="article_img" src="<?php the_post_thumbnail_url(); ?>" alt="">						 						 

					<?php endif; ?>					
					
					<main>
						<div class="article_body"><?php the_content(); ?></div>
						<!-- <p class="post-text">If you enjoyed this article make sure that you subcribe to our blog as soon as possible so that you don't miss out on any more of our future updates. It's going to be really awesome!</p>			 -->
					</main>

					<div class="tags">
						<strong style="margin-right: 1rem">tagged with: </strong>
						<?php
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) { ?>
						    <a class='tag' href='<?php echo get_tag_link($tag->term_id); ?>'><?php echo $tag->name; ?></a>
						    <?php
						  }
						}
						?>
					</div>					
				</div>


				<?php
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					// get_template_part( 'template-parts/content', get_post_format() );

				// End the loop.
				endwhile; ?>	

				<div class='authorship'>
					<div class="authorship_media">
						<?php echo get_avatar( get_the_author_meta("user_email"), 150, null, null, array( 'class' => 'authorship_photo' ) ); ?>
						<div class="authorship_text ibm">
							<div class="cj" style="border-bottom: 1px solid #ddd;line-height: 1;margin-bottom: 0.3rem;padding: 0 0 0.3rem;">
								<h3 style="line-height: 1; margin-bottom: 0.3rem;"><?php the_author_meta("display_name"); ?></h3>
								<div class="cj ibm" style="width: 20%;">
									<a href="https://twitter.com/nyc_robert"><svg class="authorship-icon trans--enlarge"><use xlink:href="<?php echo $sprite; ?>#:twitter-blue"></use></svg></a>
									<a href="https://www.linkedin.com/in/robert-schneiderman-81007269?trk=nav_responsive_tab_profile_pic"><svg class="authorship-icon trans--enlarge"><use xlink:href="<?php echo $sprite; ?>#:linkedin-2"></use></svg></a>
									<a href="https://github.com/robertschneiderman"><svg class="authorship-icon trans--enlarge" style="width: 1.5rem;"><use xlink:href="<?php echo $sprite; ?>#:google-plus-2"></use></svg></a>
								</div>
							</div>
							<p class="fs9"><?php the_author_meta("description"); ?></p>
						</div>
					</div>
				</div>

				<?php
				comments_template();


				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					'next_text'          => __( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>			
		</main>

		<aside id="sidebar" class="sidebar ibt">

			<form class="widget--subscribe" action="">
				<h2 class="sidebar_title">Want more articles like this?</h2>
				<p class="sidebar_par">Sign up to get the most recent news on your health and hearing</p>
				<input class="field--sm" type="text" placeholder="Your email">
				<button class="sidebar_button">Sign-Up</button>
			</form>

			<div class="widget--follow">
				<!-- <object class="stripes" data="http://localhost:8888/yourhearing/wp-content/uploads/2016/05/diagonal-stripes2x -1.svg" type=""></object> -->

				<h2 style="margin-bottom:.4rem;">Follow Us</h2>

				<div class="cj auto">
					<svg class="icon-md ibm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:facebook-logo-button-1"></use></svg>
					<svg class="icon-md ibm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:twitter-logo-button-1"></use></svg>
					<svg class="icon-md ibm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:linkedin-button-1"></use></svg>
				</div>
			</div>
		</aside>

	</main>



<?php get_footer(); ?>