<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: Terms and Conditions template
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">
		<div class="disclaimer-large">
			<h4 class='small-title'><?php the_field('title'); ?></h4>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_1'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_1'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_2'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_2'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_3'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_3'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_4'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_4'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_5'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_5'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_6'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_6'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_7'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_7'); ?></p>
			<ol>
				<?php 
				$list1 = get_field('list_1');
				if( !empty( $list1 ) ): ?>
					<li class='disclaimer-text'><?php the_field('list_1'); ?></li>
				<?php endif; ?>
				<?php 
				$list2 = get_field('list_2');
				if( !empty( $list2 ) ): ?>
					<li class='disclaimer-text'><?php the_field('list_2'); ?></li>
				<?php endif; ?>
				<?php 
				$list3 = get_field('list_3');
				if( !empty( $list3 ) ): ?>
					<li class='disclaimer-text'><?php the_field('list_3'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('list_4');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('list_4'); ?></li>
				<?php endif; ?>
				<?php 
				$list5 = get_field('list_5');
				if( !empty( $list5 ) ): ?>
					<li class='disclaimer-text'><?php the_field('list_5'); ?></li>
				<?php endif; ?>
			</ol>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>