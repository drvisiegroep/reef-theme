<?php
//
// Custom | Block Whitelist 
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0

// TODO: lijst met alle blocks om uit te kiezen of url toevoegen

// example settings

// return array(
//     'core/image',
//     'core/paragraph',
//     'core/heading',
//     'core/list',
//     'core/media-text',
//     'core/quote',
//     'core/group',
//     'core/button',
//     'acf/hero',
//     'acf/utility',
//     'acf/testimonials'
// );


//
// Gütenberg block whitelist
// Voeg hier de blokken toe die je wil gaan gebruiken
//

add_filter( 'allowed_block_types_all', 'our_allowed_block_types' );
 
function our_allowed_block_types( $allowed_blocks ) {
 
	return array(
		// Reusable blocks
		'core/block',
        // Tekst
		'core/heading',
		'core/paragraph',
		'core/quote',
		'core/list',
        // Media
		'core/image',
		'core/media-text',
        'core/gallery',
        // Ontwerp
		'core/buttons',
		'core/group',
        'core/columns',
        // Widgets
        'core/shortcode',
		//Embeds
		'core-embed/youtube',
		'core-embed/vimeo',

	);
 
}