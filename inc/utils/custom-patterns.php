<?php

register_block_pattern_category(
    'custom',
    [
        'label' => esc_html__( 'Custom Patterns', 'reef-theme' ),
    ]
);



function register_custom_block_patterns() {
        register_block_pattern(
            'custom/my_pattern',
            array(
                'title'         => __( 'Custom - M/T - USP - M/T', 'reef-theme' ),
                'description'   => _x( 'Media/text - USP - Media/text', 'A media and textblock followed by a 3 column USP and another media and text block', 'reef-theme' ),
				'categories'    => array( 'custom' ),
                'keywords'      => array( 'custom', 'usp', 'media' ),
//              'viewportWidth' => 800,
                'content'       => '<!-- wp:media-text {"align":""} -->
<div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
<p class="has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2></h2>
<!-- /wp:heading -->

<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2></h2>
<!-- /wp:heading -->

<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2></h2>
<!-- /wp:heading -->

<!-- wp:image -->
<figure class="wp-block-image"><img alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:media-text {"align":"","mediaPosition":"right"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
<p class="has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->',

            )
        );
}
add_action( 'init', 'register_custom_block_patterns' );


add_action('init', function() {
	register_post_type('boeken', [
		'label' => __('Boeken', 'reef-theme'),
		'public' => true,
		'show_in_rest' => true,
       	'supports' => array('editor','title'),
		'template' => [			
			['core/cover', ['align' => 'full', 'overlayColor' => 'blauw'], [
				['core/heading', ['align' => 'center', 'placeholder' => __('Uw titel', 'reef-theme')]],
				['core/paragraph', ['align' => 'center', 'placeholder' => __('Uw tekst hier', 'reef-theme')]],
				['core/button', ['align' => 'center']]
			]],
		],
		'template_lock' => 'all',
	]);
});
