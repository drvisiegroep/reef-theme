<?php
//
// Loop
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//

function reef_loop() {

	if ( have_posts() ) :

		tha_content_while_before();

		// Begin loop
		while ( have_posts() ) : the_post();
			
			tha_entry_before();

			$partial = apply_filters( 'reef_loop_partial', is_singular() ? 'content' : 'archive' );
			$context = apply_filters( 'reef_loop_partial_context', is_search() ? 'search' : get_post_type() );
			get_template_part( 'partials/' . $partial, $context );

			tha_entry_after();

		endwhile;

		tha_content_while_after();

	else :

		tha_entry_before();
		$context = apply_filters( 'reef_empty_loop_partial_context', 'none' );
		get_template_part( 'partials/archive', $context );
		tha_entry_after();

	endif;

}
add_action( 'tha_content_loop', 'reef_loop' );
?>