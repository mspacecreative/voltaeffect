<div id="stick-here-mobile"></div>
<div class="mobile-filter">
    <button>Filter by category</button>
</div>
<div id="stick-here"></div>
<div class="button-group filters-button-group">
	<button class="button"><a href="<?php echo home_url('blog'); ?>">All</a></button>'
	<?php
	$categories = get_categories( array(
		'orderby' => 'name',
		'order'   => 'ASC',
		'include' => '251,268,255,259',
	) );
	
	foreach($categories as $category) {
		$category_link = get_category_link($category->term_id);
    	echo '<button class="button"><a href="' . esc_url( $category_link ) . '">' . $category->name . '</a></button>';
	} ?>
</div>

<?php if ( have_posts() ): ?>
<div class="row-width-1280">
	<div id="instafeed" class="iso-grid">
		
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
		
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="grid-item">
			<div class="grid-inner">
				
				<!-- post thumbnail -->
				<?php if ( get_field('featured_video') ): ?>
					<div class="video-container">
						<?php the_field('featured_video'); ?>
					</div>
				
				<?php else : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
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
					
					<span class="blog_card_excerpt"><?php html5wp_excerpt('html5wp_index'); ?></span>
					
				</div>
				
			</div>
		</div>
		<?php endwhile; ?>
		
	</div>
</div>
<?php endif; ?>
