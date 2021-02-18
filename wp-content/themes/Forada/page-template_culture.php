<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: Culture template
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">
		<div class="culture">
			<h4 class='small-title'><?php the_field('title'); ?></h4>
			<div>
				<div class='margin-bottom-20px'>
					<h2><?php the_field('sub_title'); ?></h2>
				</div>
				<p class='body-copy'><?php the_field('body'); ?></p>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>