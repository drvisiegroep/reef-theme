<?php
//
// Functions
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
// 

// Global site options
if( !function_exists('site_settings') ) {
    function site_settings() {
        global $logo_text;
        $logo_text = false;
    }
}
add_action( 'after_setup_theme', 'site_settings');


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

//SVG
include( get_template_directory() . '/inc/custom/svg-link-shortcode.php');

// Custom
include( get_template_directory() . '/inc/custom/custom-acf-blocks.php');
include( get_template_directory() . '/inc/custom/custom-block-whitelist.php');
include( get_template_directory() . '/inc/custom/custom-editor-options.php');
include( get_template_directory() . '/inc/custom/custom-enqueue.php');
include( get_template_directory() . '/inc/custom/custom-login.php');
include( get_template_directory() . '/inc/custom/custom-patterns.php');
include( get_template_directory() . '/inc/custom/custom-post-types.php');
include( get_template_directory() . '/inc/custom/custom-shortcodes.php');


// Voeg reusable blocks toe aan admin menu
function reef_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
// add_action( 'admin_menu', 'reef_reusable_blocks_admin_menu' );

// Admin bar alleen laten zien als user admin toegang of admin rechten heeft heeft
if(current_user_can('manage_options') == 1) {
    show_admin_bar(true);
} else {
    show_admin_bar(false);
}


