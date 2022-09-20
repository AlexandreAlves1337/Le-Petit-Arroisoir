<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bravada
 */

?>
		<?php cryout_absolute_bottom_hook(); ?>

		

	</div><!-- #main -->

	<footer id="footer" class="cryout" <?php cryout_schema_microdata( 'footer' );?>>
		<div id="footer-top">
			<div class="footer-inside">
				<?php cryout_master_footer_hook(); ?>
			</div><!-- #footer-inside -->
		</div><!--#footer-top-->
	</footer>
</div><!-- site-wrapper -->
	<?php wp_footer(); ?>
</body>
</html>
