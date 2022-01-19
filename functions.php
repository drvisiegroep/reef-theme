<?php
// TODO: Checklist WIP
// TODO: Zoekveld vertaling
// TODO: Content width? Hebben we dat nodig?
// TODO: Willen we verschillende layouts?


//
// Includes
//

// Standaard includes
include( get_template_directory() . '/inc/loop.php' );
include( get_template_directory() . '/inc/navigation.php' );
include( get_template_directory() . '/inc/tha-theme-hooks.php' );
include( get_template_directory() . '/inc/cleanup.php' );
include( get_template_directory() . '/inc/cleanup-classes.php' );
include( get_template_directory() . '/inc/acf.php' );
include( get_template_directory() . '/inc/helper-functions.php' );
include( get_template_directory() . '/inc/theme-support.php' );
include( get_template_directory() . '/inc/widgets.php' );


// Utilities
include( get_template_directory() . '/inc/utils/svg-link-shortcode.php' );
include( get_template_directory() . '/inc/utils/custom-post-types.php');
include( get_template_directory() . '/inc/utils/custom-block-whitelist.php');
include( get_template_directory() . '/inc/utils/custom-patterns.php');
include( get_template_directory() . '/inc/utils/custom-editor-options.php');
include( get_template_directory() . '/inc/utils/custom-blocks.php');



//
// Laad hier de styles en scripts.
//

function reef_scripts() {
    
    wp_enqueue_style( 'css-reef-theme-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_template_directory() . '/assets/css/main.css' ) );
    wp_enqueue_style( 'css-reef-theme-colors', get_template_directory_uri() . '/assets/css/colors.css', array(), filemtime( get_template_directory() . '/assets/css/colors.css' ) );
    wp_enqueue_style( 'css-reef-theme-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), filemtime( get_template_directory() . '/assets/css/fonts.css' ) );
    wp_enqueue_script( 'js-reef-theme-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/main.js' ), true );
    
    if( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'reef_scripts' );

add_editor_style( 'assets/css/editor-style.css' );

// Admin bar alleen laten zien als user admin toegang of admin rechten heeft heeft
if(current_user_can('manage_options') == 1) {
    show_admin_bar(true);
} else {
    show_admin_bar(false);
}
