<?php get_header(); ?>

	<!-- Page 
	================================================== -->
	
	<section>
		<div id="main-content-container" class="big-container pages">
			<div class="container">
				<div class="eight columns">
					<div id="main-content" class="clearfix">
						<?php 
							while (have_posts() ) : the_post() 
								?>
								<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
									<h1><?php the_title();?></h1>
									<div class="entry-meta">
										<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
										<?php edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
									</div>
									<div class="entry-content">
										<?php the_content('<br /><span class="button read-more">READ MORE</span>');?>
									</div>
									<?php global $authordata; ?>
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

