<div class="rmbt-full-width rmbt-latest-blog-posts-full-width">
	<section class="rmbt-container rmbt-latest-blog-posts" <?php if ( isset( $rmbt_theme_options['rmbt-latest-blog-posts_section-title'] ) && $rmbt_theme_options['rmbt-latest-blog-posts_section-title'] == "" ) :
		echo 'style="padding-top: 15px; padding-bottom: 15px;"';
	endif ?>>


		<div class="rmbt-latest-blog-posts__row">

			<div class="rmbt-latest-blog-posts__col rmbt-latest-blog-posts-right-col">


				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) :
						the_post(); ?>
						<?php get_template_part( 'pages/parts/content/content', get_post_format() ); ?>
					<?php endwhile; ?>

					<div class="pagination">
						<?php echo paginate_links(); ?>
					</div>
				<?php else : ?>
					<p>Записей не найдено.</p>
				<?php endif; ?>


			</div>
		</div>


	</section>
</div>