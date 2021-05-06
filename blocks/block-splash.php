<!-- Header -->
<div id="header">

	<!-- Inner -->
	<div class="inner light">
		<header>
			<h1><a href="<?php echo home_url(); ?>" id="logo"><?php the_field('branding'); ?></a></h1>
			<hr />
			<h2><?php the_field('first_heading'); ?></h2>
			<p><?php the_field('second_heading'); ?></p>
		</header>
		<footer>
		<?php if( have_rows('cta') ): 
			while( have_rows('cta') ): the_row(); ?>
				
				<a href="<?php the_sub_field('button_link'); ?>" class="button circled scrolly"><?php the_sub_field('button_label'); ?></a>
				
			<?php endwhile;
		endif; ?>
		</footer>
	</div>
	<!-- /Inner -->

</div>
<!-- /Header -->