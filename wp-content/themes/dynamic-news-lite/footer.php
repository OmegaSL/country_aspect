<?php do_action( 'dynamicnews_before_footer' ); ?>

	<div id="footer-wrap">

		<footer id="footer" class="container clearfix" role="contentinfo">

			<?php // Check if there is a top navigation menu.
			if ( has_nav_menu( 'footer' ) ) : ?>

				<nav id="footernav" class="clearfix" role="navigation">
					<?php
					
						//Custom Footer Widgets
						
					
						// Get Navigation out of Theme Options
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'container' => false,
							'menu_id' => 'footernav-menu',
							'echo' => true,
							'fallback_cb' => '',
							'depth' => 1,
							)
						);
					?>
				</nav>

			<?php endif; ?>

			<div id="footer-text">
				<?php // do_action( 'dynamicnews_footer_text' ); 
				//get_template_part( 'template-parts/footer/site', 'info' ); 
				echo "Copyright ©2020 Aspect Of Ghana.";?>
			</div>

		</footer>

	</div>

</div><!-- end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
