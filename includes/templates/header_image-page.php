<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$supertitle = get_field('super_title');
if ( get_field('featured_image_alignment') == 'top' ) :
	if ( $url && $supertitle ) {
		echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: top center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>';
	} elseif ( $url ) {
		echo '<div class="post-header" style="background-image: url('. $url.'); background-position: top center;"></div>';
	} else {
		echo '<div class="post-header" style="background-image: url(' . get_template_directory_uri() . '/img/header.jpg); background-position: top center;"></div>';
	}
elseif ( get_field('featured_image_alignment') == 'bottom' ) :
	if ( $url && $supertitle ) {
		echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: bottom center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>';
	} elseif ( $url ) {
		echo '<div class="post-header" style="background-image: url('. $url.'); background-position: bottom center;"></div>';
	} else {
		echo '<div class="post-header" style="background-image: url(' . get_template_directory_uri() . '/img/header.jpg); background-position: bottom center;"></div>';
	}
elseif ( get_field('featured_image_alignment') == 'center' ) :
	if ( $url && $supertitle ) {
		echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>';
	} elseif ( $url ) {
		echo '<div class="post-header" style="background-image: url('. $url.'); background-position: center;"></div>';
	} else {
		echo '<div class="post-header" style="background-image: url(' . get_template_directory_uri() . '/img/header.jpg); background-position: center;"></div>';
	}
elseif ( $url && $supertitle ) :
	echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: top center;"><div class="post-header-overlay"></div><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div></div>';
elseif ( $url ) :
	echo '<div class="post-header" style="background-image: url(' . $url . '); background-position: center;"><div class="post-header-overlay"></div></div>';
else :
	echo '<div class="post-header" style="background-image: url(' . get_template_directory_uri() . '/img/header.jpg); background-position: center;"></div>';
endif; ?>

<div class="featured-image-mobile">
	<?php if ( $url && $supertitle ) {
		echo '<img src="' . $url . '"><div class="super-title-container"><div class="default-padding super-title"><h4>' . $supertitle . '</h4></div></div>';
	} elseif ( $url ) {
		echo '<img src="' . $url . '">';
	} else {
		echo '<img src="' . get_template_directory_uri() . '/img/header-mobile.jpg">';
	} ?>
</div>