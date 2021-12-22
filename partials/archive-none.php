<?php
//
// Partial | Geen resultaten
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
// TODO: Vertalingen


echo '<section class="no-results not-found">';

	echo '<header class="entry-header"><h1 class="entry-title">' . esc_html__( 'Nothing Found', 'reef-theme' ) . '</h1></header>';
	echo '<div class="entry-content">';

	if ( is_search() ) {

		echo '<p>' . esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'reef-theme' ) . '</p>';
		get_search_form();

	} else {

		echo '<p>' . esc_html__( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'reef-theme' ) . '</p>';
		get_search_form();
	}

	echo '</div> <!-- /.entry-content -->';
echo '</section>';
