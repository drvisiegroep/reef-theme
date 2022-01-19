<?php
//
// ACF
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// https://www.advancedcustomfields.com/resources/local-json/
//



//
// Save
//
add_filter('acf/settings/save_json', 'reef_acf_json_save_point');
 
function reef_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/assets/acf-json';
    
    
    // return
    return $path;
    
}



//
// Load
//
add_filter('acf/settings/load_json', 'reef_acf_json_load_point');

function reef_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/assets/acf-json';
    
    
    // return
    return $paths;
    
}

?>
 
