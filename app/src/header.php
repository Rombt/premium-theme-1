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

	<?php if ( is_page( 'Страница шаблонов' ) ) : ?>
		<div class="rmbt-page-wrap templates-page-wrap">
		<?php elseif ( is_front_page() ) : ?>
			<div class="rmbt-page-wrap front-page-wrap">
				<?php get_template_part( 'pages/parts/header-2/header-2', '0' ); ?>
			<?php endif ?>