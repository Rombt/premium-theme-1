<aside class="sidebar">
	<button class="sidebar-toggle" data-da=".rmbt-hero-block-1-top-row__row, 1024, last">☰</button>
	<?php if ( is_active_sidebar( 'rmbt_blog_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'rmbt_blog_sidebar' ); ?>
	<?php else : ?>
		<p>Добавьте виджеты в админке.</p>
	<?php endif; ?>
</aside>