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

<!-- Check if thumbnail is hidden -->
<?php if ( get_field('hide_featured_image_in_header') ): ?>

<!-- Page wrapper -->
<div id="page-wrapper" class="no-featured-image-in-header">
	
<?php else : ?>

<!-- Page wrapper -->
<div id="page-wrapper">

	<!-- post thumbnail -->
	<?php if ( get_field('featured_image_alignment') == 'top' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header" style="background-image: url('. $url.'); background-position: top center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'bottom' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<?php echo '<div class="post-header" style="background-image: url('. $url.'); background-position: bottom center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( get_field('featured_image_alignment') == 'center' ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header" style="background-image: url('. $url.'); background-position: center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php elseif ( has_post_thumbnail( $post->ID ) ): ?>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	echo '<div class="post-header" style="background-image: url('. $url.'); background-position: center;"><div class="post-header-overlay"></div></div>'; ?>
	<?php else : ?>
	<div class="post-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header.jpg'); background-position: center;"><div class="post-header-overlay"></div></div>
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
	
	<div class="post-content-container white-bg">
		
		<!-- drop shadow -->
		<div class="horizontal-dropshadow"></div>
		<!-- / drop shadow -->
		
		<div class="clear post-container row-width-1280">
			<!-- post title -->
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
				<!-- post details -->
				<div class="post-meta-container">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<span class="author"><?php _e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<?php endwhile;
					endif;
					rewind_posts(); ?>
				</div>
				<!-- /post details -->
			</div>
			<!-- /post title -->
			<div class="clear">
				<main role="main">
					<!-- section -->
					<section>
										
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
										
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
							<div class="post-container">
									
								<?php the_content(); // Dynamic Content ?>
									
								<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
									
								<div class="post-meta-container">
									<p><?php _e( 'Categorized under ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
										
									<div class="addthis-container">
										<div class="addthis-container-inner">
											<?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox_0w4k"]'); ?>
										</div>
									</div>
										
									<!--<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->
								</div>
									
								<?php echo do_shortcode('[related_posts_2]'); ?>
									
								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
									
								<?php comments_template(); ?>
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
				<?php get_sidebar('blog-sidebar'); ?>
			</div>
		</div>
	</div>
</div>
<!-- /Page wrapper -->
	
<?php get_footer(); ?>
