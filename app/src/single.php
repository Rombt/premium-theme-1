<?php get_header(); ?>



<main>

	<div class="rmbt-full-width rmbt-single-full-width">
		<section class="rmbt-container rmbt-single" <?php if ( isset( $rmbt_theme_options['rmbt-single_page-title'] ) && $rmbt_theme_options['rmbt-single_page-title'] == "" ) :
			echo 'style="padding-top: 15px; padding-bottom: 15px;"';
		endif ?>>

			<?php if ( $rmbt_theme_options['rmbt-single_page-title'] ) : ?>
				<h2 class='title-section'> <?php echo rmbt_get_redux_field( 'rmbt-single_page-title', 1 ) ?> </h2>
			<?php endif ?>
			<?php if ( isset( $rmbt_theme_options['rmbt-single_page-subtitle'] ) && $rmbt_theme_options['rmbt-single_page-subtitle'] !== "" ) : ?>
				<p class='subtitle-section'>
					<?php echo rmbt_get_redux_field( 'rmbt-single_page-subtitle', 1 ) ?>
				</p>
			<?php endif ?>

			<div class="rmbt-single__row">
				<?php
				global $rmbt_theme_options;
				if ( $rmbt_theme_options['rmbt-sidebar-switch'] && $rmbt_theme_options['rmbt-sidebar-radio'] === '1' ) {
					get_sidebar( 'left' );
				}
				?>

				<div class="rmbt-single__col rmbt-single-right-col">
					<?php get_template_part( 'pages/parts/content/content', get_post_type() ); ?>
				</div>

				<?php
				if ( $rmbt_theme_options['rmbt-sidebar-switch'] && $rmbt_theme_options['rmbt-sidebar-radio'] === '2' ) {
					get_sidebar( 'right' );
				}
				?>


			</div>
		</section>
	</div>


</main>

<?php get_footer(); ?>