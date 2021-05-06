<?php 
$padding = get_field('section_padding');
$content = get_field('content_editor');
$txtalign = get_field('text_alignment');

switch ( $padding ) {
	case 'top':
		$space = 'top-padding';
		break;
	case 'bottom':
		$space = 'bottom-padding';
		break;
	case 'both':
		$space = 'top-bottom-padding';
		break;
	default:
		$space = '';
}
switch ( $txtalign ) {
	case 'left':
		$text = '';
		break;
	case 'center':
		$text = 'text-align-center';
		break;
	case 'right':
		$text = 'text-align-right';
		break;
	default:
		$text = '';
} ?>
	
<div class="<?php if ( $space && $text ): echo $space; echo ' '; echo $text; echo ' '; elseif ( $space ): echo $space; echo ' '; elseif ( $text ): echo $text; echo ' '; endif; ?>clear">
	
	<?php if ( $content ) {
		echo $content;
		include 'content-cta-button.php';
	} ?>
			
</div>