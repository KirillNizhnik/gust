<?php
/**
 * gust functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gust
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gust_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on gust, use a find and replace
		* to change 'gust' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gust', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'gust' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'gust_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'gust_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gust_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gust_content_width', 640 );
}
add_action( 'after_setup_theme', 'gust_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gust_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gust' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gust' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gust_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gust_scripts() {
    wp_enqueue_style( 'font-1', 'https://fonts.googleapis.com/css2?family=Tektur:wght@400;500;600;700;800;900&display=swap' );
    wp_enqueue_style( 'font-2', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap' );
    wp_enqueue_style( 'font-3', 'https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap' );
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css' );
    wp_enqueue_style( 'style1', get_template_directory_uri() .'/assets/css/style.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() .'/assets/css/main.min.css' );;
//    wp_enqueue_style('style-swiper',  'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');

    wp_enqueue_script('swiper-script',  'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('libs', get_template_directory_uri() .'/assets/js/libs.min.js', array(), null, true);
    wp_enqueue_script('spec-programs', get_template_directory_uri() .'/assets/js/spec-programs.js', array(), null, true);
    wp_enqueue_script('programs', get_template_directory_uri() .'/assets/js/programs.js', array(), null, true);
    wp_enqueue_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js', array(), null, true);
    //    wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array(), null, true);
    wp_enqueue_script( 'modal', get_template_directory_uri() .'/assets/js/modal.js', array(), null, true);
    wp_enqueue_script( 'reviews', get_template_directory_uri() .'/assets/js/reviews.js', array(), null, true);
    wp_enqueue_script('bg-slider', get_template_directory_uri() .'/assets/js/bg-slider.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'gust_scripts' );

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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Загальні',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Ukraine',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'English',
        'parent_slug'   => 'theme-general-settings',
    ));

}

