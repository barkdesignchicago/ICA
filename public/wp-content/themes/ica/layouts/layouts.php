	<?php
	if( have_rows('layout-content') ):
	    while ( have_rows('layout-content') ) : the_row();
	        if( get_row_layout() == 'full_width' ):
				?>
				<div class="row full-width-content">
					<div class="u-full-width">
						<?php
						the_sub_field('content');
						?>
					</div>
				</div>
				<?php
		    elseif( get_row_layout() == 'two_column' ):
				?>
				<div class="row two-column-content">
					<?php
					if($sidebar==true):
						?>
						<div class="four columns alpha column_1">
							<?php
							the_sub_field('column_1');
							?>
						</div>
						<div class="four columns omega column_2">
							<?php
							the_sub_field('column_2');
							?>
						</div>
						<?php
					else:
						?>
						<div class="one-half column alpha column_1">
							<?php
							the_sub_field('column_1');
							?>
						</div>
						<div class="one-half column omega column_2">
							<?php
							the_sub_field('column_2');
							?>
						</div>
						<?php
					endif;
					?>
				</div>
				<?php
		    elseif( get_row_layout() == 'two_column_small_left' ):
				?>
				<div class="row two-column-small-left">
					<?php
					if($sidebar==true):
						?>
						<div class="three columns alpha column_1">
							<?php
							the_sub_field('column_1');
							?>
						</div>
						<div class="five columns omega column_2">
							<?php
							the_sub_field('column_2');
							?>
						</div>
						<?php
					else:
						?>
						<div class="one-third column alpha column_1">
							<?php
							the_sub_field('column_1');
							?>
						</div>
						<div class="two-thirds column omega column_2">
							<?php
							the_sub_field('column_2');
							?>
						</div>
						<?php
					endif;
					?>
				</div>
				<?php
		    elseif( get_row_layout() == 'two_column_small_right' ):
				?>
				<div class="row two-column-small-right">
					<?php
					if($sidebar==true):
						?>
						<div class="five columns alpha column_1">
							<?php
							the_sub_field('column_1');
							?>
						</div>
						<div class="three columns omega column_2">
							<?php
							the_sub_field('column_2');
							?>
						</div>
						<?php
					else:
						?>
						<div class="two-thirds column alpha column_1">
							<?php
							the_sub_field('column_1');
							?>
						</div>
						<div class="one-third column omega column_2">
							<?php
							the_sub_field('column_2');
							?>
						</div>
						<?php
					endif;
					?>
				</div>
				<?php
		    elseif( get_row_layout() == 'image_content_area' ):
				?>
				<div class="row image-content-area">
					<div class="u-full-width">
						<?php
						$image = get_sub_field('image');
						if( !empty($image) ): 
							?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="scale-with-grid" />
							<?php 
						endif; 
						?>
					</div>
				</div>
				<?php
		    elseif( get_row_layout() == 'gallery_image_content_area' ):
				?>
				<div class="row gallery-content-area">
					<div class="u-full-width">
						<?php

						$images = get_sub_field('gallery');
						
						if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <a href="<?php echo $image['url']; ?>">
						                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="scale-with-grid" />
						                </a>
						                <p><?php echo $image['caption']; ?></p>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php
						endif;
						?>
					</div>
				</div>
				<?php
			else:

	        endif;
	
	    endwhile;
	else :
	    // no layouts found
	endif;
			
	?>
