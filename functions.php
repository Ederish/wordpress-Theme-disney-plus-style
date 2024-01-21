<?php
/**
 * ComercePlus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ComercePlus
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
function cemerceplus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ComercePlus, use a find and replace
		* to change 'cemerceplus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cemerceplus', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'cemerceplus' ),
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
			'cemerceplus_custom_background_args',
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
add_action( 'after_setup_theme', 'cemerceplus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cemerceplus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cemerceplus_content_width', 640 );
}
add_action( 'after_setup_theme', 'cemerceplus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cemerceplus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cemerceplus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cemerceplus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
function custom_rewrite_rule() {
    add_rewrite_rule('^mi-ruta/([^/]+)/?', 'index.php?custom_param=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule');

function custom_query_vars($query_vars) {
    $query_vars[] = 'custom_param';
    return $query_vars;
}
add_filter('query_vars', 'custom_query_vars');


add_action( 'widgets_init', 'cemerceplus_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function cemerceplus_scripts() {
	//########## Import all the stylesheets here like the example below ##########
	wp_register_style('fontawesome-css', get_bloginfo('template_url') . '/css/fontawesome.min.css');
	wp_enqueue_style('fontawesome-css');
	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
	wp_enqueue_style('fonts');
	// Import the WordPress stylesheet (style.css)
	wp_enqueue_style('style', get_stylesheet_uri());
	//########## Import all the javascript scripts here like the example below ##########
	wp_register_script('fontawesome-js', get_bloginfo('template_url') . '/js/fontawesome.min.js');
	wp_enqueue_script('fontawesome-js');

	wp_register_style('BrandPage', get_stylesheet_directory_uri() . '/css/BrandPage.css');
	wp_register_style('Collections', get_stylesheet_directory_uri() . '/css/Collections.css');
	wp_register_style('CollectionsCards', get_stylesheet_directory_uri() . '/css/CollectionsCards.css');
	wp_register_style('DetailPage', get_stylesheet_directory_uri() . '/css/DetailPage.css');
	wp_register_style('Footer', get_stylesheet_directory_uri() . '/css/Footer.css');
	wp_register_style('Header', get_stylesheet_directory_uri() . '/css/Header.css');
	wp_register_style('Home', get_stylesheet_directory_uri() . '/css/Home.css');
	wp_register_style('ImageSlider', get_stylesheet_directory_uri() . '/css/ImageSlider.css');
	wp_register_style('Logo', get_stylesheet_directory_uri() . '/css/Logo.css');
	wp_register_style('MovieCard', get_stylesheet_directory_uri() . '/css/MovieCard.css');
	wp_register_style('Navbar', get_stylesheet_directory_uri() . '/css/Navbar.css');
	wp_register_style('SearchPage', get_stylesheet_directory_uri() . '/css/SearchPage.css');
	wp_register_style('SingleRow', get_stylesheet_directory_uri() . '/css/SingleRow.css');
	
	wp_enqueue_style('BrandPage');
	wp_enqueue_style('Collections');
	wp_enqueue_style('CollectionsCards');
	wp_enqueue_style('DetailPage');
	wp_enqueue_style('Footer');
	wp_enqueue_style('Header');
	wp_enqueue_style('Home');
	wp_enqueue_style('ImageSlider');
	wp_enqueue_style('Logo');
	wp_enqueue_style('MovieCard');
	wp_enqueue_style('Navbar');
	wp_enqueue_style('SearchPage');
	wp_enqueue_style('SingleRow');
	wp_enqueue_style( 'cemerceplus-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cemerceplus-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cemerceplus-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cemerceplus-jQuery', get_stylesheet_directory_uri() . 'https://code.jquery.com/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cemerceplus-slick', get_stylesheet_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cemerceplus-slider', get_stylesheet_directory_uri() . '/js/slider.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'cemerceplus_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}