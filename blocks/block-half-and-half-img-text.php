<?php
$bgtype = get_field('background_type');
$bgcolor = get_field('background_colour');
$bgimg = get_field('background_image');
$bgimgalign = get_field('background_position');
$contenttype = get_field('content_type');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$headingalignment = get_field('heading_alignment');
$textcolor = get_field('text_colour');
$headingcolor = get_field('heading_colour');
$blockanchor = get_field('block_anchor');
$reverse = get_field('reverse_columns');
$narrow = get_field('narrow_row');
$colratio = get_field('column_ratio');
$removeBulletSpacing = get_field('remove_spacing_between_bullet_points');
$gutterspacing = get_field('gutter_spacing');
$spacing = get_field('vertical_spacing');
$offsetlayout = get_field('offset_layout');
$overlayopacity = get_field('overlay_opacity');

switch ( $bgcolor ) {
	case 'light':
		$shade = 'section lightbg';
		break;
	case 'dark': 
		$shade = 'section darkGreyBg light';
		break;
	default:
		$shade = '';
}
switch ( $textcolor ) {
	case 'light':
		$color = 'light';
		break;
	case 'dark':
		$color = 'dark';
		break;
	default: 'dark';
}
switch ( $aligncolumns ) {
	case 'top':
		$position = 'top-lg top-md';
		break;
	case 'middle':
		$position = 'middle-lg middle-md';
		break;
	case 'bottom':
		$position = 'bottom-lg bottom-md';
		break;
	default:
		$position = '';
}
switch ( $headingalignment ) {
	case 'center':
		$align = 'class="text-align-center"';
		break;
	case 'right':
		$align = 'class="text-align-right"';
		break;
	default:
		$align = '';
}
switch ( $spacing ) {
	case 'top':
		$padding = 'top-padding';
		break;
	case 'bottom':
		$padding = 'bottom-padding';
		break;
	case 'both':
		$padding = 'top-bottom-padding';
		break;
	default:
		$padding = '';
}
switch ( $bgimgalign ) {
	case 'center':
		$bgposition = 'center';
		break;
	case 'top':
		$bgposition = 'top center';
		break;
	case 'bottom':
		$bgposition = 'bottom center';
		break;
	default:
		$bgposition = 'center';
}
switch ( $gutterspacing ) {
	case 'wide':
		$gutters = 'gutter_wide';
		break;
	case 'wider':
		$gutters = 'gutter_wider';
		break;
	default:
		$gutters = '';
}

if ( $bgtype === 'image' && $bgimg ): ?>
<section<?php if ( $blockanchor ): ?> id="<?php echo $blockanchor ?>"<?php endif; ?> class="section section_has_bg_img<?php if ( $color ): echo ' '; echo $color; endif; ?>" style="background-image: url(<?php echo $bgimg ?>);<?php if ( $bgposition ): echo ' background-position: '; echo $bgposition; else: echo ' background-position: center'; endif; ?>; background-size: cover; background-repeat: no-repeat;">
	<div class="section_has_bg_img_overlay" style="position: absolute; height: 100%; width: 100%; top: 0; left: 0; background-color: <?php if ( $textcolor === 'dark' && $overlayopacity ): ?>rgba(255,255,255,<?php echo $overlayopacity ?>);<?php elseif ( $textcolor === 'dark' ): ?>rgba(255,255,255,.75);<?php endif; ?><?php if ( $textcolor === 'light' && $overlayopacity ): ?>rgba(0,0,25,<?php echo $overlayopacity ?>);<?php elseif ( $textcolor === 'light' ): ?>rgba(0,0,25,.75);<?php endif; ?>"></div>

<?php else : ?>
<section class="positionRelative <?php echo $shade ?>">

