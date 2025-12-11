<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<?php
			$template_type = is_page() ? 'page' : get_post_format();
			get_template_part( 'pages/parts/content/content', $template_type );
		?>
	<?php endwhile; ?>

	<div class="pagination">
		<?php
		echo paginate_links(
			array(
				'mid_size' => 0,
				'end_size' => 1,
			)
		);
		?>
	</div>
<?php else : ?>
	<p>Posts don't found</p>
<?php endif; ?>
