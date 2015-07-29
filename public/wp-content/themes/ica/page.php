<?php get_header(); ?>

	<!-- Page 
	================================================== -->
	
	<section>
		<div id="main-content-container" class="big-container pages">
			<div class="container">

			<?php 
				while (have_posts() ) : the_post();

				$disable = get_field('disable');
				
				if(empty($disable)):
					$sidebar=true;
				else:
					$sidebar=false;
				endif;

				if($sidebar==true):
					?>
					<div class="eight columns">
					<?php				
				else:
					?>
					<div class="twelve columns">
					<?php
				endif;
				?>
						<div id="main-content" class="clearfix">
							<?php
							if ( has_post_thumbnail() ) :
								$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
								$bgsetup = "background-image:url('".$image_url[0]."');";
							endif;
							?>
							<div class="featured-image clearfix" style="<?php echo $bgsetup;?>">
								<h1><?php the_title();?></h1>
							</div>
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="entry-content">
									<?php require('layouts/layouts.php'); ?>
								</div>
							</div>
						</div>
					</div>
				<?php
				if($sidebar==true):
					?>
					<div class="four columns">
						<?php get_sidebar(); ?>
					</div>
					<?php				
				endif;
				?>
				<? 
				endwhile;
				?>

				<div class="twelve columns">
					<div class="bottom-rule"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Page Template -->

<?php get_footer(); ?>

