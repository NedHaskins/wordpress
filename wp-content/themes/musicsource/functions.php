<?php


function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar' , '__return_false' );


//load all CSS styles for all modules / pages

// wp_enqueue_style( 'style' , get_stylesheet_uri() );







//load CSS into the website's frontend ONLY - not the admin panel
function mytheme_enqueue_style() {
	wp_enqueue_style( 'mytheme-style' , get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts' , 'mytheme_enqueue_style' );




//Enable customized navigation menus!
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



//For future use.
// add_theme_support( 'html5', array( 'navigation-widgets' ) );



