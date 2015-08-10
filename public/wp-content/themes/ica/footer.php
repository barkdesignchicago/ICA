	<!-- Footer
	================================================== -->
	<section>
		<footer>
			<div class="container footer">
				<div class="six columns footer-menu">
					<div class="three columns alpha">
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
						</nav>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-utility-menu' ) ); ?>						
					</div>
					<div class="three columns omega">
					</div>
				</div>
				<div class="six columns footer-social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					</ul>
					<p>
						COMMITTED TO BICYCLE RACING IN THE STATE OF ILLINOIS
						<br />
						<span><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					</p>
				</div>
				<div class="twelve columns footer-copyright">
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
