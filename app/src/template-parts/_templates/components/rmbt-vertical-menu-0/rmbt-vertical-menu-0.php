<?php if ( has_nav_menu( 'rmbt-vertical-nav-0' ) ) { ?>
<div class="rmbt-cont-vertical-menu-0">
   <?php wp_nav_menu(
			array(
				'theme_location' => 'rmbt-vertical-nav-0',
				'container' => 'nav',
			)
		); ?>
	</div>
<?php } ?>