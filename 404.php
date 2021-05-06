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
	
<?php else : ?>

<!-- post thumbnail -->
<?php
if ( get_field('featured_image_alignment', 'options') == 'top' ): ?>
<?php $url = get_field('featured_image_blog', 'options' ); ?>
<?php echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: top center;"><div class="post-header-overlay"></div></div>'; ?>
<?php elseif ( get_field('featured_image_alignment', 'options') == 'bottom' ): ?>
<?php $url = get_field('featured_image_blog', 'options' ); ?>
<?php echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: bottom center;"><div class="post-header-overlay"></div></div>'; ?>
<?php elseif ( get_field('featured_image_alignment', 'options') == 'center' ): ?>
<?php $url = get_field('featured_image_blog', 'options' ); ?>
<?php echo '<div class="post-header container" style="background-image: url('. $url.'); background-position: center;"><div class="post-header-overlay"></div></div>'; ?>
<?php else : ?>
<div class="post-header container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div></div>
<?php endif; ?>
<!-- /post thumbnail -->
	
<?php endif; ?>
<!-- /Check if thumbnail is hidden -->
	
	<!-- post thumbnail on mobile -->
	<div class="featured-image-mobile">
		<div class="post-header-overlay"></div>
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('featured-mobile'); ?>
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/header-mobile.jpg">
		<?php endif; ?>
	</div>
	<!-- /post thumbnail on mobile -->
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
	<div class="post-content-container white-bg clear">
		
		<div class="post-container container">
			
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
					
					<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				</div>
			</div>
			<!-- /post title -->
			<div class="top-bottom-padding top-bottom-margin">
				<p><?php esc_html_e('Looks like this page doesn&#8217;t exist. Please refine your search, or use the navigation above.'); ?></p>
				<p><a href="<?php echo home_url(); ?>"><?php _e( 'Return to home page', 'html5blank' ); ?></a></p>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>