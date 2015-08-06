<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home
	================================================== -->
	<section>
		<div id="hero-container" class="big-container">
			<div class="hero" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/hero_home.jpg)">
				<div class="container">
					<div class="twelve columns">
						<div class="hero-message">
							<h1>COMMITTED TO THE RIDE</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="small-callout" class="big-container">
			<div class="container">
				<div class="twelve columns">
					<h2 class="fade-in-up elements"><span><i class="fa fa-star"></i> <i class="fa fa-star"></i></span> COMMITTED TO BICYCLE RACING IN THE STATE OF ILLINOIS <span><i class="fa fa-star"></i> <i class="fa fa-star"></i></span></h2>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div id="main-content-container" class="big-container">
			<div class="container">
				<div class="eight columns">
					<div id="main-content" class="clearfix">
						<h1>News</h1>
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
										<div class="four columns alpha news-thumb">
											<?php
												$thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full-width-header' );
											?>
											<img src="<?php echo $thumb_url[0];?>" class="scale-with-grid" />
										</div>
										<div class="four columns omega">
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
													<?php
														$content = get_the_content('<br /><span class="button read-more">READ MORE</span>');
														$content = preg_replace("/<img[^>]+\>/i", "", $content);          
														$content = apply_filters('the_content', $content);
														$content = str_replace(']]>', ']]>', $content);
														echo $content;
													?>
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
				<div class="four columns">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<div class="bottom-rule-home"></div>
		</div>
	</section>
	<!-- End Home Template -->

<?php get_footer(); ?>

