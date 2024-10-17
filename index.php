
<?php
include ("config.php");
if(isset($_SESSION['facebook_access_token'])){
  header("location: welcome.php");
}
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // ระบุ permissions ที่ต้องการ

// สร้าง URL สำหรับ Login
$loginUrl = $helper->getLoginUrl('http://localhost:8080/callback.php', $permissions);
?>

<a href="<?php echo htmlspecialchars($loginUrl); ?>">Login with Facebook</a>