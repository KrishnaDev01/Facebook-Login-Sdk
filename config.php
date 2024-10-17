<?php
session_start();
error_reporting(0);
require_once __DIR__ . '/vendor/autoload.php'; // เปลี่ยน path ตามที่คุณต้องการ

$appId = "";
$appSecret = "";

$fb = new \Facebook\Facebook([
  'app_id' => $appId,
  'app_secret' => $appSecret,
  'default_graph_version' => 'v2.10',
]);