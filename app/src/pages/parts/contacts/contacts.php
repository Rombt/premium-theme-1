<?php
global $rmbt_theme_options;
?>



<div class="wrapper-section contacts-page-wrapper-section">
        <div class="rmbt-full-width rmbt-contacts-page-full-width">
            <div class="rmbt-we-do-block-full-width__bg">
                <div class="wrap-img">
                    <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/bg_1.jpg" alt="bg_contacts-page"> -->
                </div>
            </div>
            <section class="rmbt-container rmbt-contacts-page">
				<h2 class="title-section"><?php echo rmbt_get_redux_field('rmbt-contacts-page_section-title') ?></h2>
				<p class="subtitle-section"><?php echo rmbt_get_redux_field('rmbt-contacts-page_section-subtitle') ?></p>
                <div class="rmbt-contacts-page__row">
                    <div class="rmbt-contacts-page__col-left">
						<div class="wrap-img shadow-box rmbt-contacts-page__poster">
							<?php echo rmbt_redux_img('rmbt-contacts-page_poster-1', 'rmbt-contacts-page_poster-1-alt') ?>
						</div>
						<div class="wrap-img shadow-box rmbt-contacts-page__poster">
							<?php echo rmbt_redux_img('rmbt-contacts-page_poster-2', 'rmbt-contacts-page_poster-2-alt') ?>
                            </div>
						<div class="wrap-img shadow-box rmbt-contacts-page__poster">
							<?php echo rmbt_redux_img('rmbt-contacts-page_poster-3', 'rmbt-contacts-page_poster-3-alt') ?>
						</div>
					</div>
                    <div class="rmbt-contacts-page__col-right">
                        <div class="rmbt-slide-in-tabs" data-rmbt-tabs-container="rmbt-contacts-tabs">
                            <div class="rmbt-slide-in-tabs-content">
                                <div class="rmbt-slide-in-tabs-content__item" data-rmbt-tab-content-item="tab_1">

                                </div>
                                <div class="rmbt-slide-in-tabs-content__item" data-rmbt-tab-content-item="tab_2">

                                </div>
                                <div class="rmbt-slide-in-tabs-content__item" data-rmbt-tab-content-item="tab_3">

                                </div>
                            </div>
                            <div class="rmbt-slide-in-tabs-nav">
                                <div class="rmbt-slide-in-tabs-nav__item" data-rmbt-tab-nav-item="tab_1">
                                tab_1
                                </div>
                                <div class="rmbt-slide-in-tabs-nav__item" data-rmbt-tab-nav-item="tab_2">
                                tab_2
                                </div>
                                <div class="rmbt-slide-in-tabs-nav__item" data-rmbt-tab-nav-item="tab_3">
                                tab_3
                                </div>
                            </div>
                        </div>

                        
                        <!-- <p>вкладки с контактами отделов - желательно через репитер</p>
                        <p>форма для отправки сообщений </p>
                        <p>карта с указанием локации</p> -->



					</div>
                    <div class="rmbt-contacts-page__map"> 
                        <?php  $address = rmbt_get_redux_field('contact_map_address');
                            $zoom    = intval(rmbt_get_redux_field('contact_map_zoom'));
                            $map_url = 'https://www.google.com/maps?q=' . urlencode($address) . '&z=' . $zoom . '&output=embed';
                        ?>


                        <?php if (! empty($address)) : ?>
                        <iframe class="rmbt-map-iframe"
                            loading="lazy"
                            allowfullscreen
                            src="<?php echo esc_url($map_url); ?>">
                        </iframe>
                        <?php endif; ?>

                    </div>
                </div>
            </section>
        </div>
    </div>