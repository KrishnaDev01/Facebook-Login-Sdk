<?php
include ("config.php");
$helper = $fb->getRedirectLoginHelper();

$accessToken = $helper->getAccessToken();
$_SESSION['facebook_access_token'] = (string) $accessToken;

header("location: welcome.php");
?>