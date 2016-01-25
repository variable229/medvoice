<?php
// Pass session data over.
session_start();

// Include the required dependencies.
require_once __DIR__ . 'facebook-php-sdkv5.0.0/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '936112039776133',
  'app_secret' => 'b2ca1251b052aeab72b1225a23113747',
  'default_graph_version' => 'v2.5',
]);
