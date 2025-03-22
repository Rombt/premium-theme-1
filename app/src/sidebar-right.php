<aside class="sidebar sidebar-right">

	<div class="sidebar-toggle sidebar-toggle-right"><span></span>
		<div class='sidebar-toggle__title'>Widgets</div>
	</div>

	<?php if ( is_active_sidebar( 'rmbt_blog_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'rmbt_blog_sidebar' ); ?>
	<?php else : ?>
		<p>Добавьте виджеты в админке.</p>
	<?php endif; ?>
</aside>