<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: Disclaimer template
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">
		<div class="disclaimer-small">
			<h4 class='small-title'><?php the_field('title'); ?></h4>
			<p class='disclaimer-text'><?php the_field('body'); ?></p>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>