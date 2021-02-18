<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Forada' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="logo-header">
				<a href='<?php echo site_url('/'); ?>'>
					<img class="logo" src='<?php echo get_template_directory_uri(); ?>/images/Forada-logo_main.svg' alt='Forada Logo' />
				</a>
			</div>
			<div class="header-buttons">
				<div class="header-icons">
					<a href="https://www.linkedin.com/company/Forada/" target="_blank">
						<svg class='linkedin-icon' height="682pt" viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
							<path class='icons-path' d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"/>
							<path class='icons-path' d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"/>
							<path class='icons-path' d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"/>
						</svg>
					</a>
				</div>
				<div class="header-icons">
					<a href="mailto:info@Forada.com" target="_blank">
					<svg class='letter-icon' version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 298.8 202" xml:space="preserve">
						<g>
							<path class='icons-path' d="M298.8,0.1c0,67.4,0,134.4,0,201.9c-0.9,0-1.8,0-2.7,0c-97.8,0-195.5,0-293.3,0.1c-2.4,0-2.9-0.7-2.9-3
								C0.1,133.7,0.1,68.3,0,3c0-2.2,0.5-3,2.9-3c97.8,0.1,195.5,0.1,293.3,0.1C297,0.1,297.8,0.1,298.8,0.1z M285.5,20
								c-44.9,33.4-89.3,66.4-133.8,99.5C105.6,86.2,59.7,53.1,13.5,19.8c0,56.5,0,112.6,0,168.7c90.7,0,181.3,0,272,0
								C285.5,132.4,285.5,76.5,285.5,20z M271.9,13.6c-81.7,0-162.8,0-244.4,0c41.7,30.1,82.9,59.8,124.1,89.5
								C191.7,73.3,231.6,43.6,271.9,13.6z"/>
						</g>
					</svg>
					</a>
				</div>
				<!-- <div class="investor">
					<form action="#" target="_blank">
						<button type="submit" class="header-login">
							Investor login 
							<svg class='corner-arrow'
									viewBox="0 0 226.7 225" xml:space="preserve">
								<style type="text/css">
									.st0{fill:none;stroke:#FFFFFF;stroke-width:15;}
								</style>
								<polyline class="st0" points="78.4,16 218,8.5 210.2,142.6 "/>
								<line class="st0" x1="5.9" y1="216.7" x2="218" y2="8.5"/>
							</svg>
						</button>
					</form>
				</div> -->
			</div>
			<div class='burger-container'>
				<button class="burger-menu">
					<span class='burger-bar'></span>
					<span class='burger-bar'></span>
					<span class='burger-bar'></span>
					<span class='burger-cross'></span>
					<span class='burger-cross'></span>
				</button>
			</div>
		</div><!-- .site-branding -->
		<div class="phone-menu">
			<ul class='menu-list'>
				<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/who-we-are'); ?>'>WHO WE ARE</a></li>
				<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/what-we-do'); ?>'>WHAT WE DO</a></li>
				<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/culture'); ?>'>CULTURE</a></li>
				<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/contact'); ?>'>CONTACT US</a></li>
			<ul>
		</div>
	</header><!-- #masthead -->
