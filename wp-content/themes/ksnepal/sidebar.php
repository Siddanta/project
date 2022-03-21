<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ksnepal
 */

if(!is_active_sidebar('sidebar')){
	return;
}
?>
<aside class="site-sidebar"><?php dynamic_sidebar( 'sidebar' ); ?></aside>