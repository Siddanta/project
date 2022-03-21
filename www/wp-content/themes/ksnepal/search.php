<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ksnepal
 */
get_header();
?>
<section class="container">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				printf( esc_html__( 'Search Results for: %s', 'ksnepal' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header>

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>
</section>
<?php
get_sidebar();
get_footer();