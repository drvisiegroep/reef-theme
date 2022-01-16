<?php
add_action('init', function() {
    	wp_register_script('awp-myfirstblock-js', get_template_directory_uri() . '/assets/js/block-awhitepixel-myfirstblock.js');
     
    	register_block_type('awp/firstblock', [
    		'editor_script' => 'awp-myfirstblock-js',
    	]);
    });
    ?>