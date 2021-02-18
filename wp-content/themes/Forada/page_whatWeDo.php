<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Forada
 * Template Name: What we do
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">
		<div class="what-we-do-main">
			<div class='what-we-do-left'>
					<h4 class='small-title'>WHAT WE DO</h4>
				<div class='margin-bottom-20px'>
					<h2 class='small-h2'>We believe that a successful strategy is one which produces consistent a sustainable returns for investors over the long term.</h2>
				</div>
				<div class='what-we-do-copy'>
					<p class='body-copy'>Alongside a continuous focus on absolute return through the investment process, risk management is key to our approach.</p>
				</div>
				<div class='what-we-do-copy'>
					<p class='body-copy'>Over time, our strategy will be assessed both on its gains and its ability to protect capital through diverse market conditions.</p>
				</div>
				<div>
					<p class='body-copy-bold'>Over time, our strategy will be assessed both on its gains and its ability to protect capital through diverse market conditions.</p>
				</div>
			</div>
			<div class='what-we-do-right'>
				<div class='card'>
					<img class='card-icons' src='<?php echo get_template_directory_uri(); ?>/images/forada_website_icon_market risk - risk reduction framework.svg' alt='market risk icon'>
					<p class='body-copy no-margin card-text'><span class='body-copy-bold twelve-text'>Forada's strategy</span> is guided by thematic macro investment research process combining analysis of secular and cyclical forces  with an understanding of how central banks design monetary policy and the process by which they adjust that policy.</p>
				</div>
				<div class='card'>
					<img class='card-icons' src='<?php echo get_template_directory_uri(); ?>/images/forada_website_icon_macro.svg' alt='macro icon'>
					<p class='body-body no-margin card-text'><span class='body-copy-bold twelve-text'>Within the evolving macro thesis,</span> we continuously join the dots between catalytic events and construct portfolios around these pathways.</p>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>