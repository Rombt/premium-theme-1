<?php
/**
 * Testimonials Redux Block Settings.
 *
 * @package premium-theme-1
 */

defined( 'ABSPATH' ) || exit;

$args = array(
	'status' => 'approve',
	'number' => 10,
	'order'  => 'DESC',
);

$rmbt_comments = get_comments( $args );

?>

<?php if ( ! empty( $posts ) ) : ?>

	<div class="wrapper-section testimonials-block-wrapper-section">
		<div class="rmbt-full-width rmbt-testimonials-block-full-width">
			<section class="rmbt-testimonials-block">
				<h2 class="title-section">
					<?php echo esc_html( rmbt_get_redux_field( 'rmbt-testimonials-block_section-title', 1 ) ); ?>
				</h2>
				<p class="subtitle-section">
					<?php echo esc_html( rmbt_get_redux_field( 'rmbt-testimonials-block_section-subtitle', 1 ) ); ?>
				</p>
				<div class="rmbt-testimonials-block__row">
					<div class="rmbt-testimonials-block-slide-swiper swiper">
						<div class="swiper-wrapper">
							<?php foreach ( $rmbt_comments as $rmbt_comment ) : ?>
								<div class="swiper-slide rmbt-testimonials-block-slide  shadow-box">
									<div class="wrap-img rmbt-testimonials-block-slide__img">
										<?php
										$custom_avatar = get_comment_meta( $rmbt_comment->comment_ID, 'custom_avatar', true );
										$avatar        = get_avatar( $rmbt_comment->comment_author_email, 80 );
										if ( $custom_avatar ) {
											echo '<img src="' . esc_url( $custom_avatar ) . '" width="80" height="80" class="custom-avatar">';
										} else {
											echo get_avatar( $rmbt_comment->comment_author_email, 80, rmbt_get_redux_field( 'rmbt-default_avatar_img', 1 ) );
										}
										?>
									</div>
									<h2 class="title-block">
										<a href="<?php echo esc_url( $rmbt_comment->comment_author_url ); ?>"><?php echo esc_html( $rmbt_comment->comment_author ); ?></a>
									</h2>
									<div class='subtitle-block'>
										<?php echo esc_html( wp_trim_words( $rmbt_comment->comment_content, 15, '  [...]' ) ); ?>
									</div>
									<?php
									get_template_part(
										'pages/components/button_read_more/button_read_more',
										null,
										array(
											'data'    => '',
											'title'   => 'read more',
											'href'    => get_comment_link( $rmbt_comment->comment_ID ),
											'classes' => 'shadow-box',
										)
									);
									?>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="rmbt-testimonials-block-slide-swiper__button-next">
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo get_icon_svg( 'chevron_1', true );
						?>
					</div>
					<div class="rmbt-testimonials-block-slide-swiper__button-prev">
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo get_icon_svg( 'chevron_1', true );
						?>
					</div>
				</div>
			</section>
		</div>
	</div>

<?php endif; ?>
