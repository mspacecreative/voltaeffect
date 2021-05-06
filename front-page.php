<?php get_header(); ?>

<!-- Background image -->
<?php if ( get_field('theme_background_img', 'options') ): ?>
<div class="background" style="background-image: url(<?php the_field('theme_background_img', 'options'); ?>);">
	<div class="gradient-overlay"></div>
</div>
<?php else : ?>
<!--<div class="background-video-container">
	<video class="background-video" preload="none" playsinline>
		<source src="https://cdn.mspacecreative.com/videos/volta-video-reel.mp4">
	</video>
</div>-->
<div class="background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/splash/video-reel-poster-2.jpg);">
	<video poster="<?php echo get_template_directory_uri(); ?>/img/splash/video-reel-poster-2.jpg" class="background-video" preload="none" loop muted playsinline autoplay>
		<source src="https://cdn.mspacecreative.com/videos/volta-video-reel.mp4">
	</video>
	<div class="gradient-overlay"></div>
</div>
<?php endif; ?>
<!-- /Background image -->

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<!-- post thumbnail -->
	<?php if ( get_field('hide_featured_image_in_header') ): ?>
	
	<?php else : ?>
	<?php
	if ( get_field('featured_image_alignment') == 'top' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: top center;"></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<?php echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: bottom center;"></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: center;"></div>'; ?>
	<?php else : ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: center;"></div>';
	endif; ?>
	
	<?php endif; ?>
	<!-- /post thumbnail -->
	
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			the_content();
			//
		} // end while
	} // end if
	?>

	<?php get_footer(); ?>