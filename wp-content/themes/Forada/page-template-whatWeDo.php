<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: What we do template
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">
		<div class="what-we-do-main">
			<div class='what-we-do-left'>
					<h4 class='small-title'><?php the_field('title'); ?></h4>
				<div class='margin-bottom-20px'>
					<h2 class='small-h2'><?php the_field('small_title'); ?></h2>
				</div>
				<div class='what-we-do-copy'>
					<p class='body-copy'><?php the_field('paragraph_1'); ?></p>
				</div>
				<div class='what-we-do-copy'>
					<p class='body-copy'><?php the_field('paragraph_2'); ?></p>
				</div>
				<div>
					<p class='body-copy-bold'><?php the_field('paragraph_3'); ?></p>
				</div>
			</div>
			<div class='what-we-do-right'>
				<div class='card'>
				<?php 
				$image = get_field('first_card_image');
				if( !empty( $image ) ): ?>
					<img class='card-icons' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
					<p class='body-copy no-margin card-text'><span class='body-copy-bold twelve-text'><?php the_field('bold_card_text_1'); ?></span> <?php the_field('card_text_1'); ?></p>
				</div>
				<div class='card'>
				<?php 
				$image = get_field('second_card_image');
				if( !empty( $image ) ): ?>
					<img class='card-icons' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
					<p class='body-body no-margin card-text'><span class='body-copy-bold twelve-text'><?php the_field('bold_card_text_2'); ?></span> <?php the_field('card_text_2'); ?></p>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>