<?php
/**
 * Comments template.
 *
 * This file is used to display comments and the comment form.
 *
 * @package premium-theme-1
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();

			printf(
				esc_html(
					/* translators: %1$s: number of comments */
					_nx(
						'%1$s comment',
						'%1$s comments',
						$comments_number,
						'comments title',
						'premium-theme-1'
					)
				),
				esc_html( number_format_i18n( $comments_number ) )
			);
			?>
		</h2>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'style' => 'ol' ) ); ?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
