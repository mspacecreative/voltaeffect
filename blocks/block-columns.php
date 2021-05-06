<?php
$layouttype = get_field('layout_type');
$verticalalignment = get_field('vertical_alignment');
$bgcolour = get_field('column_background_colour');
$hideblock = get_field('hide_block_hide_block');

if ( $layouttype == 'one' && $verticalalignment == 'top' ):	
	
	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider extra-top-bottom-padding top-bottom-margin">
			
			<?php while( have_rows('variable_columns') ): the_row(); ?>
			
			<div class="col one_column">
				<?php the_sub_field('column_content'); ?>
			</div>
			
			<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'one' && $verticalalignment == 'center' && $bgcolour ):

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
			<div class="row gutter_wider extra-top-bottom-padding top-bottom-margin middle-lg middle-md">
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="col one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'one' && $verticalalignment == 'center' ):

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider top-bottom-padding top-bottom-margin middle-lg middle-md">
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="col one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'one' && $verticalalignment == 'bottom' ):

	if( have_rows('variable_columns') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider extra-top-bottom-padding top-bottom-padding top-bottom-margin align_items_bottom">
				<?php while( have_rows('variable_columns') ): the_row(); ?>
				
				<div class="col one_column">
					<?php the_sub_field('column_content'); ?>
				</div>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'top' && $bgcolour ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>;">
		
		<div class="row-width-1280 extra-top-bottom-padding top-margin">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider">
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'top' ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280 top-bottom-margin">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider">
			
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
				
			</div>
		</div>
		
	</div>
	
<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'center' && $bgcolour ):

	if( have_rows('two_column_layout') ): ?>
	
	<?php if ( $hideblock ) : ?>
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>; display: none;">
		
		<div class="row-width-1280 extra-top-bottom-padding top-bottom-margin">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider middle-lg middle-md">
			
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
					
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
							$size = 'large';
							
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
							
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
						
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
						
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
								
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
								
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
							
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
							
						endif;
						?>
					</div>
							
					<?php endwhile;
					endif; ?>
					
				<?php endwhile; ?>
					
			</div>
		</div>
		
	</div>
	<?php else : ?>
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>;">
		
		<div class="row-width-1280">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider display-flex extra-top-bottom-padding top-margin middle-lg middle-md">
			
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
					
			</div>
		</div>
		
	</div>
	<?php endif;
	
	endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'center' ):

	if( have_rows('two_column_layout') ): ?>
	
	<?php if ( $hideblock ) : ?>
	<div class="columns-container" style="display: none;">
		
		<div class="row-width-1280">
			<?php if ( get_field('heading') ): ?>
				<h2 class="width-100"><?php the_field('heading'); ?></h2>
			<?php endif; ?>
			<div class="row gutter_wider top-bottom-padding top-bottom-margin middle-lg middle-md">
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	<?php else : ?>
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin middle-lg middle-md">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	<?php endif;
	
	endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'bottom' && $bgcolour ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container" style="background-color: <?php the_field('column_background_colour'); ?>;">
		
		<div class="row-width-1280">
			<div class="row gutter_wider extra-top-bottom-padding top-margin align_items_bottom">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'two' && $verticalalignment == 'bottom' ):

	if( have_rows('two_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin align_items_bottom">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('two_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column') ): ?>
					<?php while( have_rows('left_column') ): the_row(); ?>
				
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column') ): ?>
					<?php while( have_rows('right_column') ): the_row(); ?>
					
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'three' && $verticalalignment == 'top' ):

	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('three_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column_left_column') ): ?>
					<?php while( have_rows('left_column_left_column') ): the_row(); ?>
				
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('center_column') ): ?>
					<?php while( have_rows('center_column') ): the_row(); ?>
					
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_center_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('center_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('center_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column_right_column') ): ?>
					<?php while( have_rows('right_column_right_column') ): the_row(); ?>
					
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'three' && $verticalalignment == 'center' ):

	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin middle-lg middle-md">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('three_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column_left_column') ): ?>
					<?php while( have_rows('left_column_left_column') ): the_row(); ?>
				
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('center_column') ): ?>
					<?php while( have_rows('center_column') ): the_row(); ?>
					
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_center_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('center_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('center_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column_right_column') ): ?>
					<?php while( have_rows('right_column_right_column') ): the_row(); ?>
					
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'three' && $verticalalignment == 'bottom' ):

	if( have_rows('three_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin align_items_bottom">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('three_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('left_column_left_column') ): ?>
					<?php while( have_rows('left_column_left_column') ): the_row(); ?>
				
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('center_column') ): ?>
					<?php while( have_rows('center_column') ): the_row(); ?>
					
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_center_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('center_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('center_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('right_column_right_column') ): ?>
					<?php while( have_rows('right_column_right_column') ): the_row(); ?>
					
					<div class="col three_column">
						<?php
						$contenttype = get_sub_field('column_right_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('right_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('right_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'four' && $verticalalignment == 'top' ):

	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('four_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('four_first_column_left_column') ): ?>
					<?php while( have_rows('four_first_column_left_column') ): the_row(); ?>
				
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_second_column_left_column') ): ?>
					<?php while( have_rows('four_second_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_third_column_left_column') ): ?>
					<?php while( have_rows('four_third_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_fourth_column_left_column') ): ?>
					<?php while( have_rows('four_fourth_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'four' && $verticalalignment == 'center' ):

	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin middle-lg middle-md">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('four_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('four_first_column_left_column') ): ?>
					<?php while( have_rows('four_first_column_left_column') ): the_row(); ?>
				
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_second_column_left_column') ): ?>
					<?php while( have_rows('four_second_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_third_column_left_column') ): ?>
					<?php while( have_rows('four_third_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_fourth_column_left_column') ): ?>
					<?php while( have_rows('four_fourth_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
elseif ( $layouttype == 'four' && $verticalalignment == 'bottom' ):

	if( have_rows('four_column_layout') ): ?>
	
	<div class="columns-container">
		
		<div class="row-width-1280">
			<div class="row gutter_wider top-bottom-padding top-bottom-margin align_items_bottom">
				<?php if ( get_field('heading') ): ?>
					<h2 class="width-100"><?php the_field('heading'); ?></h2>
				<?php endif; ?>
				
				<?php while( have_rows('four_column_layout') ): the_row(); ?>
				
					<?php if( have_rows('four_first_column_left_column') ): ?>
					<?php while( have_rows('four_first_column_left_column') ): the_row(); ?>
				
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
						
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
						
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
					
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_second_column_left_column') ): ?>
					<?php while( have_rows('four_second_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_third_column_left_column') ): ?>
					<?php while( have_rows('four_third_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('four_fourth_column_left_column') ): ?>
					<?php while( have_rows('four_fourth_column_left_column') ): the_row(); ?>
					
					<div class="col four_column">
						<?php
						$contenttype = get_sub_field('column_left_content_type' ); 
							
						if ( $contenttype == 'text' ):
						the_sub_field('left_column_text');
							
						elseif ( $contenttype == 'image' ):
						$image = get_sub_field('left_column_image');
						$size = 'large';
						
						if ( $image ): ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php endif;
						
						endif;
						?>
					</div>
						
					<?php endwhile;
					endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
	
	<?php endif;
	
endif;