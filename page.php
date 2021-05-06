<?php
get_header(); ?>

<!-- Background image -->
<?php if ( get_field('theme_background_img', 'options') ): ?>
<div class="background" style="background-image: url(<?php the_field('theme_background_img', 'options'); ?>);">
	<div class="gradient-overlay"></div>
</div>
<?php else : ?>
<div class="background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/splash/volta-splash-design-2.jpg);">
	<div class="gradient-overlay"></div>
</div>
<?php endif; ?>
<!-- /Background image -->


<!-- Check if thumbnail is hidden -->
<?php if ( get_field('hide_featured_image_in_header') ): ?>

<!-- Page wrapper -->
<div id="page-wrapper" class="no-featured-image-in-header">
	
	<div class="post-content-container white-bg clear">
		<div class="post-title-container">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<!-- /post title -->
		<?php if ( get_field('content_width') == 'boxed' ): ?>
		<div class="inner boxed">
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
		</div>
		<?php elseif ( get_field('content_width') == 'full-width' ): ?>
		<div class="inner">
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
		</div>
		<?php else : ?>
		<div class="inner boxed">
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
		</div>
		<?php endif; ?>
	</div>
	
	<?php get_footer(); ?>
	
<?php else : ?>

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<?php get_template_part('includes/templates/header_image-page'); ?>
	
	<div class="post-content-container white-bg clear">
		
		<!-- drop shadow -->
		<div class="horizontal-dropshadow"></div>
		<!-- / drop shadow -->
		
		<!-- post title -->
		<div class="post-title-outer">
			
			<div class="post-title-container">
				
				<!-- shadow cover left -->
				<div class="shadow-cover-left"></div>
				<!-- / shadow cover left -->
				
				<!-- shadow cover right -->
				<div class="shadow-cover-right"></div>
				<!-- / shadow cover right -->
				
				<!-- shadow cover bottom -->
				<div class="shadow-cover-bottom"></div>
				<!-- / shadow cover bottom -->
				
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<!-- /post title -->
		<?php if ( get_field('content_width') == 'boxed' ): ?>
		<div class="inner boxed">
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
		</div>
		<?php elseif ( get_field('content_width') == 'full-width' ): ?>
		<div class="inner">
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
		</div>
		<?php else : ?>
		<div class="inner">
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
		</div>
		<?php endif; ?>
	</div>

	<?php get_footer(); ?>

<?php endif; ?>
<!-- /Check if thumbnail is hidden -->