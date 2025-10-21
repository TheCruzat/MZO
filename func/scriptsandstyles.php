<?php
/**
 * Func > Scripts And Styles
 *
 * @package mzo
 * @since 1.0.0
 */

function mzbw_load_scripts() {
	// dev source for full tailwind
	// wp_enqueue_script('tailwind', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', false, false);

	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', false, '1.0', 'defer');
	wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', false);
	wp_enqueue_style('gfonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap', false);

	wp_enqueue_style('tailwind', get_template_directory_uri() . '/mzo-tw.css', false, '1.0');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, '1.0');
}
add_action( 'wp_enqueue_scripts', 'mzbw_load_scripts' );
