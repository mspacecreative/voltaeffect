<?php $args = array( 
	'posts_per_page'=> 5, 
	'post__not_in' => array( $post->ID ) 
);
$arr_posts = new WP_Query( $args ); ?>
	
	<ul class="divided row">
		<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
		
		<div class="event-container col-lg-4 col-md-4 col-sm-6 col-xs-12 row">
			<?php
			if ( has_post_thumbnail() ): ?>
			<span class="event-thumb col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-blog-thumb'); ?></a>
			</span>
			<?php else : ?>
			<span class="event-thumb col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/placeholders/volta-events.jpg" alt="Volta Events" /></a>
			</span>
			<?php endif; ?>
			<div class="bucket-content col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<header>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p class="event-date"><?php the_time('F j, Y'); ?></p>
				</header>
			</div>
		</div>
		
		<?php endwhile; ?>
		
	</ul>
	
<?php wp_reset_query(); ?>