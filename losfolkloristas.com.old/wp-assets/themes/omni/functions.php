<?php
/**
 * Omni functions and definitions.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */

/**
 * Sets up the content width value based on the theme's design.
 * @see twentythirteen_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 950;

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Omni supports.
 */
function omni_setup() {
	// Makes Omni available for translation.
	load_theme_textdomain( 'omni', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Navigation', 'omni' ) );
	
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 414, 315, true );
	add_image_size( 'post-img', 810, 999, true );
	add_image_size( 'overview-thumb', 414, 315, true );
	add_image_size( 'tiled-thumb', 500, 500, true );
	add_image_size( 'portfolio-thumb', 368, 328, true );
	
}
add_action( 'after_setup_theme', 'omni_setup' );


/**
 * Include Vafpress Framework
 */
require_once( get_template_directory() . '/vafpress-framework/bootstrap.php' );
require_once( get_template_directory() . '/admin/data_sources.php');
require_once( get_template_directory() . '/functions/load-framework.php' );


// Get settings for the Google Fonts and add them
$font_face = omni_option('typo_body_font_family');
$font_styles = omni_option('typo_body_font_styles');
$font_weights = omni_option('typo_body_font_weights');
$font_face_two = omni_option('typo_title_font_family');
$font_styles_two = omni_option('typo_title_font_styles');
$font_weights_two = omni_option('typo_title_font_weights');
VP_Site_GoogleWebFont::instance()->add($font_face, $font_weights, $font_styles);
VP_Site_GoogleWebFont::instance()->add($font_face_two, $font_weights_two, $font_styles_two);


/**
 * Enques scripts and styles
 */
function omni_scripts_styles() {
	
	VP_Site_GoogleWebFont::instance()->register_and_enqueue();
	
	// Bootstrap Minified Stylesheet
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	
	// Loads Main Stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	if ( omni_option('website_type') == 'multipage' ) {
	wp_enqueue_style( 'multipage', get_template_directory_uri() . '/assets/css/multipage.css' );
	}
	
	// Other Stylesheets
	wp_enqueue_style( 'entypo', get_template_directory_uri() . '/assets/css/entypo.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), '2.0' );
	wp_enqueue_style( 'options', get_template_directory_uri() . '/assets/css/custom.css');
	
	// jQuery Scripts
	wp_enqueue_script( 'jquery' );
	
	// Adds JavaScript to pages with the comment form to support sites with
	// threaded comments (when in use).
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'scroll-to-min', get_template_directory_uri() . '/assets/js/plugins/jquery.scrollTo.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/plugins/jquery.nav.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/plugins/jquery.parallax.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'hoverdir', get_template_directory_uri() . '/assets/js/plugins/jquery.hoverdir.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/plugins/jquery.isotope.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/plugins/jquery.sticky.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/plugins/jquery.magnific-popup.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/plugins/jquery.flexslider.min.js', array( 'jquery' ), '2.2.0', true );
	wp_enqueue_script( 'tiled-items', get_template_directory_uri() . '/assets/js/plugins/jquery.tiledItems.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'tweet', get_template_directory_uri() . '/assets/js/plugins/jquery.tweet.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/assets/js/plugins/jquery.fitvids.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/plugins/jquery.superfish.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'mobilemenu', get_template_directory_uri() . '/assets/js/plugins/jquery.mobilemenu.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'newsletter-signup', get_template_directory_uri() . '/assets/js/newsletter.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/assets/js/gmap3.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'custom-omni', get_template_directory_uri() . '/assets/js/omni.js', array( 'jquery' ), '1.2', true );
	
}
add_action( 'wp_enqueue_scripts', 'omni_scripts_styles' );

function load_templateDir_js(){
	$output = '';

	$output .= '<script type="text/javascript">'."\n";
	$output .= 'var templateDir = "'.get_template_directory_uri().'"';
	$output .= "\n".'</script>'."\n\n\n";

	echo $output;
}
add_action('wp_footer','load_templateDir_js', 10);


/**
 * Add ie conditional html5 shim to header
 */
function add_ie_html5_shim () {
	echo '<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->';
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');


/**
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Omni 1.0
 *
 */
function omni_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'omni' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'omni_wp_title', 10, 2 );


/**
 * Registers one widget area.
 *
 * @since Omni 1.0
 *
 * @return void
 */
function omni_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Widget Area', 'omni' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'These widgets will appear on the blog overview page.', 'omni' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => __( 'Single Page Widget Area', 'omni' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'These widgets will appear on a single page.', 'omni' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'omni_widgets_init' );


// Include TGM Plugin Activation
require_once( get_template_directory() . '/functions/install-plugins.php' );

// Include Custom Post Types
require_once( get_template_directory() . '/functions/register-custom-types.php' );

// Include WordPress Filters
require_once( get_template_directory() . '/functions/omni-filters.php' );

// Include Custom Walker Menu for One Page Navigation
require_once( get_template_directory() . '/functions/onepage-walker.php' );

// Include Omni Paging Navigation
require_once( get_template_directory() . '/functions/pagination.php' );

// Include Omni Comments Template
require_once( get_template_directory() . '/functions/omni-comments.php' );

// Include Shortcodes
require_once( get_template_directory() . '/functions/shortcodes.php' );

// Include Custom JS
require_once( get_template_directory() . '/functions/omni-custom-js.php' );


?>