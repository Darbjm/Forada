<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: Contact
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">
		<div class="contact-main">
			<div class='contact-left'>
				<h4 class='small-title'>CONTACT</h4>
				<div class='contact-address'>
					<p class='body-copy-bold'>Forada Limited</p>
					<p class='body-copy'>20 North Audley Street, London W1K 6LX</p>
				</div>
				<div class='margin-bottom-20px'>
					<p class='disclaimer-text'>For <span class='disclaimer-text-bold'>employment</span> opportunities, please contact us at <a href="mailto:info@forada.com" class='text-hyperlink'>info@forada.com</a>.</p>
				</div>
				<p class='disclaimer-text'>For <span class='disclaimer-text-bold'>investor-related</span> queries, please contact us at <a href="mailto:ir@forada.com" class='text-hyperlink'>ir@forada.com</a>.</p>		
			</div>
			<div class='contact-right'>
				<iframe class='map' src="https://snazzymaps.com/embed/287667" width="100%" height="600px" style="border:none;"></iframe>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>