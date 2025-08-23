<div class="rmbt-social-networks" <?= ! empty($args['data']) ? $args['data'] : '' ?>>

	<?php global $rmbt_theme_options; ?>
	<?php
    if (isset($rmbt_theme_options['rmbt-social-networks-icon_1'])
        && ! empty($rmbt_theme_options['rmbt-social-networks-icon_1']['url'])
        && $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] !== 'null'
    ) : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_1'])
            ? esc_url($rmbt_theme_options['rmbt-social-networks-link_1'])
            : '#' ?>">
			<img src="<?= esc_url($rmbt_theme_options['rmbt-social-networks-icon_1']['url']) ?>" alt="<?= ! empty($rmbt_theme_options['rmbt-social-networks-icon_1_alt'])
                    ? esc_attr($rmbt_theme_options['rmbt-social-networks-icon_1_alt'])
                    : 'Social network icon' ?>">
		</a>
	<?php elseif (
	    isset($rmbt_theme_options['rmbt-social-networks-icon_1_alt']) && $rmbt_theme_options['rmbt-social-networks-icon_1_alt'] === 'null'
	) : ?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_1'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_1'])
	        : '#' ?>">
			<?= get_icon_svg('facebook', true) ?>
		</a>
	<?php endif; ?>


	<?php
	if (isset($rmbt_theme_options['rmbt-social-networks-icon_2'])
	    && ! empty($rmbt_theme_options['rmbt-social-networks-icon_2']['url'])
	    && $rmbt_theme_options['rmbt-social-networks-icon_2_alt'] !== 'null'
	) : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_2'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_2'])
	        : '#' ?>">
			<img src="<?= esc_url($rmbt_theme_options['rmbt-social-networks-icon_2']['url']) ?>" alt="<?= ! empty($rmbt_theme_options['rmbt-social-networks-icon_2_alt'])
	                ? esc_attr($rmbt_theme_options['rmbt-social-networks-icon_2_alt'])
	                : 'Social network icon' ?>">
		</a>
	<?php elseif (
	    isset($rmbt_theme_options['rmbt-social-networks-icon_1_alt']) && $rmbt_theme_options['rmbt-social-networks-icon_2_alt'] === 'null'
	) : ?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_2'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_2'])
	        : '#' ?>">
			<?= get_icon_svg('instagram', true) ?>
		</a>
	<?php endif; ?>

	<?php
	if (isset($rmbt_theme_options['rmbt-social-networks-icon_3'])
	    && ! empty($rmbt_theme_options['rmbt-social-networks-icon_3']['url'])
	    && $rmbt_theme_options['rmbt-social-networks-icon_3_alt'] !== 'null'
	) : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_3'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_3'])
	        : '#' ?>">
			<img src="<?= esc_url($rmbt_theme_options['rmbt-social-networks-icon_3']['url']) ?>" alt="<?= ! empty($rmbt_theme_options['rmbt-social-networks-icon_3_alt'])
	                ? esc_attr($rmbt_theme_options['rmbt-social-networks-icon_3_alt'])
	                : 'Social network icon' ?>">
		</a>
	<?php elseif (
	    isset($rmbt_theme_options['rmbt-social-networks-icon_1_alt']) && $rmbt_theme_options['rmbt-social-networks-icon_3_alt'] === 'null'
	) : ?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_3'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_3'])
	        : '#' ?>">
			<?= get_icon_svg('pinterest', true) ?>
		</a>
	<?php endif; ?>


	<?php
	if (isset($rmbt_theme_options['rmbt-social-networks-icon_4'])
	    && ! empty($rmbt_theme_options['rmbt-social-networks-icon_4']['url'])
	    && $rmbt_theme_options['rmbt-social-networks-icon_4_alt'] !== 'null'
	) : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_4'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_4'])
	        : '#' ?>">
			<img src="<?= esc_url($rmbt_theme_options['rmbt-social-networks-icon_4']['url']) ?>" alt="<?= ! empty($rmbt_theme_options['rmbt-social-networks-icon_4_alt'])
	                ? esc_attr($rmbt_theme_options['rmbt-social-networks-icon_4_alt'])
	                : 'Social network icon' ?>">
		</a>
	<?php elseif (
	    isset($rmbt_theme_options['rmbt-social-networks-icon_1_alt']) && $rmbt_theme_options['rmbt-social-networks-icon_4_alt'] === 'null'
	) : ?>
		<!-- The user has disabled displaying the icon on the screen -->
	<?php else : ?>
		<a href="<?= ! empty($rmbt_theme_options['rmbt-social-networks-link_4'])
	        ? esc_url($rmbt_theme_options['rmbt-social-networks-link_4'])
	        : '#' ?>">
			<?= get_icon_svg('linkedin', true) ?>
		</a>
	<?php endif; ?>
</div>