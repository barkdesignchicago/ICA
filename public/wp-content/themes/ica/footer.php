	<!-- Footer
	================================================== -->
	<section>
		<footer>
			<div class="container footer">
				<div class="six columns footer-menu">
					<div class="one column alpha">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo_ICA_state.png" alt="ICA State Logo" width="28" height="50" />

					</div>
					<div class="five columns omega">
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
						</nav>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-utility-menu' ) ); ?>						
					</div>
				</div>
				<div class="six columns footer-social">
					<ul>
						<li><a href="https://www.facebook.com/Illinois-Cycling-Association-153779774685382/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/ILCycling" target="_blank"><i class="fa fa-twitter"></i></a></li>
					</ul>
					<p>
						COMMITTED TO BICYCLE RACING IN THE STATE OF ILLINOIS
						<br />
						<span><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					</p>
				</div>
				<div class="twelve columns offset-by-one footer-copyright">
					<p>&copy; <?php echo date('Y');?> Illinois Cycling Association</p>
					<p>This website and all materials and content has not been reviewed, approved, or endorsed by USA Cycling, Inc.	</p>
				</div>
			</div>
		</footer>
	</section>
	<?php wp_footer(); ?>
	<!-- End Footer Template -->

<!-- End Document
================================================== -->
</body>
</html>
