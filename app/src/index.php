<?php get_header(); ?>



<main>

	<div class="rmbt-full-width rmbt-blog-full-width">
		<section class="rmbt-container rmbt-blog" <?php if ( isset( $rmbt_theme_options['rmbt-blog_section-title'] ) && $rmbt_theme_options['rmbt-blog_section-title'] == "" ) :
			echo 'style="padding-top: 15px; padding-bottom: 15px;"';
		endif ?>>
			<div class="rmbt-blog__row">
				<div class="rmbt-blog__col rmbt-blog-right-col">
					<?php get_template_part( 'pages/parts/loop/loop' ); ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</section>
	</div>


</main>
<!-- </div> -->

<?php get_footer(); ?>