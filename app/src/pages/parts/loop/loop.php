<div class="test-block">
	<pre>
<?php
echo get_post_type();
?>
</pre>
</div>



<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) :
		the_post(); ?>
		<?php get_template_part( 'pages/parts/content/content', get_post_format() ); ?>
	<?php endwhile; ?>

	<div class="pagination">
		<?php echo paginate_links(
			array(
				'mid_size' => 0,
				'end_size' => 1,
			)
		); ?>
	</div>
<?php else : ?>
	<p>Posts don't found</p>
<?php endif; ?>