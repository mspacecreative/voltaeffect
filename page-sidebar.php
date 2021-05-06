<?php
/* Template Name: Sidebar */
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
<div id="page-wrapper no-featured-image-in-header">
	
<?php else : ?>

<!-- Page wrapper -->
<div id="page-wrapper">
	
	<?php get_template_part('includes/templates/header_image-page'); ?>
	
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
	
	<!-- post-content-container -->
	<div class="post-content-container white-bg">
	
		<div class="container">
			<!-- post title -->
			<div class="post-title-container">
				<h1><?php the_title(); ?></h1>
			</div>
			<!-- /post title -->
			
			<!-- clear -->
			<div class="clear">
				
				<main role="main">
					<!-- section -->
					<section>
									
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
									
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
							<div class="post-container">
								
								<?php the_content(); // Dynamic Content ?>
								
							</div>
									
						</article>
						<!-- /article -->
									
						<?php endwhile; ?>
										
						<?php else: ?>
										
						<!-- article -->
						<article>
							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
						</article>
						<!-- /article -->
					
					<?php endif; ?>
					
					</section>
					<!-- /section -->
				</main>
				<?php get_sidebar('sidebar'); ?>
				
			</div>
			<!-- /clear -->
		</div>
	
	</div>
	<!-- /post-content-container -->
	
	<?php get_footer(); ?>