<?php endif; ?>

	<div class="row-width-1280<?php if ( $narrow ): echo ' max-width-800'; endif; echo ' '; echo $padding ?>">
			
			<?php 
			if ( $rowheading ) {
				echo '<h2 ' . $align . '>' . $rowheading . '</h2>';
			}
			?>
			
			<div class="row<?php if ( $gutters ): echo ' '; echo $gutters; endif; if ( $reverse ): echo ' reverse'; endif; if ( $position ): echo ' '; echo $position; endif; ?>">
			
			<?php
				if( have_rows('left_column') ):
		 		while( have_rows('left_column') ): the_row();
		 		$anchor = get_sub_field('anchor');
		 		$icon = get_sub_field('icon');
		 		$iconsize = 'thumbnail';
		 		$heading = get_sub_field('heading');
				$content = get_sub_field('content');
				$contenttype = get_sub_field('content_type');
				$mobile = get_sub_field('mobile_spacing');
		 		
		 		switch ( $colratio ) {
					case 'three-fifth-two-fifth':
						$colwidth = 'col-lg-7';
						break;
					case 'two-fifth-three-fifth':
						$colwidth = 'col-lg-5';
						break;
					case 'two-third-one-third':
						$colwidth = 'col-lg-8';
						break;
					case 'one-third-two-third':
						$colwidth = 'col-lg-4';
						break;
					case 'three-quarter-one-quarter':
						$colwidth = 'col-lg-10';
						break;
					case 'one-quarter-three-quarter':
						$colwidth = 'col-lg-2';
						break;
					default:
						$colwidth = 'col-lg-6';
				} ?>
		 		
		 		<div<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; ?> class="<?php if ( $colwidth ): echo $colwidth; echo ' '; else: echo 'col-lg-6 '; endif; if ( $mobile ): echo ' keepSpacing '; endif; ?>bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col">
				
					<?php
					if ( $contenttype == 'carousel' ): ?>
					
					<div class="carousel who_we_are">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ): ?>
							
						<div>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
							
						<?php 
						endforeach;
						endif; ?>
						
					</div>
					
					<?php elseif ( $contenttype == 'grid' ): ?>
					
					<ul class="photoGrid">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ):
						$url = get_field('external_url', $image['id']);
						$shrink = get_field('shrink_image', $image['id']); ?>
							
						<li>
							<?php if ( $url && $shrink ) {
								echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
							} elseif ( $url ) {
								echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
							} else {
								echo wp_get_attachment_image( $image['ID'], $size );
							} ?>
						</li>
							
						<?php 
						endforeach;
						endif; ?>
					</ul>
					
					<?php elseif ( $contenttype == 'image' ):
					
					$img = get_sub_field('image');
					if( !empty( $img ) ): ?>
					<img data-aos="fade-right" class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
					<?php endif; ?>
					
					<?php else :
					
					if ( $icon ) {
						echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
					}
					
					if ( $heading ) {
						echo '<h3>' . $heading . '</h3>';
					}
					if ( $content ) {
						if ( $removeBulletSpacing ) {
							echo '<div class="bullet-points removeSpacing">' . $content . '</div>';
						} else {
							echo '<div class="bullet-points">' . $content . '</div>';
						}
					}
					if ( have_rows('call_to_action') ) {
						while ( have_rows('call_to_action') ) { 
							the_row();
							$link = get_sub_field('link');
							$label = get_sub_field('label');
							if ( $bgcolor == 'dark' && $link && $label ) {
								echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
							} elseif ( $bgcolor == 'dark' && $link ) {
								echo '<a href="' . $link . '" class="button light">Learn more</a>';
							} elseif ( $bgcolor == 'light' && $link && $label ) {
								echo '<a href="' . $link . '" class="button dark blue">' . $label . '</a>';
							} elseif ( $bgcolor == 'light' && $link ) {
								echo '<a href="' . $link . '" class="button dark blue">Learn more</a>';
							} elseif ( $link && $label ) {
								echo '<a href="' . $link . '" class="button dark blue">' . $label . '</a>';
							} elseif ( $link ) {
								echo '<a href="' . $link . '" class="button dark blue">Learn more</a>';
							}
						}
					} 
					
					endif; ?>
				</div>
				
				<?php endwhile;
				endif; ?>
				
				<?php if( have_rows('right_column') ):
		 		while( have_rows('right_column') ): the_row();
		 		$anchor = get_sub_field('anchor');
		 		$icon = get_sub_field('icon');
		 		$iconsize = 'thumbnail';
		 		$contenttype = get_sub_field('content_type');
		 		$heading = get_sub_field('heading_right_col');
		 		$contentrightcol = get_sub_field('content_right_col');
				$mobile = get_sub_field('mobile_spacing');
				
				switch ( $colratio ) {
					case 'three-fifth-two-fifth':
						$colwidth = 'col-lg-5';
						break;
					case 'two-fifth-three-fifth':
						$colwidth = 'col-lg-7';
						break;
					case 'two-third-one-third':
						$colwidth = 'col-lg-4';
						break;
					case 'one-third-two-third':
						$colwidth = 'col-lg-8';
						break;
					case 'three-quarter-one-quarter':
						$colwidth = 'col-lg-2';
						break;
					case 'one-quarter-three-quarter':
						$colwidth = 'col-lg-10';
						break;
					default:
						$colwidth = 'col-lg-6';
				} ?>
				
				<div<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; ?> class="<?php if ( $colwidth ): echo $colwidth; echo ' '; else: echo 'col-lg-6 '; endif; if ( $mobile ): echo ' keepSpacing '; endif; ?>bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col">
				
					<?php
					if ( $contenttype == 'carousel' ): ?>
					
					<div class="carousel who_we_are">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ): ?>
							
						<div>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
							
						<?php 
						endforeach;
						endif; ?>
						
					</div>
					
					<?php elseif ( $contenttype == 'grid' ): ?>
					
					<ul class="photoGrid">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ):
						$url = get_field('external_url', $image['id']);
						$shrink = get_field('shrink_image', $image['id']); ?>
							
						<li>
							<?php if ( $url && $shrink ) {
								echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
							} elseif ( $url ) {
								echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
							} else {
								echo wp_get_attachment_image( $image['ID'], $size );
							} ?>
						</li>
							
						<?php 
						endforeach;
						endif; ?>
					</ul>
					
					<?php elseif ( $contenttype == 'image' ):
					
					$img = get_sub_field('image');
					if( !empty( $img ) ): ?>
					<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
					<?php endif; ?>
					
					<?php elseif ( $contenttype == 'content' ):
					
					if ( $icon ) {
						echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
					}
					
					if ( $heading ) {
						echo '<h3>' . $heading . '</h3>';
					}
					if ( $contentrightcol ) {
						if ( $removeBulletSpacing ) {
							echo '<div class="bullet-points removeSpacing">' . $contentrightcol . '</div>';
						} else {
							echo '<div class="bullet-points">' . $contentrightcol . '</div>';
						}
					}
					if ( have_rows('call_to_action') ) {
						while ( have_rows('call_to_action') ) { 
							the_row();
							$link = get_sub_field('link');
							$label = get_sub_field('label');
							if ( $bgcolor == 'dark' && $link && $label ) {
								echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
							} elseif ( $bgcolor == 'dark' && $link ) {
								echo '<a href="' . $link . '" class="button light">Learn more</a>';
							} elseif ( $bgcolor == 'light' && $link && $label ) {
								echo '<a href="' . $link . '" class="button dark blue">' . $label . '</a>';
							} elseif ( $bgcolor == 'light' && $link ) {
								echo '<a href="' . $link . '" class="button dark blue">Learn more</a>';
							} elseif ( $link && $label ) {
								echo '<a href="' . $link . '" class="button dark blue">' . $label . '</a>';
							} elseif ( $link ) {
								echo '<a href="' . $link . '" class="button dark blue">Learn more</a>';
							}
						}
					} 
					
					endif; ?>
				</div>
				
				<?php endwhile;
				endif; ?>
				
			</div>
	</div>
</section>