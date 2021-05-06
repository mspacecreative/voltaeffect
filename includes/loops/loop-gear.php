<div class="residents-container row clear">
	<?php 
	$args = array(
	    'post_type' => 'companies',
	    'posts_per_page'=> -1,
	    'orderby' => 'title',
	    'order' => 'ASC',
	    'tax_query' => array(
	        array(
	            'taxonomy' => 'company_type',
	            'field' => 'slug',
	            'terms' => 'volta-gear',
	        )
	    )
	);
	$loop = get_posts($args);
    if ( $loop ) :
        foreach ( $loop as $post ) : setup_postdata( $post ); ?>
		<div class="resident-container col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<?php
			$callout = get_field('callout', $post->ID);
			$calloutcontent = get_field('callout_content', $post->ID);
			 if ( $callout ): ?>
			<div class="grid-inner" style="padding-bottom: 8em;">
				<div class="logo-image-wrap">
					<?php
					$imagelogo = get_field('logo_image', $post->ID);
					$size = 'medium';
					$logolink = get_field('logo_link', $post->ID);
					$shrinklogo = get_field('square_logo', $post->ID);
					$focus = get_field('focus', $post->ID);
					if ( $imagelogo && $logolink && $shrinklogo ) : ?>
					<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
						<span class="shrink-logo">
							<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
						</span>
					</a>
					<?php elseif ( $imagelogo && $shrinklogo ) : ?>
					<span class="shrink-logo">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</span>
					<?php elseif ( $imagelogo && $logolink ) : ?>
					<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</a>
					<?php elseif ( $imagelogo ) : ?>
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					<?php endif; ?>
				</div>
				<div class="resident-card-content">
					<h3><?php the_title(); ?></h3>
					<?php if ( $focus ): ?>
					<p class="focus-description"><span><?php echo esc_html_e('Focus: '); ?></span><?php the_field('focus', $post->ID); ?></p>
					<?php endif; ?>
					<?php
					if( has_excerpt() ) { 
						echo '<p>' . the_excerpt() . '</p>';
					} else {
						the_content();
					}
					
					echo '<div class="alumni-company-callout"><h5>' . $calloutcontent . '</h5></div>'; ?>
				</div>
			</div>
			<?php else : ?>
			<div class="grid-inner">
				<div class="logo-image-wrap">
					<?php
					$imagelogo = get_field('logo_image', $post->ID);
					$size = 'medium';
					$logolink = get_field('logo_link', $post->ID);
					$shrinklogo = get_field('square_logo', $post->ID);
					$focus = get_field('focus', $post->ID);
					$alumnicompany = get_field('alumni_company', $post->ID);
					if ( $imagelogo && $logolink && $shrinklogo ) : ?>
					<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
						<span class="shrink-logo">
							<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
						</span>
					</a>
					<?php elseif ( $imagelogo && $shrinklogo ) : ?>
					<span class="shrink-logo">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</span>
					<?php elseif ( $imagelogo && $logolink ) : ?>
					<a href="<?php the_field('logo_link', $post->ID); ?>" target="_blank">
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					</a>
					<?php elseif ( $imagelogo ) : ?>
						<?php echo wp_get_attachment_image( $imagelogo, $size ); ?>
					<?php endif; ?>
				</div>
				<div class="resident-card-content">
					<h3><?php the_title(); ?></h3>
					<?php if ( $focus ): ?>
					<p class="focus-description"><span><?php echo esc_html_e('Focus: '); ?></span><?php the_field('focus', $post->ID); ?></p>
					<?php endif; ?>
					<?php
					if( has_excerpt() ) { 
						echo '<p>' . the_excerpt() . '</p>';
					} else {
						the_content();
					} ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endforeach; 
	endif; wp_reset_postdata();
?>
</div>