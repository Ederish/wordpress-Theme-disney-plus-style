<?php
add_action('wp_enqueue_scripts', 'insert_css');

function insert_css()
{
	//########## Import all the stylesheets here like the example below ##########
	wp_register_style('amethyst', get_bloginfo('template_url') . '/assets/css/amethyst.min.css');
	wp_enqueue_style('amethyst');

	wp_register_style('fontawesome-css', get_bloginfo('template_url') . '/assets/css/fontawesome.min.css');
	wp_enqueue_style('fontawesome-css');

	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
	wp_enqueue_style('fonts');

	// Import the WordPress stylesheet (style.css)
	wp_enqueue_style('style', get_stylesheet_uri());

	//########## Import all the javascript scripts here like the example below ##########
	wp_register_script('fontawesome-js', get_bloginfo('template_url') . '/assets/js/fontawesome.min.js');
	wp_enqueue_script('fontawesome-js');

	wp_register_script('jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery2');

	wp_register_style('BrandPage', get_template_directory_uri() . '/assets/css/BrandPage.css');
	wp_register_style('Collections', get_template_directory_uri() . '/assets/css/Collections.css');
	wp_register_style('CollectionsCards', get_template_directory_uri() . '/assets/css/CollectionsCards.css');
	wp_register_style('DetailPage', get_template_directory_uri() . '/assets/css/DetailPage.css');
	wp_register_style('Footer', get_template_directory_uri() . '/assets/css/Footer.css');
	wp_register_style('Header', get_template_directory_uri() . '/assets/css/Header.css');
	wp_register_style('Home', get_template_directory_uri() . '/assets/css/Home.css');
	wp_register_style('ImageSlider', get_template_directory_uri() . '/assets/css/ImageSlider.css');
	wp_register_style('Logo', get_template_directory_uri() . '/assets/css/Logo.css');
	wp_register_style('MovieCard', get_template_directory_uri() . '/assets/css/MovieCard.css');
	wp_register_style('Navbar', get_template_directory_uri() . '/assets/css/Navbar.css');
	wp_register_style('SearchPage', get_template_directory_uri() . '/assets/css/SearchPage.css');
	wp_register_style('SingleRow', get_template_directory_uri() . '/assets/css/SingleRow.css');
	
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
	wp_enqueue_style('UserSelector');
}