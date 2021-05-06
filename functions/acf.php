<?php

/* REGISTER ACF BLOCKS */
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'splash',
			'title'				=> __('Splash Section'),
			'description'		=> __('Home page splash section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'home page', 'splash' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register full span img text left block
		acf_register_block(array(
			'name'				=> 'fullspan-image-text-overlay',
			'title'				=> __('Full Span Image Text Overlay Section'),
			'description'		=> __('Full span background image and content section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background image', 'content' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register 50/50 colour overlay text block
		acf_register_block(array(
			'name'				=> 'half-half-color-overlay-with-text',
			'title'				=> __('50/50 Colour Overlay Text Section'),
			'description'		=> __('Background image with coloured overlay and content section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background image', 'content' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'half-and-half-img-text',
			'title'				=> __('Two Column 50/50'),
			'description'		=> __('Two column row with content and background image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'two columns', 'row' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'three-column-with-icons',
			'title'				=> __('Three Column Layout Section'),
			'description'		=> __('Three column layout section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'three columns', 'grid' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register cta block
		acf_register_block(array(
			'name'				=> 'cta-area',
			'title'				=> __('CTA Section'),
			'description'		=> __('Call to Action section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'call to action', 'button' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register events block
		acf_register_block(array(
			'name'				=> 'events-section',
			'title'				=> __('Events Section'),
			'description'		=> __('Displays recent events'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'events', 'grid' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register two third one third block
		acf_register_block(array(
			'name'				=> 'two-third-one-third',
			'title'				=> __('2/3 1/3 Section'),
			'description'		=> __('Displays a two third one third layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'grid' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register flexbox block
		acf_register_block(array(
			'name'				=> 'flexbox',
			'title'				=> __('Flexbox Section'),
			'description'		=> __('Displays a custom grid layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'grid' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content Block'),
			'description'		=> __('Displays a WYSIWYG editor'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register image grid
		acf_register_block(array(
			'name'				=> 'image-grid',
			'title'				=> __('Image Grid Section'),
			'description'		=> __('Displays a series of images'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'grid', 'images' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register column block
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Variable Columns Section'),
			'description'		=> __('Displays variable column layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'columns', 'variable' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register column block
		acf_register_block(array(
			'name'				=> 'columns-new',
			'title'				=> __('Variable Columns Section'),
			'description'		=> __('Displays variable column layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'columns', 'variable' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register single testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial-single',
			'title'				=> __('Testimonial Carousel Section'),
			'description'		=> __('Displays testimonials in a carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'testimonial', 'quote' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register home page slider block
		acf_register_block(array(
			'name'				=> 'slider',
			'title'				=> __('Partners Slider Section'),
			'description'		=> __('Displays a logos in carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'logos' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register video block
		acf_register_block(array(
			'name'				=> 'video',
			'title'				=> __('Video Block'),
			'description'		=> __('Displays YouTube or Vimeo embed'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'video-alt2',
			'keywords'			=> array( 'video', 'iframe' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
	}
}

add_action('acf/init', 'my_acf_init');

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/blocks/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/block-{$slug}.php") );
	}
	
	// Create id attribute allowing for custom "anchor" value.
	$id = 'testimonial-' . $block['id'];
	if( !empty($block['anchor']) ) {
		$id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className = 'testimonial';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
	    $className .= ' align' . $block['align'];
	}
}