<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php // get_template_part( 'pages\_templates\components\debug-grid' ); ?>



	<?php if ( is_front_page() ) : ?>

		<div class="rmbt-page-wrap front-page-wrap">
			<?php get_template_part( 'pages/parts/header-2/header-2', '0' ); ?>
			<!-- сюда добавить hero block  -->

		<?php elseif ( is_page( 'Страница шаблонов' ) ) : ?>
			<div class="rmbt-page-wrap templates-page-wrap"></div>

		<?php else : ?>
			<div class="rmbt-page-wrap">
				<?php get_template_part( 'pages/parts/header-2/header-2', '0' ); ?>

			<?php endif ?>