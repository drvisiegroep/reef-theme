<?php
//
// Footer
//
// @package      reef-theme
// @author       Daniël R.
// @since        1.0.0
//
//
// TODO: wp_svg_icon vast pad en dir met benodigde icoontjes
?>


<footer class="site-footer" role="contentinfo">
	<div class="wrap">

	<?php tha_footer_top(); ?>

		<div class="footer-menu">
			<div class="menu-1">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
			<a class="backtotop" href="#main-content"><?php wa_svg_icon(['icon' => 'arrow-up', 'size' => 24]); ?></a>
		</div>

	<?php tha_footer_bottom(); ?>

	</div> <!-- .wrap -->


	<div class="sub-footer">
		<div class="wrap">
			<?php dynamic_sidebar('footer-2'); ?>
		</div>
	</div>
</footer>

<?php

tha_footer_after();
echo '</div>'; // .site-container
tha_body_bottom();

wp_footer();

echo '</body></html>';