<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 768, '', true); // Large Thumbnail
    add_image_size('medium', 300, '', true); // Medium Thumbnail
    add_image_size('small', 150, '', true); // Small Thumbnail
    add_image_size('blog-thumb', 400, 400, array( 'center', 'center' ));
    add_image_size('small-blog-thumb', 200, 200, array( 'center', 'center' ));
    add_image_size('featured-mobile', 600, 338, array( 'center', 'center' ));
    add_image_size('logo-grid', 400, 225, true);

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr');

        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr');
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    /*wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');
    
    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('main-css');*/
    
    wp_register_style('typekit', 'https://use.typekit.net/qpl1mqp.css', array(), '1.0', 'all');
    wp_enqueue_style('typekit');
    
    wp_register_style('html5blank', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank');
    
    wp_register_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0', 'all');
    wp_enqueue_style('slick-css');
    
    /*wp_register_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0', 'all');
    wp_enqueue_style('slick-theme');
    
    wp_register_style('isotope-css', get_template_directory_uri() . '/assets/css/isotope.css', array(), '1.0', 'all');
    wp_enqueue_style('isotope-css');
    
    wp_register_style('team-css', get_template_directory_uri() . '/assets/css/team.css', array(), '1.0', 'all');
    wp_enqueue_style('team-css');
    
    wp_register_style('flexbox-css', get_template_directory_uri() . '/assets/css/flexboxgrid.min.css', array(), '1.0', 'all');
    wp_enqueue_style('flexbox-css');*/
}

// Load scripts in footer
function footerScripts() {
	wp_register_script('dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array('jquery'), null, true);
	wp_enqueue_script('dropotron');
	
	wp_register_script('scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'), null, true);
	wp_enqueue_script('scrolly');
	
	wp_register_script('scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'), null, true);
	wp_enqueue_script('scrollex');
	
	wp_register_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), null, true);
	wp_enqueue_script('browser');
	
	wp_register_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array('jquery'), null, true);
	wp_enqueue_script('breakpoints');
	
	wp_register_script('util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), null, true);
	wp_enqueue_script('util');
	
	wp_register_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('slick');
	
	wp_register_script( 'isotope-cdn', 'https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script('isotope-cdn');
	
	wp_register_script( 'isotope-images', 'https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script('isotope-images');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_register_script('scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Blog Sidebar
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'html5blank'),
        'description' => __('Items to be displayed in Blog sidebar', 'html5blank'),
        'id' => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar
    register_sidebar(array(
        'name' => __('Page Sidebar', 'html5blank'),
        'description' => __('Items to be displayed in Pages sidebar', 'html5blank'),
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Column 1
    register_sidebar(array(
        'name' => __('Footer Column 1', 'html5blank'),
        'description' => __('Items to be displayed in first footer column', 'html5blank'),
        'id' => 'footer-col-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Column 2
    register_sidebar(array(
        'name' => __('Footer Column 2', 'html5blank'),
        'description' => __('Items to be displayed in second footer column', 'html5blank'),
        'id' => 'footer-col-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Column 3
    register_sidebar(array(
        'name' => __('Footer Column 3', 'html5blank'),
        'description' => __('Items to be displayed in third footer column', 'html5blank'),
        'id' => 'footer-col-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Column 4
    register_sidebar(array(
        'name' => __('Footer Column 4', 'html5blank'),
        'description' => __('Items to be displayed in fourth footer column', 'html5blank'),
        'id' => 'footer-col-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
/*function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}
*/

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = apply_filters( $output, get_field('content_editor') );
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '&hellip; <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('read more', 'html5blank') . '</a>';
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'footerScripts'); // Add Footer Scripts
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.
add_shortcode('title_with_line_rules', 'centeredLineRulesTitle');

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

// REMOVE PROTECTED / PRIVATE PREFIX ON PROTECTED PAGES
function the_title_trim($title) {

	$title = attribute_escape($title);

	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);

	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);

	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

// ADD EXCERPT TO PAGES
// Adding excerpt for page
add_post_type_support( 'page', 'excerpt' );

// FORMAT ANCHOR LINKS
function custom_anchor_links( $value, $post_id, $field ) {
	$value = sanitize_title_with_dashes( $value );
	return $value;
}
add_filter('acf/load_value/name=block_id', 'custom_anchor_links', 10, 3);

// REDIRECT LOGGED OUT USERS
function ur_redirect_after_logout(){
         wp_redirect( home_url() );
         exit();
}
add_action( 'wp_logout', 'ur_redirect_after_logout');

// LOGGED IN USERS CAN SEE THIS ONLY
function member_only_shortcode($atts, $content = null)
{
    if (is_user_logged_in() && !is_null($content) && !is_feed()) {
        return $content;
    }
}
add_shortcode('member_only', 'member_only_shortcode');

/* ACF OPTIONS PAGE */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// ADD WRAPPING DIV TO CLASSIC BLOCK
function wrap_classic_block( $block_content, $block ) {
	if ( is_singular('page') ) {
		if ( null === $block['blockName'] && ! empty( $block_content ) && ! ctype_space( $block_content ) ) {
			$block_content = '<div class="classic-block-wrap row-width-1280">' . $block_content . '</div>';
		}
		return $block_content;
	} else {
		return $block_content;
	}
}
add_filter( 'render_block', 'wrap_classic_block', 10, 2 );

// CUSTOM STYLES ADDED TO FORMATS DROPDOWN
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles
        array(  
            'title' => 'Dark CTA Button',  
            'block' => 'a',  
            'classes' => 'dark button inline-button',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Light CTA Button',  
            'block' => 'a',  
            'classes' => 'light button inline-button',
            'wrapper' => true,
        ),
        array(
        	'title' => 'Underlined Title',
        	'block' => 'span',
        	'classes' => 'underlined-heading',
        	'wrapper' => true,
        ),
       	array(
	       	'title' => 'Centered Title with Line Rules',
	       	'block' => 'div',
	       	'classes' => 'centered-title-with-line-rules',
	       	'wrapper' => true,
       )
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

function custom_editor_styles() {
	add_editor_style('editor-styles.css');
}

add_action('init', 'custom_editor_styles');

// TRUNCATE THE TITLE
function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	return $mytitle;
}

// CENTERED TITLE WITH LINE RULES ON BOTH ENDS SHORTCODE
function centeredLineRulesTitle($atts, $content = null) {
    return '<div class="centered-title-with-line-rules"><h2><span class="before-title"></span>' . do_shortcode($content) . '<span class="after-title"></span></h2></div>';
}

// GRAVITY FORMS SCROLL TO TOP FIX
add_filter( 'gform_confirmation_anchor', '__return_true' );

// LINKED FUNCTIONS
include 'functions/acf.php';
include 'functions/gutenberg.php';
include 'functions/shortcodes.php';