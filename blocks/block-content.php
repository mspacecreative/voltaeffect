<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$blockanchor = get_field('block_id');
$bgimgoverlay = get_field('background_image_overlay');
$width = get_field('content_width');
$textcolour = get_field('text_colour');
	
switch ( $bgimgoverlay ) {
	case 'dark':
		$tint = 'dark-overlay light';
		break;
	case 'light':
		$tint = 'light-overlay';
		break;
	default:
		$tint = '';
}
switch ( $textcolour ) {
	case 'dark':
		$text = '';
		break;
	case 'light':
		$text = 'light';
		break;
	default:
		$text = '';
}
switch ( $bgcolor ) {
	case 'dark':
		$bg = 'darkGreyBg light';
		break;
	case 'light':
		$bg = 'lightbg';
		break;
	default:
		$bg = '';
} ?>

<section<?php if ( $blockanchor ): echo ' id="'; echo $blockanchor; echo '" '; endif; ?> class="<?php if ( $bg ): echo $bg; echo ' '; endif; if ( $bgimg ): echo 'bg-img-cover'; endif; if ( $tint ): echo ' '; echo $tint; endif; ?> content-section"<?php if ( $bgimg ): echo ' style="background-image: url('; echo $bgimg; echo ');'; echo '"'; endif; ?>>
	
	<div class="bullet-points row-width-1280<?php if ( $width ): echo ' max-width-800'; endif; if ( $text ): echo ' '; echo $text; endif; ?>">
		<?php include('inc/section-content-loop.php'); ?>
	</div>
	
</section>