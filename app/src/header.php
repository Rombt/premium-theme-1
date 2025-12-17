<?php
/**
 * Header template file for the theme.
 *
 * Contains the opening HTML structure, <head> section, and site header.
 *
 * @package Premium_Theme_1
 */

defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- todo убрать.  -->
	<?php // get_template_part( 'pages\_templates\components\debug-grid' ); ?>



	<?php if ( is_front_page() ) : ?>

		<div class="rmbt-page-wrap front-page-wrap">
			<?php get_template_part( 'pages/parts/header-2/header-2', '0' ); ?>
			<?php get_template_part( 'pages/parts/hero_block_1/hero_block_1', null ); ?>

		<?php elseif ( is_page( 'Страница шаблонов' ) ) : ?>
			<div class="rmbt-page-wrap templates-page-wrap"></div>

		<?php elseif ( is_404() ) : ?>
			<div class="rmbt-page-wrap rmbt-404-page-wrap">
				<?php get_template_part( 'pages/parts/header-2/header-2', '0' ); ?>
				<?php get_template_part( 'pages/components/hero-block-1-top-row/hero-block-1-top-row' ); ?>

			<?php else : ?>
				<div class="rmbt-page-wrap">
					<?php get_template_part( 'pages/parts/header-2/header-2', '0' ); ?>
					<?php get_template_part( 'pages/components/hero-block-1-top-row/hero-block-1-top-row' ); ?>

				<?php endif ?>
