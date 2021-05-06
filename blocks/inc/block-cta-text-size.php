<?php
$headingsize = get_field('heading_size');
$bodysize = get_field('paragraph_size');

if ( $headingsize == 'large' && $bodysize == 'large' ):

	if ( get_field('heading') ): ?>
	<h1><?php the_field('heading'); ?></h1>
	<?php endif;
	
	if ( get_field('content') ): ?>
	<div class="large"><?php the_field('content'); ?></div>
	<?php endif;
	
elseif ( $headingsize == 'large' && $bodysize == 'small' ):
	
	if ( get_field('heading') ): ?>
	<h1><?php the_field('heading'); ?></h1>
	<?php endif; 
	
	if ( get_field('content') ): ?>
	<?php the_field('content'); ?>
	<?php endif;
	
elseif ( $headingsize == 'small' && $bodysize == 'large' ):
	
	if ( get_field('heading') ): ?>
	<h2><?php the_field('heading'); ?></h2>
	<?php endif; 
	
	if ( get_field('content') ): ?>
	<div class="large"><?php the_field('content'); ?></div>
	<?php endif;
	
elseif ( $headingsize == 'small' && $bodysize == 'small' ):
	
	if ( get_field('heading') ): ?>
	<h2><?php the_field('heading'); ?></h2>
	<?php endif; 
	
	if ( get_field('content') ): ?>
	<?php the_field('content'); ?>
	<?php endif;
	
elseif ( $headingsize == 'large' ):

	if ( get_field('heading') ): ?>
	<h1><?php the_field('heading'); ?></h1>
	<?php endif; 
	
	if ( get_field('content') ): ?>
	<?php the_field('content'); ?>
	<?php endif;
	
elseif ( $bodysize == 'large' ):

	if ( get_field('heading') ): ?>
	<h2><?php the_field('heading'); ?></h2>
	<?php endif; 
	
	if ( get_field('content') ): ?>
	<div class="large"><?php the_field('content'); ?></div>
	<?php endif;
	
else :

	if ( get_field('heading') ): ?>
	<h2><?php the_field('heading'); ?></h2>
	<?php endif; 
	
	if ( get_field('content') ): ?>
	<?php the_field('content'); ?>
	<?php endif;

endif; ?>