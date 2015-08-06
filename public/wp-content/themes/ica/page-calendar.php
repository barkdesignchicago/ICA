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
							while (have_posts() ) : the_post(); ?>
							<?php
								if ( has_post_thumbnail(18) ) :
									$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( 18 ), 'full' );
									$bgsetup = "background-image:url('".$image_url[0]."');";
								endif;
								?>
								<div class="featured-image clearfix" style="<?php echo $bgsetup;?>">
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

