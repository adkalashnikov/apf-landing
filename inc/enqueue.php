<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		
		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

        if(is_page_template('page-templates/home.php')) {
            wp_enqueue_style( 'home-page-styles', get_template_directory_uri().'/css/home-page.min.css');
        }

        if(is_page_template('page-templates/petroleum-products.php')) {
            wp_enqueue_style( 'petroleum-swiper-styles', get_template_directory_uri().'/css/swiper.min.css');
            wp_enqueue_style( 'petroleum-page-styles', get_template_directory_uri().'/css/petroleum-page.min.css');
            wp_enqueue_script( 'petroleum-swiper-script', get_template_directory_uri().'/js/swiper.min.js');
        }

		wp_enqueue_script( 'jquery');
		
		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

function add_google_fonts() {

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,900&amp;subset=cyrillic-ext', false );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );