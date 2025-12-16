<?php
/**
 * Post card for latest blog.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;
?>

<article class="rmbt-latest-blog-posts-card <?php echo ! empty( $args['classes'] ) ? esc_html( $args['classes'] ) : ''; ?>">
	<div class="wrap-img hover-img rmbt-latest-blog-posts-card__img">
		<?php echo esc_html( $args['tag-img'] ); ?>
	</div>
	<div class="rmbt-latest-blog-posts-card__content">
		<header>
			<h3 class='title-block'><?php echo esc_html( $args['title'] ); ?></h3>
		</header>
		<div class="rmbt-latest-blog-posts-card__article-body">
			<div class="subtitle-block rmbt-latest-blog-posts-card__article-text">
				<?php echo esc_html( $args['text'] ); ?>
			</div>
		</div>
		<footer class='text-block'>
			<?php echo esc_html( $args['post_date'] ); ?>
			<?php
			get_template_part(
				'pages/components/button_read_more/button_read_more',
				null,
				array(
					'data'    => '',
					'title'   => 'read more',
					'href'    => get_permalink(),
					'classes' => 'shadow-box',
				)
			);
			?>
		</footer>
	</div>
</article>
