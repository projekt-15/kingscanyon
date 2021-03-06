<?php
/**
 * A Forest Without Trees functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package A_Forest_Without_Trees
 */

if ( ! function_exists( 'a_forest_without_trees_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function a_forest_without_trees_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on A Forest Without Trees, use a find and replace
		 * to change 'a-forest-without-trees' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'a-forest-without-trees', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'a-forest-without-trees' ),
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
		add_theme_support( 'custom-background', apply_filters( 'a_forest_without_trees_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'a_forest_without_trees_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function a_forest_without_trees_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'a_forest_without_trees_content_width', 640 );
}
add_action( 'after_setup_theme', 'a_forest_without_trees_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function a_forest_without_trees_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'a-forest-without-trees' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'a-forest-without-trees' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'a_forest_without_trees_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function a_forest_without_trees_scripts() {
    //bootstrap css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    //custom css
	wp_enqueue_style( 'a-forest-without-trees-style', get_stylesheet_uri() );

	wp_enqueue_script( 'a-forest-without-trees-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'a-forest-without-trees-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    //jquery
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), false, true );
    //bootstrap
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
    //magnify css
    wp_enqueue_style( 'magnify-css', get_template_directory_uri() . '/css/magnify.css' );
    //magnify js
    wp_enqueue_script( 'magnify', get_template_directory_uri() . '/js/jquery.magnify.js', array(), '20151215', true );
    //magnify-mobile js
    //wp_enqueue_script( 'magnify-mobile', get_template_directory_uri() . '/js/jquery.magnify-mobile.js', array(), '20151215', true );
    //magnify intiate
    wp_add_inline_script( 'magnify', '( function($) { $(document).ready(function() {$(".zoom").magnify();}); } )(jQuery);' );
    //greensock
    wp_enqueue_script( 'greensock', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js', array(), false, true );
    //scrollmagic
    wp_enqueue_script( 'scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), false, true );
    //scrollmagic debug
    wp_enqueue_script( 'scrollmagic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array(), false, true );
    //greensock scrollmagic plugin
    wp_enqueue_script( 'greensock-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), false, true );
    //custom js
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/scripts.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'a_forest_without_trees_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
