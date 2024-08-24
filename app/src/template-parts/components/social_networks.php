      <section class="rmbt-social-networks">
         <div class="rmbt-social-networks__row">
            <a href="<?php echo rmbt_get_redux_field('rmbt-social-networks_fb-link') ?>"><?php echo rmbt_redux_img(
                  'rmbt-social-networks_fb_img-id', 
                  'rmbt-social-networks-fb_img-alt', 
                  // 'facebook_2',
                  esc_html($args['facebook_id']),
                  esc_html($args['class'])
                  ) ?>
            </a>
            <a href="<?php echo rmbt_get_redux_field('rmbt-social-networks_instagram-link') ?>"><?php echo rmbt_redux_img(
                  'rmbt-social-networks_instagram_img-id', 
                  'rmbt-social-networks_instagram_img-alt', 
                  // 'instagram_2',
                  esc_html($args['instagram_id']),
                  esc_html($args['class'])
                  ) ?>
            </a>
            <a href="<?php echo rmbt_get_redux_field('rmbt-social-networks_youtube-link') ?>"><?php echo rmbt_redux_img(
                  'rmbt-social-networks-youtube_img-id', 
                  'rmbt-social-networks-youtube_img-alt', 
                  // 'youtube_1',
                  esc_html($args['youtube_id']),
                  esc_html($args['class'])
                  ) ?>
            </a>
            <a href="<?php echo rmbt_get_redux_field('rmbt-social-networks_twitter-link') ?>"><?php echo rmbt_redux_img(
                  'rmbt-social-networks-twitter_img-id', 
                  'rmbt-social-networks-twitter_img-alt', 
                  // 'twitter_1',
                  esc_html($args['twitter_id']),
                  esc_html($args['class'])
                  ) ?>
            </a>
         </div>
      </section>