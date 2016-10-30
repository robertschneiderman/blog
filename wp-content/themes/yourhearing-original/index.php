<?php get_header(); ?>

	<?php $sprite = get_site_url() . "/wp-content/plugins/svg-spritemap/defs.svg"; ?>	

	<nav class="navbar--index cj" style="">
		<div class="logo-md ibm">
			<a href="yourhearing.com"><span class="text--your color-primary">your</span><!-- 
						 --><span class="text--hearing">hearing</span>
				<span class="font-secondary text--blog">Blog</span></a>
		</div>
		<br class="disp600">
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

	<div class="bg--main bg-fixed"></div>

	<nav class="nav-filter">

		<div class="select-wrapper ibm" style="margin-right: 1.5rem;">

			<span class="fs9" style="margin-right: 0.4rem;color: #9E9B9B;margin-right: 0.4rem;font-size: 0.8rem;font-weight: 700;">Show:</span>

			<select id="FilterSelect" class="select--filter" name="select">
			  	<option value="all" selected>All</option>
			
				<?php foreach((get_categories()) as $category) {

					$category_name = $category->cat_name;
					$category_slug = strtolower(str_replace(' ', '-', $category_name)); ?>
			
					<option value="<?php echo $category_slug; ?>"><?php echo $category_name; ?></option>
					<?php
				} ?>
			
			</select>

		</div>

		<div class="search ibm">
			<input class="search-field ibm" type="text" placeholder="Search for posts"><!-- 
		 --><div class="search-btn ibm">
				<svg class="icon-tiny"><use xlink:href="<?php echo $sprite ?>#:musica-searcher-grey"></use></svg>
			</div>
		</div>

	</nav>

	<div id="primary" class="layout cj">
		<main id="main" class="layout_main" role="main">		

		<?php 

			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
			$args = array (
				'category_name'			 => $_GET['category'],
			    'nopaging'               => false,
			    'paged'                  => $paged,
			    'posts_per_page'         => '20',
			    'post_type'              => 'post',
			);

			// The Query
			$wp_query = new WP_Query( $args );		

			if ( $wp_query->have_posts() ) : ?>

				<div id="grid" class="grid cj effect-2">

				<?php
				// Start the loop.
				while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

					<div class="mix grid-item post-wrapper <?php foreach((get_the_category()) as $category) {

							$category_class = str_replace(' ', '-', $category->cat_name);
    						echo strtolower($category_class) . ' ';
						}


						?>" data-order="<?php echo $num; ?>">
						<div class="post">
							<!-- <div class="img-container"> -->

								<?php
									$category = get_the_category();
								    $the_category_id = $category[0]->cat_ID;

								    if(function_exists('rl_color')){
								        $rl_category_color = rl_color($the_category_id);
								    }
								?>

								<div class="category-marker" style="color: <?php echo $rl_category_color; ?>"><?php the_category( ', ' ); ?></div>

								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<img class="post_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
								</a><!-- 	
					
							 --><div class="post_text">
								<header style="margin-bottom: .4rem;">
									<h2 class="post_title">
										<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</h2>
									
									<div>
										<svg class="icon-tiny" style="margin-right: .2rem;"><use xlink:href="<?php echo $sprite ?>#:calendar"></use></svg> 
										<span class="post-info"><?php the_time('F j, Y'); ?></span>
									</div>
								</header>
								
								<main>
									<div class="post_body"><?php the_excerpt(); ?></div>
								</main>
					
								<div class="tar">
									<div id="social-media-share" class="social-media-share circle--grey trans--bg-fade ib">
										<svg class="icon-09 abs-center"><use xlink:href="<?php echo $sprite ?>#:share"></use></svg>
									</div>
									<div class="circle--grey trans--bg-fade ib">
										<svg class="icon-09 abs-center"><use xlink:href="<?php echo $sprite ?>#:favorite-heart-button"></use></svg>
									</div>
									<div id="social-media-dropdown" class="social-media-dropdown dropdown--sm">
										<h3 style="font-size: 0.8rem;margin-bottom: 0.3rem;text-align: left;">Share!</h3>
										<svg class="icon-sm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:facebook-square"></use></svg>
										<svg class="icon-sm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:twitter-square"></use></svg>
										<svg class="icon-sm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:google-plus-square"></use></svg>                        
									</div>
								</div>								
							</div>
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
				endwhile;				

				?>
				</div>				

				<?php
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous', 'twentysixteen' ),
					'next_text'          => __( 'Next', 'twentysixteen' ),
				) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- .site-main -->

		<aside id="sidebar" class="sidebar ibt">

			<form class="widget--subscribe" action="">
				<h2 class="sidebar_title">Want more articles like this?</h2>
				<p class="sidebar_par">Sign up to get the most recent news on your health and hearing</p>
				<input class="field--sm" type="text" placeholder="Your email">
				<button class="sidebar_button">Sign-Up</button>
			</form>

			<div class="widget--follow">
				<!-- <object class="stripes" data="http://localhost:8888/yourhearing/wp-content/uploads/2016/05/diagonal-stripes2x-1.svg" type=""></object> -->

				<h2 style="margin-bottom:.4rem;">Follow Us</h2>

				<div class="cj auto">
					<svg class="icon-md ibm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:facebook-logo-button-1"></use></svg>
					<svg class="icon-md ibm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:twitter-logo-button-1"></use></svg>
					<svg class="icon-md ibm trans--enlarge"><use xlink:href="<?php echo $sprite ?>#:linkedin-button-1"></use></svg>
				</div>
			</div>
		</aside>
	</div><!-- .content-area -->

<?php get_footer(); ?>