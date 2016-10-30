<?php $sprite = get_site_url() . "/wp-content/plugins/svg-spritemap/defs.svg"; ?>

<footer id="footer" class="footer">
	<div class="footer-main cj">
		<div class="w30 ibt left">
			<div class="footer__text">
				<h3>Newsletter</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius delectus pariatur, itaque architecto commodi nobis cumque provident accusamus libero dolore.</p>
			</div>
			<div>
				<input class="input--small ibm" type="text" placeholder="Email"><!-- 
			 --><button class="input-button">submit</button>
			</div>
		</div>

		<div class="ibt">
			<p style="color: #43A5D2; font-size: 1.2rem; font-weight: 700; margin-bottom: .4rem;">Find a Clinic</p>
			<div style="height: 10rem; overflow: hidden;">
				<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/05/map.gif" alt="">
			</div>
		</div>

		<div class="ibt">
			<!-- <p class="large-text">Give us a call!</p> -->
			<!-- <h3>Give us a call!</h3> -->
			<p class="highlight-text" style="font-size: 1.6rem;">(800) 550-5399</p>			
			<p class="highlight-text" style="color: var(--color-highlight); font-size: 1.3rem; margin-bottom: 0.7rem;">info@yourhearing.com</p>
			<div class="cj w60">
				<svg class="icon-sm trans--enlarge"><use xlink:href="<?php echo $sprite; ?>#:facebook-circular-3"></use></svg>
				<svg class="icon-sm trans--enlarge"><use xlink:href="<?php echo $sprite; ?>#:twitter-circular-2"></use></svg>
				<svg class="icon-sm trans--enlarge"><use xlink:href="<?php echo $sprite; ?>#:google-plus-circular"></use></svg>
			</div>					
		</div>
	</div>
	<div class="footer-sub cj">
		<div class="ibm">
			<span class="logo-sm ibm"><span class="color-primary">your</span>hearing</span>
			<p class="ibm a">© 2016, yourhearing.com</p>
		</div>
		<ul class="nav-footer ibm cj">
			<li class="nav-footer_item">About Us</li>
			<li class="nav-footer_item">Privacy Policy</li>
			<li class="nav-footer_item">Terms and Conditions</li>
			<li class="nav-footer_item">Financing</li>
			<li class="nav-footer_item">FAQs</li>
			<li class="nav-footer_item">Contact Us</li>
			<li class="nav-footer_item">Provider Login</li>
		</ul>
	</div>	
</footer>

<?php wp_footer(); ?>

<!-- <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script> -->

</body>
</html>
