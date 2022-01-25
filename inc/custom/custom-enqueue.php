<?php
//
// Custom | Fonts
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//

function reef_scripts() {
    
    wp_enqueue_style( 'css-reef-theme-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_template_directory() . '/assets/css/main.css' ) );
    wp_enqueue_script( 'js-reef-theme-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/main.js' ), true );
    wp_enqueue_style( 'css-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap', array(), null );
	
    if( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'reef_scripts' );

/* Editor styles */
// function reef_editor_styles () {
    add_editor_style( 'assets/css/main.css' );
    add_editor_style( 'https://fonts.googleapis.com/css?family=Roboto:wght@300;400;700&display=swap' );
// }
// add_action( 'after_setup_theme', 'reef_editor_styles');