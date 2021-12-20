<?php

//
// Header
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//

echo '<!DOCTYPE html>';
tha_html_before();
echo '<html ' . get_language_attributes() . '>';

echo '<head>';
	tha_head_top(); 
	wp_head();
	tha_head_bottom();
echo '</head>';

echo '<body class="' . join( ' ', get_body_class() ) . '">';
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}

tha_body_top();

	tha_header_before();
	?>

    <header class="site-header" role="banner">
    	<div class="wrap">

	<?php
	tha_header_top();
	?>

    		<div class="title-area">
    			<?php echo '<p class="site-title"><a href="' . esc_url( home_url() ) . '" rel="home">' . get_bloginfo( 'name' )  . do_shortcode('[wa_svg_icon icon=capybara]') . '</a></p >'; ?>
    		</div> <!-- /.title-area -->

	<?php
	tha_header_bottom();
	?>

    	</div> <!-- /.wrap -->
    </header>

	<?php
	tha_header_after();
	?>


	<?php 
		// $bgurl = get_the_post_thumbnail_url();
		// if(empty($bgurl)){ $bgurl = get_field('ea_default_image', 'option'); }
		// if(empty($bgurl)){ $bgurl = get_the_post_thumbnail_url(get_option( 'page_on_front' )); }
		// echo '<div class="banner" style="background-image: url('. $bgurl .')"></div>';
	?>

	<div class="site-container">
	<div id="main-content"></div> <!-- div voor back-to-top in footer -->
