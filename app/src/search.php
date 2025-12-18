<?php
/**
 * Search Results Template.
 *
 * @package rmbt
 */

get_header();
get_template_part( 'template-parts/parts/head-pages' );
?>

<main>
	<div class="rmbt-full-width rmbt-blog-full-width">
		<section class="rmbt-container rmbt-blog"
			<?php
			if ( isset( $rmbt_theme_options['rmbt-blog_page-title'] ) && '' === $rmbt_theme_options['rmbt-blog_page-title'] ) :
				echo 'style="padding-top: 15px; padding-bottom: 15px;"';
			endif
			?>
		>
			<?php if ( $rmbt_theme_options['rmbt-blog_page-title'] ) : ?>
				<h2 class='title-section'> <?php echo esc_html( rmbt_get_redux_field( 'rmbt-blog_page-title', 1 ) ); ?> </h2>
			<?php endif ?>
			<?php if ( isset( $rmbt_theme_options['rmbt-blog_page-subtitle'] ) && '' !== $rmbt_theme_options['rmbt-blog_page-subtitle'] ) : ?>
				<p class='subtitle-section'>
					<?php echo esc_html( rmbt_get_redux_field( 'rmbt-blog_page-subtitle', 1 ) ); ?>
				</p>
			<?php endif ?>
			<div class="rmbt-blog__row">

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
				global $rmbt_theme_options;
				if ( $rmbt_theme_options['rmbt-sidebar-switch'] && '1' === $rmbt_theme_options['rmbt-sidebar-radio'] ) {
					get_sidebar( 'left' );
				}
				?>



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




				<?php
				if ( $rmbt_theme_options['rmbt-sidebar-switch'] && '2' === $rmbt_theme_options['rmbt-sidebar-radio'] ) {
					get_sidebar( 'right' );
				}
				?>



			</div>
		</section>
	</div>
</main>

<?php
get_footer();
