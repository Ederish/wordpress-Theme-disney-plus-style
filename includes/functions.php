<?php
function load_styles() {
    $ruta_estilos = get_template_directory_uri() . 'css'; // Ajusta la ruta de la carpeta de estilos según la estructura de tu tema.

    wp_enqueue_style('brand-page', $ruta_estilos . '/BrandPage.css');
    wp_enqueue_style('collections', $ruta_estilos . '/Collections.css');
    wp_enqueue_style('collections-cards', $ruta_estilos . '/CollectionsCards.css');
    wp_enqueue_style('detail-page', $ruta_estilos . '/DetailPage.css');
    wp_enqueue_style('footer', $ruta_estilos . '/Footer.css');

    wp_enqueue_style('header', $ruta_estilos . '/Header.css');
    wp_enqueue_style('home', $ruta_estilos . '/Home.css');
    wp_enqueue_style('image-slider', $ruta_estilos . '/ImageSlider.css');
    wp_enqueue_style('logo', $ruta_estilos . '/Logo.css');

    wp_enqueue_style('movie-card', $ruta_estilos . '/MovieCard.css');
    wp_enqueue_style('navbar', $ruta_estilos . '/Navbar.css');
    wp_enqueue_style('search-page', $ruta_estilos . '/SearchPage.css');
    wp_enqueue_style('single-row', $ruta_estilos . '/SingleRow.css');
    wp_enqueue_style('user-selector', $ruta_estilos . '/UserSelector.css');
}

add_action('wp_enqueue_scripts', 'load_styles');
?>
