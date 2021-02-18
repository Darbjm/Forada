<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forada
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="aside-height">
	<aside id="secondary" class="widget-area">
		<ul class='menu-list'>
			<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/who-we-are'); ?>'>WHO WE ARE</a></li>
			<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/what-we-do'); ?>'>WHAT WE DO</a></li>
			<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/culture'); ?>'>CULTURE</a></li>
			<li class='menu-list-item'><a class='menu-navigation' href='<?php echo site_url('/contact'); ?>'>CONTACT US</a></li>
		<ul>
	</aside><!-- #secondary -->
</div>
