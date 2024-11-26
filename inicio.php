<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO A NETFLIX 8K BY JHOJAN </title>
    <link rel="stylesheet" href="./public/css/navbar.css">
    <link rel="stylesheet" href="./public/css/banner.css">
    <link rel="stylesheet" href="./public/css/footer.css">
</head>
<body>
    <?php include 'view/panel/navbar.php'; ?>
    <?php include 'view/panel/banner.php'; ?>



    <?php include 'view/panel/footer.php'; ?>
</body>
</html>