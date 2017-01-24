<?php
/**
 * 3Q Digital functions and definitions
 *
 * @package 3Q Digital
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'three_q_digital_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function three_q_digital_setup() {
    	/**
    	 * Make theme available for translation
    	 * Translations can be filed in the /languages/ directory
    	 * If you're building a theme based on 3Q Digital, use a find and replace
    	 * to change 'three_q_digital' to the name of your theme in all the template files
    	 */
    	load_theme_textdomain( 'three_q_digital', get_template_directory() . '/languages' );
    
    	/**
    	 * Add default posts and comments RSS feed links to head
    	 */
    	add_theme_support( 'automatic-feed-links' );
    
    	// This theme uses post thumbnails
    	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'services', 'staff', 'client', '3q_partners' ) );
    
    	add_image_size( 'large-thumb', 200, 200, true ); //(cropped)
    
    	/**
    	 * Enable support for Post Thumbnails on posts and pages
    	 *
    	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    	 */
    	//add_theme_support( 'post-thumbnails' );
    
    	/**
    	 * This theme uses wp_nav_menu() in one location.
    	 */
    	register_nav_menus( array(
    		'primary' => __( 'Primary Menu', 'three_q_digital' ),
    		'cmo_menu' => __( 'CMO Page Menu', 'three_q_digital' )
    	) );
    
    	/**
    	 * Enable support for Post Formats
    	 */
    	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    
    	/**
    	 * Setup the WordPress core custom background feature.
    	 */
    	add_theme_support( 'custom-background', apply_filters( 'three_q_digital_custom_background_args', array(
    		'default-color' => 'ffffff',
    		'default-image' => '',
    	) ) );
    	
    	if ( is_page() ) {
	        remove_filter('the_content', 'wpautop');
	    }
    }
endif; // three_q_digital_setup
add_action( 'after_setup_theme', 'three_q_digital_setup' );

//******** http://jetpack.me/2013/06/10/moving-sharing-icons/
function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
} 
add_action( 'loop_start', 'jptweak_remove_share' );

//******** https://theeventscalendar.com/knowledgebase/understanding-the-tribe-events-bar/?source=tri.be
add_filter( 'tribe-events-bar-should-show', '__return_false', 9999 );

/********************** SIDEBARS ************************/
function three_q_digital_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'three_q_digital' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'three_q_digital' ),
		'id'            => 'blog-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Services Sidebar', 'three_q_digital' ),
		'id'            => 'services-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

add_action( 'widgets_init', 'three_q_digital_widgets_init' );

/*Page Level Header Scripts */
add_action('wp_head','three_q_page_scripts');
function three_q_page_scripts() {
	global $post;
	$output = get_field ( 'three_q_page_scripts', $post->ID);
	if ( is_singular() && get_field ( 'three_q_page_scripts', $post->ID) ) {
		echo $output;
	}
}

//Page Slug Body Class source: http://www.wpbeginner.com/wp-themes/how-to-add-page-slug-in-body-class-of-your-wordpress-themes/
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function fb_tracking_whitepaper() {
	$output="
	<!-- BEGIN: Random Facebook Script -->
	<script>// <![CDATA[
var fb_param = {};
fb_param.pixel_id = '6008906728738';
fb_param.value = '0.00';
fb_param.currency = 'USD';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
// ]]>
</script>

<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/offsite_event.php?id=6008906728738&amp;value=0&amp;currency=USD'>
</noscript>
<!-- END: Random Facebook Script -->
<!-- BEGIN: Facebook Conversion Code for 3Q Whitepapers Page -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6013207566259', {'value':'0.00','currency':'USD'}]);
</script>
<noscript>
<img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?ev=6013207566259&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1'>
</noscript>
<!-- END: Facebook Conversion Code for 3Q Whitepapers Page -->
	";
	
	if ( is_page( 8337 ) ) {
		echo $output;
	}
}
add_action('wp_head','fb_tracking_whitepaper');


add_action('wp_head','fb_tracking_whitepaper_retail_delemma');

function fb_tracking_whitepaper_retail_delemma() {
	$output="<!-- BEGIN: Facebook Conversion Code for 3Q CMO Retargeting -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6013107303259', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?ev=6013107303259&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1'>
</noscript>
<!-- END: Facebook Conversion Code for 3Q CMO Retargeting -->";
	
	if ( is_page( 15174 ) ) {
		echo $output;
	}
}

/**
 * Enqueue scripts and styles
 */
