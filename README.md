# config.php
$appId = "";
$appSecret = "";

$fb = new \Facebook\Facebook([
  'app_id' => $appId,
  'app_secret' => $appSecret,
  'default_graph_version' => 'v2.10',
]);
