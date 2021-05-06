<?php 
$args = array(
    'post_type' => 'partners',
    'posts_per_page'=> -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'partner_category',
            'field' => 'slug',
            'terms' => 'partners-and-sponsors',
        )
    )
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
	
<div class="partners-table display-flex flex-wrap">
    
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
	<div class="partner-row display-flex align-items-center">
		<?php
		$imagelogo = get_field('logo_image', $post->ID);
		$size = 'medium';
		$logolink = get_field('logo_link', $post->ID);
		$shrinklogo = get_field('square_logo', $post->ID);
		
		if ( $imagelogo && $logolink && $shrinklogo ) : ?>
		<div class="partner-logo-cell">
			<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
				<span class="shrink-logo">
					<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
				</span>
			</a>
		</div>
		<?php elseif ( $imagelogo && $shrinklogo ) : ?>
		<div class="partner-logo-cell">
			<span class="shrink-logo">
				<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
			</span>
		</div>
		<?php elseif ( $imagelogo && $logolink ) : ?>
		<div class="partner-logo-cell">
			<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
			</a>
		</div>
		<?php elseif ( $imagelogo ) : ?>
		<div class="partner-logo-cell">
			<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
		</div>
		<?php endif; ?>
		
		<div class="partner-blurb-cell">
			<?php the_content(); ?>
		</div>
	</div>
    
    <?php endwhile; ?>
	
</div>
	
<?php endif; wp_reset_query(); ?>