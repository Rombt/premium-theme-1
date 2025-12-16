<?php
/**
 * Social networks section.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;

global $rmbt_theme_options;
?>


<div class="rmbt-social-networks" <?php echo ! empty( $args['data'] ) ? esc_attr( $args['data'] ) : ''; ?>>
	<?php
	if ( isset( $rmbt_theme_options['rmbt-social-networks-icon_1'] )
		&& ! empty( $rmbt_theme_options['rmbt-social-networks-icon_1']['url'] )
		&& 'null' !== $rmbt_theme_options['rmbt-social-networks-icon_1_alt']
	) :
		?>
		<a href="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_1'] )
				? esc_url( $rmbt_theme_options['rmbt-social-networks-link_1'] )
				: '#'
			?>
		">
		<img src="<?php echo esc_url( $rmbt_theme_options['rmbt-social-networks-icon_1']['url'] ); ?>" alt="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] )
					? esc_attr( $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] )
					: 'Social network icon'
			?>
		">
		</a>
		<?php
		elseif (
			isset( $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] ) && 'null' === $rmbt_theme_options['rmbt-social-networks-icon_1_alt']
		) :
			?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
		<a href="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_1'] )
				? esc_url( $rmbt_theme_options['rmbt-social-networks-link_1'] )
				: '#'
			?>
		">
			<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo get_icon_svg( 'facebook', true );
			?>
		</a>
	<?php endif; ?>
	<?php
	if ( isset( $rmbt_theme_options['rmbt-social-networks-icon_2'] )
			&& ! empty( $rmbt_theme_options['rmbt-social-networks-icon_2']['url'] )
			&& 'null' !== $rmbt_theme_options['rmbt-social-networks-icon_2_alt']
		) :
		?>
		<a href="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_2'] )
			? esc_url( $rmbt_theme_options['rmbt-social-networks-link_2'] )
			: '#'
			?>
		">
		<img src="<?php echo esc_url( $rmbt_theme_options['rmbt-social-networks-icon_2']['url'] ); ?>" alt="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-icon_2_alt'] )
			? esc_attr( $rmbt_theme_options['rmbt-social-networks-icon_2_alt'] )
			: 'Social network icon'
			?>
		">
		</a>
		<?php
		elseif (
			isset( $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] ) && 'null' === $rmbt_theme_options['rmbt-social-networks-icon_2_alt']
		) :
			?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
		<a href="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_2'] )
				? esc_url( $rmbt_theme_options['rmbt-social-networks-link_2'] )
				: '#'
			?>
		">
			<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo get_icon_svg( 'instagram', true );
			?>
		</a>
	<?php endif; ?>

	<?php
	if ( isset( $rmbt_theme_options['rmbt-social-networks-icon_3'] )
		&& ! empty( $rmbt_theme_options['rmbt-social-networks-icon_3']['url'] )
		&& 'null' !== $rmbt_theme_options['rmbt-social-networks-icon_3_alt']
	) :
		?>
	<a href="
		<?php
		echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_3'] )
		? esc_url( $rmbt_theme_options['rmbt-social-networks-link_3'] )
		: '#'
		?>
	">
		<img src="<?php echo esc_url( $rmbt_theme_options['rmbt-social-networks-icon_3']['url'] ); ?>" alt="
			<?php
			echo ! empty( $rmbt_theme_options['rmbt-social-networks-icon_3_alt'] )
			? esc_attr( $rmbt_theme_options['rmbt-social-networks-icon_3_alt'] )
			: 'Social network icon'
			?>
		">
	</a>
		<?php
	elseif (
		isset( $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] ) && 'null' === $rmbt_theme_options['rmbt-social-networks-icon_3_alt']
	) :
		?>
	<!-- The user has disabled displaying the icon on the screen -->
		<?php
	else :
		?>
	<a href="
		<?php
		echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_3'] )
		? esc_url( $rmbt_theme_options['rmbt-social-networks-link_3'] )
		: '#'
		?>
	">
		<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo get_icon_svg( 'pinterest', true );
		?>
	</a>
	<?php endif; ?>


	<?php
	if ( isset( $rmbt_theme_options['rmbt-social-networks-icon_4'] )
		&& ! empty( $rmbt_theme_options['rmbt-social-networks-icon_4']['url'] )
		&& 'null' !== $rmbt_theme_options['rmbt-social-networks-icon_4_alt']
	) :
		?>
	<a href="
		<?php
		echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_4'] )
			? esc_url( $rmbt_theme_options['rmbt-social-networks-link_4'] )
			: '#'
		?>
	">
		<img src="<?php echo esc_url( $rmbt_theme_options['rmbt-social-networks-icon_4']['url'] ); ?>" alt="
		<?php
		echo ! empty( $rmbt_theme_options['rmbt-social-networks-icon_4_alt'] )
				? esc_attr( $rmbt_theme_options['rmbt-social-networks-icon_4_alt'] )
				: 'Social network icon'
		?>
		">
	</a>
		<?php
	elseif (
		isset( $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] ) && 'null' === $rmbt_theme_options['rmbt-social-networks-icon_4_alt']
	) :
		?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
	<a href="
		<?php
		echo ! empty( $rmbt_theme_options['rmbt-social-networks-link_4'] )
			? esc_url( $rmbt_theme_options['rmbt-social-networks-link_4'] )
			: '#'
		?>
	">
		<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo get_icon_svg( 'linkedin', true );
		?>
	</a>
	<?php endif; ?>
</div>
