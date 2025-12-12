<?php
/**
 * Search Results Template.
 *
 * @package rmbt
 */

get_header();
get_template_part( 'template-parts/parts/head_pages' );
?>

<main id="primary" class="site-main container-for-wp-blocs">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf(
				/* translators: wrapping in <span> is safe HTML */
					esc_html__( 'Search Results for: %s', 'premium-theme-1' ),
					'<span>' . esc_html( get_search_query() ) . '</span>'
				);
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

</main>

<?php
get_footer();
