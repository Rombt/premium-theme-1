<?php
/**
 * Файл: single-project.php
 *
 * Шаблон отображения отдельного проекта (custom post type "project").
 *
 * @package PremiumTheme
 * @subpackage Templates
 * @since 1.0.0
 */

get_header(); ?>



<main>
	<div class="rmbt-full-width rmbt-single-full-width">
		<section class="rmbt-container rmbt-single">
			<?php the_title( '<h1 class="entry-title title-section">', '</h1>' ); ?>
			<?php if ( isset( $rmbt_theme_options['rmbt-single_page-subtitle'] ) && '' !== $rmbt_theme_options['rmbt-single_page-subtitle'] ) : ?>

				<p class='subtitle-section'>
					<?php echo rmbt_get_redux_field( 'rmbt-single_page-subtitle', 1 ); ?>
				</p>
			<?php endif ?>

			<div class="rmbt-single__row">
				<?php global $rmbt_theme_options; ?>
				<?php
				if ( $rmbt_theme_options['rmbt-single-sidebar-switch'] && '1' === $rmbt_theme_options['rmbt-single-sidebar-radio'] ) {
					get_sidebar( 'left' );
				}
				?>

<!-- //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
				<div class="rmbt-single__col rmbt-single-right-col">
					<?php get_template_part( 'pages/parts/content/content', get_post_type() ); ?>
					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'premium-theme-1' ),
							'after'  => '</div>',
						)
					);
					?>

					<?php the_tags( '<div class="post-tags">', ', ', '</div>' ); ?>
				</div>

				<?php
				if ( $rmbt_theme_options['rmbt-single-sidebar-switch'] && '2' === $rmbt_theme_options['rmbt-single-sidebar-radio'] ) {
					get_sidebar( 'right' );
				}
				?>

			</div>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</section>
	</div>


</main>

<?php get_footer(); ?>
