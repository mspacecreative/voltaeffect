<?php
$layouttype = get_field('layout_type');
$verticalalignment = get_field('vertical_alignment');
$verticalspacing = get_field('vertical_spacing');
$bgcolour = get_field('column_background_colour');
$hideblock = get_field('hide_block');
$textcolour = get_field('text_colour');
$heading = get_field('heading');
$gutterspacing = get_field('gutter_spacing');

// CUSTOM ID
$id = 'before-after-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
// CUSTOM CLASS	
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

switch ( $layouttype ) {
	case 'one':
		$layout = 'col col-lg-12 col-md-12 col-sm-12 col-xs-12';
		break;
	case 'two':
		$layout = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
		break;
	case 'three':
		$layout = 'col col-lg-4 col-md-4 col-sm-6 col-xs-12';
		break;
	case 'four':
		$layout = 'col col-lg-3 col-md-3 col-sm-6 col-xs-12';
		break;
	case 'five':
		$layout = 'col col-lg-five col-sm-6 col-xs-12';
		break;
	default:
		$layout = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
}
switch ( $verticalalignment ) {
	case 'top':
		$align = '';
		break;
	case 'center':
		$align = 'middle-lg middle-md middle-sm';
		break;
	case 'bottom':
		$align = 'bottom-lg bottom-md bottom-sm';
		break;
	default:
		$align = '';
}
switch ( $verticalspacing ) {
	case 'top':
		$spacing = 'top-padding';
		break;
	case 'bottom':
		$spacing = 'bottom-padding';
		break;
	case 'both':
		$spacing = 'top-bottom-padding';
		break;
	default:
		$spacing = '';
}
switch ( $textcolour ) {
	case 'dark':
		$colour = '';
		break;
	case 'light':
		$colour = 'light';
		break;
	default:
		$colour = '';
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

if ( have_rows('column') ): ?>

<section class="columns-container<?php if ( $spacing ): echo ' '; echo $spacing; endif; if ( $className ): echo esc_attr($className); endif; ?>"<?php if ( $hideblock ): echo ' style="display: none;"'; elseif ( $bgcolour ): echo ' style="background-color: '; echo $bgcolour; echo '"'; endif; ?>>
	<div class="row-width-1280<?php if ( $bgcolour ): echo ' top-bottom-padding'; endif; if ( $colour ): echo ' '; echo $colour; endif; ?>">
		<?php 
		if ( $heading ) {
		echo '<h2 class="width-100">' . $heading . '</h2>';
		}
		?>
		<div class="row<?php if ( $align ): echo ' '; echo $align; endif; if ( $gutters ): echo ' '; echo $gutters; endif; ?>">
	
			<?php 
			while ( have_rows('column') ): the_row();
			$contenttype = get_sub_field('content_type');
			
			switch ( $contenttype ) {
				case 'text':
					$content = get_sub_field('text_editor');
					break;
				case 'image':
					$image = get_sub_field('image');
					$caption = $image['caption'];
					$content = '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" style="margin-top: 10px;"><p class="photo-caption">' . $caption . '</p>';
					break;
				case 'carousel':
					$content = get_sub_field('image_carousel');
					break;
				case 'video':
					$videourl = get_sub_field('video');
					$content = '<div class="video_iframe_container">' . $videourl . '</div>';
					break;
				default:
					$content = get_sub_field('text_editor');
			} ?>
			
			<div<?php if ( $layout ): echo ' class="'; echo $layout; echo '"'; endif; ?>>
			
				<?php 
				if ( $content ) {
				echo $content;
				}
				?>
			
			</div>
			
			<?php endwhile; ?>
			
		</div>
	</div>
</section>

<?php endif; ?>