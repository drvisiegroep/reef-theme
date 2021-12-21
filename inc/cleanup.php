<?php
//
// Cleanup
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// TODO: Uitleg + links remove_actions en json api
// https://gist.github.com/Auke1810/f2a4cf04f2c07c74a393a4b442f22267



//
// Shrink admin bar / expand on hover
// https://css-tricks.com/snippets/wordpress/shrink-the-admin-bar-expand-on-hover/
//
add_action('get_header', 'my_filter_head');
function my_filter_head() { 
    remove_action('wp_head', '_admin_bar_bump_cb'); 
}



//
// Minimize admin bar and show on hover
//
function reef_admin_css() {
        if ( is_user_logged_in() ) {
        ?>
        <style type="text/css">
            #wpadminbar {
                width: 35px;
                min-width: auto;
                overflow: hidden;
                -webkit-transition: .2s width;
                -webkit-transition-delay: 0s;
                -moz-transition: .2s width;
                -moz-transition-delay: 0s;
                -o-transition: .2s width;
                -o-transition-delay: 0s;
                -ms-transition: .2s width;
                -ms-transition-delay: 0s;
                transition: .2s width;
                transition-delay: 0s;
            }
            
            #wpadminbar:hover {
                width: 100%;
                overflow: visible;
                -webkit-transition-delay: 0;
                -moz-transition-delay: 0;
                -o-transition-delay: 0;
                -ms-transition-delay: 0;
                transition-delay: 0;
            }
        </style>
        <?php }
}
add_action('wp_head', 'reef_admin_css');



//
// Clean up the head tags
//
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);



//
// Remove JSON API links in header html
//
function remove_json_api () {

    // Remove the REST API lines from the HTML Header
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

    // Remove the REST API endpoint.
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );

    // Turn off oEmbed auto discovery.
    add_filter( 'embed_oembed_discover', '__return_false' );

    // Don't filter oEmbed results.
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

    // Remove oEmbed discovery links.
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );

   // Remove all embeds rewrite rules.
   add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

}
add_action( 'after_setup_theme', 'remove_json_api' );



//
//	Snippet completely disable the REST API and shows {"code":"rest_disabled","message":"The REST API is disabled on this site."} 
//	when visiting http://yoursite.com/wp-json/
//
function disable_json_api () {

  // Filters for WP-API version 1.x
  add_filter('json_enabled', '__return_false');
  add_filter('json_jsonp_enabled', '__return_false');

  // Filters for WP-API version 2.x
  add_filter('rest_enabled', '__return_false');
  add_filter('rest_jsonp_enabled', '__return_false');

}
add_action( 'after_setup_theme', 'disable_json_api' );




?>


