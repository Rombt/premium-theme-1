<?php get_header(); ?>



<main>

	<div class="rmbt-full-width rmbt-blog-full-width">
		<section class="rmbt-container rmbt-blog" <?php if ( isset( $rmbt_theme_options['rmbt-blog_page-title'] ) && $rmbt_theme_options['rmbt-blog_page-title'] == "" ) :
			echo 'style="padding-top: 15px; padding-bottom: 15px;"';
		endif ?>>

			<?php if ( $rmbt_theme_options['rmbt-blog_page-title'] ) : ?>
				<h2 class='title-section'> <?php echo rmbt_get_redux_field( 'rmbt-blog_page-title', 1 ) ?> </h2>
			<?php endif ?>
			<?php if ( isset( $rmbt_theme_options['rmbt-blog_page-subtitle'] ) && $rmbt_theme_options['rmbt-blog_page-subtitle'] !== "" ) : ?>
				<p class='subtitle-section'>
					<?php echo rmbt_get_redux_field( 'rmbt-blog_page-subtitle', 1 ) ?>
				</p>
			<?php endif ?>

			<div class="rmbt-blog__row">
				<?php
				global $rmbt_theme_options;
				if ( $rmbt_theme_options['rmbt-sidebar-switch'] && $rmbt_theme_options['rmbt-sidebar-radio'] === '1' ) {
					get_sidebar( 'left' );
				}
				?>

				<div class="rmbt-blog__col rmbt-blog-right-col">
					<?php get_template_part( 'pages/parts/loop/loop' ); ?>
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