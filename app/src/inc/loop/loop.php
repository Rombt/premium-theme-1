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