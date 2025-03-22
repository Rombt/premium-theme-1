<article class="rmbt-latest-blog-posts-card <?= ! empty( $args['classes'] ) ? $args['classes'] : '' ?>">
	<div class="wrap-img rmbt-latest-blog-posts-card__img">
		<?php echo $args['tag-img'] ?>
	</div>

	<div class="rmbt-latest-blog-posts-card__content">

		<header>
			<h3 class='title-block'><?php echo $args['title'] ?></h3>
		</header>
		<div class="rmbt-latest-blog-posts-card__article-body">
			<div class="subtitle-block rmbt-latest-blog-posts-card__article-text">
				<?php echo $args['text'] ?>
			</div>
		</div>
		<footer class='text-block'>
			<?php echo $args['post_date'] ?>
			<?php
			get_template_part( 'pages/components/button_read_more/button_read_more', null, [ 
				'data' => '',
				'title' => 'read more',
				'href' => get_permalink(),
				'classes' => 'shadow-box',
			] );
			?>
		</footer>
	</div>
</article>