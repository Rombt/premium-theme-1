<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header>
	<div class="entry-content">
		<?php if (has_post_thumbnail()) {
		    the_post_thumbnail();
		}?>
		
		<?php the_content(); ?>
	</div>
</article>