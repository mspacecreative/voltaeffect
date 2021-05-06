<?php
/* Template Name: Custom Layout */
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

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<?php get_template_part('includes/templates/header_image-page'); ?>
	
	<!-- post thumbnail on mobile -->
	<div class="featured-image-mobile">
		<div class="post-header-overlay"></div>
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('featured-mobile'); ?>
		<?php endif; ?>
	</div>
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
	<div class="post-content-container container white-bg clear">
		<div class="post-container">
			
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
	</div>

	<?php get_footer(); ?>