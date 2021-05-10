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
	<div class="row cards">
		
		<?php while ( have_posts() ) : the_post();
		$excerpt = get_the_excerpt();
		$featuredimg = get_the_post_thumbnail_url( get_the_ID(), 'featured-mobile' );
		$imgalt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
		$defaultimg = get_template_directory_uri() . '/img/placeholders/volta-blog-featured-img.jpg'; ?>
		<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-6">
			
			<div class="col-inner">
			
				<!-- post thumbnail -->
				<?php if ( get_field('featured_video') ): ?>
					<div class="video-container">
						<?php the_field('featured_video'); ?>
					</div>
					
				<?php elseif ( $featuredimg ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo $featuredimg ?>" alt="<?php if ( $imgalt ): echo $imgalt; else: echo bloginfo('name'); endif; ?>">
					</a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php echo $defaultimg ?>" alt="Volta">
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
					
				<div class="masonry-block-content">
						
					<!-- post details -->
					<div class="post-meta-container">
						<span class="date"><?php the_time('F j, Y'); ?></span>
						<span class="author"><?php _e( 'By', 'volta' ); ?> <?php the_author_posts_link(); ?></span>
					</div>
					<!-- /post details -->
						
					<!-- post title -->
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<!-- /post details -->
						
					<span class="blog_card_excerpt"><?php echo $excerpt ?></span>
						
				</div>
				
			</div>
			
		</div>
		<?php endwhile; ?>
		
	</div>
</div>
<?php endif; ?>
