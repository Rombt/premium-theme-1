<aside class="sidebar">
	<?php if ( is_active_sidebar( 'rmbt_blog_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'rmbt_blog_sidebar' ); ?>
	<?php else : ?>
		<p>Добавьте виджеты в админке.</p>
	<?php endif; ?>
</aside>