<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está autenticado, redirigir al login
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO</title>
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