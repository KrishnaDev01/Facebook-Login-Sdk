# Facebook api
```bash https://developers.facebook.com/tools/explorer
```
# config.php
``` php
$appId = "";
$appSecret = "";

$fb = new \Facebook\Facebook([
  'app_id' => $appId,
  'app_secret' => $appSecret,
  'default_graph_version' => 'v2.10',
]);
```
