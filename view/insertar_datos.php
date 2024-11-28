<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/style_lista.css">
    <title>Agregar Programa</title>
</head>
<body>
    <?php include 'panel/nav_bar.php'; ?>
    <?php
    if (isset($_SESSION['nombre_usuario'])) {
        echo "<div class='contenedor'>";
        echo "<h5>Agregar Programa</h5>";
        include '../php/insertarArticulo.php';
        echo "</div>";
    } else {
        echo "<div style='text-align: center; margin: 50px auto; color: white;'>";
        echo "<p><strong>Inicia sesión para agregar programas.</strong></p>";
        echo "</div>";
    }
    ?>
    <?php include 'panel/footer.php'; ?>
</body>
</html>
