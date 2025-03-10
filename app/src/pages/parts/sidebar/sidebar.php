<aside class="sidebar">
	<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	<?php else : ?>
		<p>Добавьте виджеты в админке.</p>
	<?php endif; ?>
</aside>