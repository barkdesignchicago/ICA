<?php
/*
Template Name: News Page
*/
?>

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

						<div class="row">

							<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 5
							);
							
							$news_query = new WP_Query( $args ); 
	
						
							if ( $news_query->have_posts() ) :
								while ( $news_query->have_posts() ) : $news_query->the_post(); 
									if ( has_post_thumbnail() ) :
										?>
										<div class="three columns alpha news-thumb">
											<?php
												$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
											?>
											<img src="<?php echo $thumb_url[0];?>" class="scale-with-grid" />
										</div>
										<div class="five columns omega">
										<?php
									else:
										?>
										<div class="eight columns alpha">
										<?php
									endif;
											?>
											<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
												<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
												<div class="entry-meta">
													<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
													<?php edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
												</div>
												<div class="entry-content">
													<?php the_content('<br /><span class="button read-more">READ MORE</span>');?>
												</div>
												<?php global $authordata; ?>
											</div>
										</div>
								<? 
								endwhile;
							endif;
							?>
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

