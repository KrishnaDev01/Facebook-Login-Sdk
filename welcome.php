<?php
include("config.php");
if (!isset($_SESSION["facebook_access_token"])) {
    header("Location: index.php");
    exit;
}
$response = $fb->get('/me?fields=id,name,email,picture{url,width}', $_SESSION['facebook_access_token']);
$user = $response->getGraphUser();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, <?php echo htmlspecialchars($user["name"]); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome, <?php echo htmlspecialchars($user["name"]); ?>!</h1>
        <div class="card text-center">
            <div class="card-body">
                <img width="<?php echo $user["picture"]["width"]; ?>" src="<?php echo $user["picture"]["url"]; ?>" class="img-fluid rounded-circle" alt="<?php echo htmlspecialchars($user["name"]); ?>">
                <h5 class="card-title mt-3"><?php echo htmlspecialchars($user["name"]); ?></h5>
                <h5 class="card-text">ID: <?php echo htmlspecialchars($user["id"]); ?> </h5>
                <p class="card-text">Email: <?php echo htmlspecialchars($user["email"]); ?></p>
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>