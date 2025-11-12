<?php
global $rmbt_theme_options;
?>



<div class="wrapper-section contacts-page-wrapper-section">
        <div class="rmbt-full-width rmbt-contacts-page-full-width">
            <div class="rmbt-we-do-block-full-width__bg">
                <div class="wrap-img">
                    <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/we-do-block/bg_1.jpg" alt="bg_contacts-page"> -->

                    <!-- //!!s -->
                    общим фоном карта под матовым стеклом
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
                        <div>
                            <h3><?php echo rmbt_get_redux_field('rmbt-contacts-page_article-title-') ?></h3>
                        </div>
                        <div class="rmbt-contacts-page__article-body">
                            <div class="wrap-img rmbt-contacts-page__img">
                                <?php echo rmbt_redux_img('rmbt-contacts-page_article-img-id-', 'rmbt-contacts-page_article-img-alt-') ?>
                            </div>
                            <div class="rmbt-contacts-page__article-text">
                                <?php echo rmbt_get_redux_field('rmbt-contacts-page_article-text-') ?>
                            </div>
                        </div>
                        

					</div>
                </div>
            </section>
        </div>
    </div>