<h3 style="margin-top: 2em;"><?php _e('Related articles categorized under '); the_category(', '); ?></h3>
<div style="margin-bottom: 3em;">
<ul class="divided related-posts row">

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
        
        <div class="event-container col-lg-4 col-md-4 col-sm-6 col-xs-12 col-land-mobile row">
        	<?php
        	if ( has_post_thumbnail() ): ?>
        	<span class="event-thumb col-lg-4 col-md-4 col-sm-4 col-xs-3">
        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,200) ); ?></a>
        	</span>
        	<?php else : ?>
        	<span class="event-thumb col-lg-4 col-md-4 col-sm-4 col-xs-3">
        		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/placeholders/volta-events.jpg" alt="Volta Events" /></a>
        	</span>
        	<?php endif; ?>
        	<div class="bucket-content col-lg-8 col-md-8 col-sm-8 col-xs-9">
        		<header>
        			<h4><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 7); ?></a></h4>
        			<p class="event-date"><?php the_time('d/m/Y'); ?></p>
        		</header>
        	</div>
			
        </div>
        
    <?php }
    wp_reset_postdata();
} ?>

</ul>
</div>