function three_q_digital_scripts() {
	/* Theme Stylesheet */
	wp_enqueue_style( 'three_q_digital-style', get_stylesheet_uri() );
	
	/* Navigation */
	wp_enqueue_script( 'three_q_digital-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120208', true );

	/* Skip Link Focus Fix */
	wp_enqueue_script( 'three_q_digital-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	/* Scrolling Navigation Animation */		
	if ( is_page( array( 'home', 'what-we-do', 'how-we-think', 'who-we-are', 'our-clients', 'google-marketing-summit' ) ) || get_field( 'transparent_header' ) ) 	{
		wp_enqueue_script( 'three_q_digital-nav-scroll', get_template_directory_uri() . '/js/navigation-scroll.js', array('jquery'), '1.0' );
	}		
	/* Parsley */
	wp_enqueue_script( 'three_q_digital-parsley', get_template_directory_uri() . '/js/parsley.min.js', array( 'jquery' ), '1.0' );
	
	/* GA - Salesforce */
	wp_enqueue_script( 'three_q_digital_ga_salesforce', get_template_directory_uri() . '/js/ga-salesforce.js', array(), '1.0', true );
	
	/*  jQuery Cookie - https://github.com/carhartl/jquery-cookie */
	wp_enqueue_script( 'three_q_digital_jQuery_cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array( 'jquery' ), '1.0' );
	
	/*FancyBox */
	wp_enqueue_script( 'three_q_digital-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array( 'jquery' ), '2.0');
	
	wp_enqueue_style( 'three_q_digital-fancybox-style', get_template_directory_uri() . '/css/jquery.fancybox.css' );

	/* Font Awesome Icon Font */
	wp_enqueue_style('three_q_digital_font_awesome', '//opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css', array(), null, true);
	
	wp_enqueue_script( 'three_q_digital-modernizer', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '1.0' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'three_q_digital-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	
	/* General JS Functions */
	wp_enqueue_script( 'three_q_digital_js', get_template_directory_uri() . '/js/three-q-digital.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'three_q_digital_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function three_q_digital_fast_100_banner() { 
	return '<div class="fast-100-banner hide-on-mobile">
		<div class="wrap">
			<div class="grid-25 grid-parent hide-on-mobile">
				<hr/>
			</div>
			<div class="grid-50 content mobile-grid-parent">
				<h3>2014 FAST 100 AWARD</h3> 
				<img src="http://3qdigital.dev/wp-content/themes/three-q-digital/images/fast-100-biz-times-logo.png" alt="Fast 100 Business Times Award">
				<a target="_blank" href="http://www.bizjournals.com/sanfrancisco/gallery/106641?s=image_gallery&img_no=57">Learn More</a>
			</div>
			<div class="grid-25 grid-parent hide-on-mobile">
				<hr/>
			</div>
		</div>
	</div>';
 }

add_shortcode('fast-100-banner', 'three_q_digital_fast_100_banner'); 

function three_q_digital_sharing_buttons() {
	return '<div class="google-share"><div class="g-plus" data-action="share" data-align="right" data-annotation="bubble"></div></div>
		
	<!-- Linked In Share -->
	<script src="//platform.linkedin.com/in.js" type="text/javascript">
	lang: en_US
	</script>
	
	<script type="IN/Share" data-counter="right" data-url="'.get_permalink($post->ID).'"></script>
	
	<!-- Facebook Share Button -->
	<div class="fb-like" data-layout="button_count" data-href="'.get_permalink($post->ID).'" data-send="false" data-width="100" data-show-faces="false"></div>
	
	<!-- Twitter Share Button -->
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.get_permalink($post->ID).'" data-text="'.get_the_title($post->ID).'">Tweet</a>
	
	<script>!function(d,s,id){
					var js,fjs=d.getElementsByTagName(s)[0],
					p=/^http:/.test(d.location)?"http":"https";
					if(!d.getElementById(id)){
						js=d.createElement(s);
						js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
						fjs.parentNode.insertBefore(js,fjs);
					}
				}
				(document, "script", "twitter-wjs");
			</script>';
}

add_shortcode('sharing-buttons', 'three_q_digital_sharing_buttons');

// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

/*
// Then, remove each CSS file, one at a time
function jeherve_remove_all_jp_css() {
  wp_deregister_style( 'AtD_style' ); // After the Deadline
  wp_deregister_style( 'jetpack_likes' ); // Likes
  wp_deregister_style( 'jetpack_related-posts' ); //Related Posts
  wp_deregister_style( 'jetpack-carousel' ); // Carousel
  wp_deregister_style( 'grunion.css' ); // Grunion contact form
  wp_deregister_style( 'the-neverending-homepage' ); // Infinite Scroll
  wp_deregister_style( 'infinity-twentyten' ); // Infinite Scroll - Twentyten Theme
  wp_deregister_style( 'infinity-twentyeleven' ); // Infinite Scroll - Twentyeleven Theme
  wp_deregister_style( 'infinity-twentytwelve' ); // Infinite Scroll - Twentytwelve Theme
  wp_deregister_style( 'noticons' ); // Notes
  wp_deregister_style( 'post-by-email' ); // Post by Email
  wp_deregister_style( 'publicize' ); // Publicize
  wp_deregister_style( 'sharedaddy' ); // Sharedaddy
  wp_deregister_style( 'sharing' ); // Sharedaddy Sharing
  wp_deregister_style( 'stats_reports_css' ); // Stats
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
  wp_deregister_style( 'jetpack-slideshow' ); // Slideshows
  wp_deregister_style( 'presentations' ); // Presentation shortcode
  wp_deregister_style( 'jetpack-subscriptions' ); // Subscriptions
  wp_deregister_style( 'tiled-gallery' ); // Tiled Galleries
  wp_deregister_style( 'widget-conditions' ); // Widget Visibility
  wp_deregister_style( 'jetpack_display_posts_widget' ); // Display Posts Widget
  wp_deregister_style( 'gravatar-profile-widget' ); // Gravatar Widget
  wp_deregister_style( 'widget-grid-and-list' ); // Top Posts widget
  wp_deregister_style( 'jetpack-widgets' ); // Widgets
}
add_action('wp_print_styles', 'jeherve_remove_all_jp_css' );
*/