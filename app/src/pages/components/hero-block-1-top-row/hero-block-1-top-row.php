<?php
/**
 * Hero block 1 top row.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rmbt-full-width rmbt-hero-block-1-top-row-full-width <?php echo is_front_page() ? '' : 'rmbt-hero-block-1-top-row-is-inner'; ?>">
	<section class="rmbt-container rmbt-hero-block-1-top-row ">
		<div class="rmbt-hero-block-1-top-row__row ">
			<div class="rmbt-hero-block-1-top-row__col rmbt-hero-block-1-top-row-col-left">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif ?>
			</div>
			<div class="rmbt-hero-block-1-top-row__col rmbt-hero-block-1-top-row-col-center">
				<?php if ( has_nav_menu( 'header_nav' ) ) { ?>
					<div class="rmbt-menu-horizontal" data-da=".rmbt-hero-block-1-top-row-col-right, 768">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'header_nav',
								'container'      => 'nav',
							)
						);
						?>
					</div>
				<?php } ?>
			</div>
			<div class="rmbt-hero-block-1-top-row__col rmbt-hero-block-1-top-row-col-right">
				<?php
				get_template_part(
					'pages/components/button_cta/button_cta',
					'null',
					array(
						'classes' => 'rmbt-sway',
						'data'    => 'data-da=".menu-header-navigation-container, 769"',
						'title'   => rmbt_get_redux_field( 'rmbt-call_to_action_button-text', 1 ),
						'href'    => rmbt_get_redux_field( 'rmbt-call_to_action_button-link', 1 ),
					)
				);
				?>
				<?php
				get_template_part(
					'pages/components/social_networks/social_networks',
					null,
					array(
						'data' => 'data-da=".menu-header-navigation-container, 769, last"',
					)
				);
				?>
			</div>
		</div>
	</section>
</div>
