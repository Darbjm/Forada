<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: GDPR template
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
			<p class='disclaimer-text'><?php the_field('body_2_start'); ?></p>
			<ul>
				<?php 
				$list1 = get_field('body_2_list_1');
				if( !empty( $list1 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_2_list_1'); ?></li>
				<?php endif; ?>
				<?php 
				$list2 = get_field('body_2_list_2');
				if( !empty( $list2 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_2_list_2'); ?></li>
				<?php endif; ?>
				<?php 
				$list3 = get_field('body_2_list_3');
				if( !empty( $list3 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_2_list_3'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_2_list_4');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_2_list_4'); ?></li>
				<?php endif; ?>
			</ul>
			<p class='disclaimer-text'><?php the_field('body_2_end'); ?></p>
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
			<ul>
				<?php 
				$list1 = get_field('body_6_list_1');
				if( !empty( $list1 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_1'); ?></li>
				<?php endif; ?>
				<?php 
				$list2 = get_field('body_6_list_2');
				if( !empty( $list2 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_2'); ?></li>
				<?php endif; ?>
				<?php 
				$list3 = get_field('body_6_list_3');
				if( !empty( $list3 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_3'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_6_list_4');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_4'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_6_list_5');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_5'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_6_list_6');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_6'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_6_list_7');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_7'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_6_list_8');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_8'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_6_list_9');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_6_list_9'); ?></li>
				<?php endif; ?>
			</ul>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_7'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_7'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_8'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_8'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_9'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_9'); ?></p>
			<ul>
				<?php 
				$list1 = get_field('body_9_list_1');
				if( !empty( $list1 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_1'); ?></li>
				<?php endif; ?>
				<?php 
				$list2 = get_field('body_9_list_2');
				if( !empty( $list2 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_2'); ?></li>
				<?php endif; ?>
				<?php 
				$list3 = get_field('body_9_list_3');
				if( !empty( $list3 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_3'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_9_list_4');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_4'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_9_list_5');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_5'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_9_list_6');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_6'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_9_list_7');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_7'); ?></li>
				<?php endif; ?>
				<?php 
				$list4 = get_field('body_9_list_8');
				if( !empty( $list4 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_9_list_8'); ?></li>
				<?php endif; ?>
			</ul>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_10'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_10'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_11'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_11'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_12'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_12'); ?></p>
			</br>
			<p class='disclaimer-text-bold'><?php the_field('bold_body_13'); ?></p>
			<p class='disclaimer-text'><?php the_field('body_13_start'); ?></p>
			<ul>
				<?php 
				$list1 = get_field('body_13_list_1');
				if( !empty( $list1 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_13_list_1'); ?></li>
				<?php endif; ?>
				<?php 
				$list2 = get_field('body_13_list_2');
				if( !empty( $list2 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_13_list_2'); ?></li>
				<?php endif; ?>
				<?php 
				$list3 = get_field('body_13_list_3');
				if( !empty( $list3 ) ): ?>
					<li class='disclaimer-text'><?php the_field('body_13_list_3'); ?></li>
				<?php endif; ?>
			</ul>
			<p class='disclaimer-text'><?php the_field('body_13_end'); ?></p>
			</br>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>