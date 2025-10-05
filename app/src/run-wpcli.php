<?php

//выполнение команд в консоли если она не доступна на хостинге

// run-wpcli.php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/wp-load.php';
if (php_sapi_name() !== 'cli') {
    echo shell_exec('wp search-replace "http://multisite" "http://rombtnet.site" --all-tables');
}
