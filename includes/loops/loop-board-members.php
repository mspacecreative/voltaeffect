<?php 
$args = array(
    'post_type' => 'team',
    'posts_per_page'=> -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'member_type',
            'field' => 'slug',
            'terms' => 'board-director',
        )
    )
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
<div class="team-container clear">
	
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<div class="team-profile">
				
		<div class="profile-img-wrap">
			<div class="plus-sign">
				<i class="fa fa-plus"></i>
			</div>
			<div class="profile-overlay"></div>
			<?php if ( has_post_thumbnail() ) {
				echo the_post_thumbnail( array(400,400) );
			} else {
			echo '<img src="' . get_template_directory_uri() . '/img/portrait_placeholder.jpg">';
			} ?>
		</div>
								
		<h4><?php the_title(); ?></h4>
		
		<?php
		$alttitle = get_field('alternate_position__title', get_the_ID());
		$title = get_field('position__title', get_the_ID());
		if ( $alttitle ): ?>
		<p><?php echo $alttitle ?></p>
		
		<?php elseif ( $title ): ?>
		<p><?php echo $title ?></p>
		<?php endif; ?>
								
	</div>
	 
	<div class="team-bio-container">
		<span class="close-button mobile"></span>
		<div class="team-bio-inner">
			<span class="close-button desktop"></span>
			<?php the_content();
			
			$file = get_field('file', get_the_ID());
			if ( $file ) : ?>
			    <p><a class="button light" style="margin-top: 15px;" href="<?php echo $file ?>" download>Download high res head shot</a></p>
			<?php endif; ?>
	
		</div>
	</div>
	
	<?php endwhile; ?>

</div>
<?php endif; wp_reset_query(); ?>