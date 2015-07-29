<?php
/*
Template Name: Calendar Page
*/
?>

<?php get_header(); ?>

	<!-- Page 
	================================================== -->
	
	<section>
		<div id="main-content-container" class="big-container pages">
			<div class="container">
				<div class="twelve columns">
					<div id="main-content" class="clearfix">
						<?php 
							while (have_posts() ) : the_post() 
								?>
								<div class="featured-image clearfix">
									<h1>Calendar</h1>
								</div>
								<div id="post-<?php the_ID(); ?>" <?php post_class('intro-post'); ?>>
									<div class="entry-content">
										<?php the_content();?>
									</div>
								</div>
								<? 
							endwhile;
							?>
					</div>
				</div>
				<div class="twelve columns">
					<div class="bottom-rule"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Page Template -->

<?php get_footer(); ?>

