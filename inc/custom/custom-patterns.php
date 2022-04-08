<?php
//
// Custom | Patterns
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//

if(!function_exists('reef_register_block_pattern_category')) {
    register_block_pattern_category(
        'custom',
        [
            'label' => esc_html__( 'Custom Patterns', 'reef-theme' ),
        ]
    );
}


if(!function_exists('reef_register_custom_block_patterns')) {
    function reef_register_custom_block_patterns() {

        // include( get_template_directory() . '/inc/custom/custom-patterns/CUSTOMPATTERN.php' );

    }
    add_action( 'init', 'reef_register_custom_block_patterns' );
}



