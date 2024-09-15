<?php if ( has_nav_menu( 'rmbt-vertical-nav-0' ) ) { ?>
<div class="rmbt-cont-vertical-menu-0">
   <?php wp_nav_menu(
			array(
				'theme_location' => 'rmbt-vertical-nav-0',
				'container' => 'nav',
			)
		); ?>
   <div class="menu-icon-other"><span>+</span>other</div>
   <div class="menu-overflow"></div>
</div>
<?php } ?>