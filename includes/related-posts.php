<div id="instafeed" class="iso-grid">
	
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>

<?php

$related = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 3,
        'post__not_in'   => array( $post->ID )
    )
);

if( $related->have_posts() ) { 
    while( $related->have_posts() ) { 
        $related->the_post(); ?>
        
        <div class="grid-item <?php echo $term->slug ?>">
        	<div class="grid-inner">
        		
        		<!-- post thumbnail -->
        		<?php if ( get_field('video_embed') ): ?>
        			<div class="video-container">
        				<?php the_field('video_embed'); ?>
        			</div>
        		
        		<?php else : ?>
        			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        				<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
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
        			<a href="<?php the_permalink(); ?>"><h3 style="font-size: 18px; line-height: 1.35em;"><?php the_title(); ?></h3></a>
        			<!-- /post details -->
        			
        			<a class="view-article" style="display: inline-block; font-size: 15px;" href="<?php the_permalink(); ?>"><?php esc_html_e('Read Article'); ?></a>
        			
        		</div>
        		
        	</div>
        </div>
        
    <?php }
    wp_reset_postdata();
} ?>

</div>