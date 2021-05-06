<?php query_posts( 'posts_per_page=3' ); ?>
	
	<ul class="divided">
		<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<header>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</header>
			<span class="timestamp"><?php the_time('F j, Y'); ?></span>
		</li>
		<?php endwhile; ?>
		
	</ul>
	
<?php wp_reset_query(); ?>