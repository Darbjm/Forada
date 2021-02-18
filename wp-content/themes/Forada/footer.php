<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forada
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="place-bottom">
			<div class="site-info">
				<div class="footer-first">
					<img class="footer-logo" src='<?php echo get_template_directory_uri(); ?>/images/forada_logo_footer.svg' alt='Forada logo'>
					<p class='small-text'>
						©2020, Forada Limited. All rights reserved.
					<p>
				</div>
				<div class="footer-second">
					<div>
						<a href='<?php echo site_url('/disclaimer'); ?>' class='footer-hyperlink'>Disclaimer</a>
					</div>
					<div>
						<a href='<?php echo site_url('/gdpr'); ?>' class='footer-hyperlink'>Privacy Notice</a>
					</div>
					<div class='last-footer-link'>
						<a href='<?php echo site_url('/terms-and-conditions'); ?>' class='footer-hyperlink'>Terms and Conditions</a>
					</div>
				</div>
			</div><!-- .site-info -->
		</div><!-- .place-bottom -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
