<?php 
session_start();
require "../includes/config.php";
require "../includes/header.php";

$config = require 'config.php';
$siteName = $config['site_name'];
$menuItems = $config['menu'];
$pages = $config['pages'];
$defaultPage = $config['default_page'];

$page = $_GET['p'] ?? null;
$target = $pages[$page] ?? $defaultPage;

if (!isset($_SESSION['adminuser']) && $page !== 'login') {
    $page = "login";
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($siteName) ?></title>
</head>
<body>

<main>
<?php require $target; ?>
</main>

</body>
</html>
