<aside class="sidebar sidebar-right">

	<div class="sidebar-toggle sidebar-toggle-right"><span></span>
		<div class='sidebar-toggle__title'>Widgets</div>
	</div>

	<?php if ( is_active_sidebar( 'rmbt_blog_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'rmbt_blog_sidebar' ); ?>
	<?php else : ?>
		<p class='rmbt-no-widget'>We don't found anyone widget</p>
	<?php endif; ?>
</aside>
