<?php get_header(); ?>

	<!-- Page 
	================================================== -->
	
	<section>
		<div id="main-content-container" class="big-container pages">
			<div class="container">
				<div class="eight columns">
					<div id="main-content" class="clearfix">
						<?php 
							while (have_posts() ) : the_post();

								if ( has_post_thumbnail() ) :
									$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
									$bgsetup = "background-image:url('".$image_url[0]."');";
								endif;
								?>
								<div class="featured-image clearfix" style="<?php echo $bgsetup;?>">
									<h1><?php the_title();?></h1>
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
				<div class="four columns">
					<?php get_sidebar(); ?>
				</div>
				<div class="twelve columns">
					<div class="bottom-rule"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Page Template -->

<?php get_footer(); ?>

