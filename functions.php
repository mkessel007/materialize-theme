<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'CG Materialize' );
define( 'CHILD_THEME_URL', 'http://www.clickgiant.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

require_once( '/includes/genesis-functions.php')

//* Enqueue Styles and Scripts
add_action( 'wp_enqueue_scripts', 'cg_materialize_global_scripts' );
function cg_materialize_global_scripts() {

	//* Add Google Fonts
	wp_register_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'google-fonts' );

	//* Add compiled JS
	wp_enqueue_script( 'cg-theme-scripts', get_stylesheet_directory_uri() . '/js/main' . $minnified . '.js', array( 'jquery' ), CHILD_THEME_VERSION, true );

}

