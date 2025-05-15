<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style('blocksy-child-style', get_stylesheet_uri());
});

function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_stylesheet_directory_uri() . '/src/output.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


