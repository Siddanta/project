<?php
/**
 * The template for displaying search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ksnepal
 */
?>
<form class="form-search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="sr-only"><?php _e( 'Search', 'ksnepal' ); ?></label>
	<div class="input-group">
		<input type="text" class="form-control field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'ksnepal' ); ?>">
		<div class="input-group-append">
			<input type="submit" class="btn btn-primary submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'ksnepal' ); ?>">
		</div>
	</div>
</form>