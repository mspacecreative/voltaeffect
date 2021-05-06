<?php get_header(); ?>

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
<div id="page-wrapper" class="blog">
	
	<?php get_template_part('includes/templates/header_image-blog'); ?>
	
	<!-- Nav -->
	<nav id="nav">
		<?php html5blank_nav(); ?>
	</nav>
	<!-- /Nav -->
	
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
							
				<h1><?php _e( 'Articles written by ', 'html5blank' ); echo get_the_author(); ?></h1>
			</div>
		</div>
		<!-- /post title -->
		
		<div class="clear">
			<main role="main">
				<!-- section -->
				<section>
					
					<?php get_template_part('includes/loops/loop-masonry-filter'); ?>
					<?php get_template_part('pagination'); ?>
		
				</section>
				<!-- /section -->
			</main>
		</div>
	
	</div>
	
</div>

<?php get_footer(); ?>

