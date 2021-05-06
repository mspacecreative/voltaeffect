<h2 style="margin-bottom: 50px;">Pages</h2>

<?php 
if ( have_posts() ):
while ( have_posts() ): the_post(); ?>

	<?php if ( $post->post_type == 'page' ) { ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'clear', 'display-flex' )); ?>>
		
		<!-- post thumbnail -->
		<div class="one-third">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(200,200)); // Declare pixel size you need inside the array ?>
			</a>
		<?php else : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/volta-events.jpg">
			</a>
		<?php endif; ?>
		</div>
		<!-- /post thumbnail -->
	
		<!-- post title -->
		<div class="two-third" style="max-width: 600px;">
		<h3 style="margin-top: 0;">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->
	
		<?php if ( has_excerpt() ) {
			the_excerpt();
		}
		else {
			$read_more = '&hellip; <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('read more', 'html5blank') . '</a>';
			
			// wpautop() auto-wraps text in paragraphs
			echo wpautop( 
				// wp_trim_words() gets the first X words from a text string
				wp_trim_words(
					get_the_content(), // We'll use the post's content as our text string
					20, // We want the first 55 words
					$read_more // This is what comes after the first 55 words
				)
			);
		} ?>
	
		<?php edit_post_link(); ?>
		</div>
	
	</article>
	<!-- /article -->
	
	<?php }
	
endwhile; 

else : echo '<p>There is no page content that matches your search.<p>';

endif;

rewind_posts(); ?>

<h2 style="margin-bottom: 50px;">Blog Posts</h2>

<div id="instafeed" class="iso-grid">
	
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>

<?php while ( have_posts() ): the_post(); ?>

	<?php if ( $post->post_type == 'post' ) { ?>

	<div class="grid-item <?php echo $term->slug ?>">
		<div class="grid-inner">
			
			<!-- post thumbnail -->
			<?php if ( get_field('video_embed') ): ?>
				<div class="video-container">
					<?php the_field('video_embed'); ?>
				</div>
			
			<?php elseif ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
				</a>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/volta-events.jpg">
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<div class="masonry-block-content">
				
				<!-- post details -->
				<div class="post-meta-container">
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				</div>
				<!-- /post details -->
				
				<!-- post title -->
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<!-- /post details -->
				
				<?php html5wp_excerpt('html5wp_index'); ?>
				
			</div>
			
		</div>
	</div>
	
	<?php } ?>
	
<?php endwhile; ?>

</div>
