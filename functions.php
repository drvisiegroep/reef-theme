<?php
// Checklist WIP
// Zoekveld vertaling


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

// Utilities
include( get_template_directory() . '/inc/utils/svg-link-shortcode.php' );
include( get_template_directory() . '/inc/utils/custom-post-types.php');
include( get_template_directory() . '/inc/utils/block-whitelist.php');



//
// Laad hier de styles en scripts.
//

function reef_scripts() {
    
    wp_enqueue_style( 'css-reef-theme', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_template_directory() . '/assets/css/main.css' ) );
    wp_enqueue_script( 'js-reef-theme', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/main.js' ), true );

    if( ! is_admin() ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'reef_scripts' );



//
// Registreer en laad hier je Wordpress functionaliteit
// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
//

if ( ! function_exists( 'reef_setup' ) ) :

    //
    // Deze functie wordt 'gehooked' in in de after_setup_theme hook. Deze gaat voor de init hook. 
    // Dit omdat de init hook voor bvepaalde eigenschappen (post-thumbnails bijvoorbeeld) te laat komt.
    // https://wordpress.stackexchange.com/questions/14797/difference-between-after-setup-theme-and-init-action-hooks
    // https://codex.wordpress.org/Plugin_API/Action_Reference
    //

    function reef_setup() {
        
        // Pad voor vertalingen
        load_theme_textdomain( 'reef-theme', get_template_directory() . '/languages' );
    
        // Editor Styles
        add_theme_support( 'editor-styles' );
        add_editor_style( 'assets/css/editor-style.css' );
    
        // Admin Bar Styling
        add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
    
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
    
        // Body open hook
        add_theme_support( 'body-open' );
    
        // Wordpress verzorgt de title tags i.p.v dat we ze er zelf inzetten.
        add_theme_support( 'title-tag' );
    
        //
        // Mogelijkheid voor plaatjes bij posts en pages
        // https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        //
        add_theme_support( 'post-thumbnails' );
    
        //
        // Menu's registreren
        //
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Navigation Menu', 'reef-theme' ),
            'secondary' => esc_html__( 'Secondary Navigation Menu', 'reef-theme' ),
        ) );
    
        //
        // HTML 5 support voor search, comments, gallerij en captions
        //
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    
        // Responsive embeds
        add_theme_support( 'responsive-embeds' );
    
        // Wide Images
        add_theme_support( 'align-wide' );
    
    }
    endif;
    add_action( 'after_setup_theme', 'reef_setup' );


if(current_user_can('manage_options') == 1) {
    show_admin_bar(true);
} else {
    show_admin_bar(false);
}

?>