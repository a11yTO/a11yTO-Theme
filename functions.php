<?php
/**
 * a11yTO-Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package a11yTO-Theme
 */

if ( ! function_exists( 'a11yto_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function a11yto_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on a11yTO-Theme, use a find and replace
	 * to change 'a11yto' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'a11yto', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'a11yto' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'a11yto_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'a11yto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function a11yto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'a11yto_content_width', 640 );
}
add_action( 'after_setup_theme', 'a11yto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function a11yto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'a11yto' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'a11yto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'a11yto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function a11yto_scripts() {
	wp_enqueue_style( 'a11yto-style', get_stylesheet_uri() );

	wp_enqueue_script( 'a11yto-global-js', get_template_directory_uri() . '/js/build/global.min.js', array(), '20160822', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'a11yto_scripts' );

/**
 * Custom read more link text.
 */
function a11yto_modify_read_more_link() {
    return '<p><a class="more-link" href="' . get_permalink() . '">More information about ' . get_the_title() . '.</a></p>';
}
add_filter( 'the_content_more_link', 'a11yto_modify_read_more_link' );

/**
 * Add an 'even' or 'odd' class to `post_class();` of posts as found on
 * http://wpnom.com/chapter/add-even-and-odd-class-to-the-wordpress-post-class/
 */
add_filter ( 'post_class' , 'a11yto_odd_or_even' );
if( !function_exists( 'a11yto_odd_or_even' ) ) {
  global $current_class;
  $current_class = 'odd';
  
  function a11yto_odd_or_even ( $classes ) {
    global $current_class;
    $classes[] = $current_class;
    
    $current_class = ($current_class == 'odd') ? 'even' : 'odd';
    
    return $classes;
  }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
