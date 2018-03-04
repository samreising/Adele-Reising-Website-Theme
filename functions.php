<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_post_type_support( 'page', 'excerpt' );

/**
 * Enqueue Fonts
 */
function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Didact+Gothic', false ); 
	}

	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

/**
 * Enqueue Custom JS
 */
function theme_js() {
    wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

?>