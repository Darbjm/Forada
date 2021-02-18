<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: Contact template
 */

get_header();
get_sidebar();
?>

	<main id='primary' class='site-main'>
		<div class='contact-main'>
			<div class='contact-left'>
				<h4 class='small-title'><?php the_field('title'); ?></h4>
				<div class='contact-address'>
					<p class='body-copy-bold'><?php the_field('company_name'); ?></p>
					<p class='body-copy'><?php the_field('address'); ?></p>
				</div>
				<div class='margin-bottom-20px'>
					<p class='disclaimer-text'>
						<?php the_field('paragraph_1_line_1'); ?>
						<span class='disclaimer-text-bold'>
							<?php the_field('paragraph_1_bold'); ?>
						</span> 
						<?php the_field('paragraph_1_line_2'); ?>
						<?php 
						$link = get_field('info_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
							<a class='text-hyperlink' href='<?php echo esc_url( $link_url ); ?>' target='<?php echo esc_attr( $link_target ); ?>'>
								<?php echo esc_html( $link_title ); ?></a><?php the_field('paragraph_1_full_stop'); ?>
						<?php endif; ?>
					</p>
				</div>
				<p class='disclaimer-text'>
					<?php the_field('paragraph_2_line_1'); ?>
					<span class='disclaimer-text-bold'>
						<?php the_field('paragraph_2_bold'); ?>
					</span> <?php the_field('paragraph_2_line_2'); ?>
					<?php 
						$investor_link = get_field('investor_link');
						if( $investor_link ): 
						    $investor_link_url = $investor_link['url'];
						    $investor_link_title = $investor_link['title'];
						    $investor_link_target = $investor_link['target'] ? $investor_link['target'] : '_self';
						    ?>
							<a class='text-hyperlink' href='<?php echo esc_url( $investor_link_url ); ?>' target='<?php echo esc_attr( $investor_link_target ); ?>'>
								<?php echo esc_html( $investor_link_title ); ?></a><?php the_field('paragraph_2_full_stop'); ?>
						<?php endif; ?>
				</p>		
			</div>
			<div class='contact-right'>
				<iframe class='map' src='https://snazzymaps.com/embed/279089' width='100%' height='600px' style='border:none;'></iframe>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>