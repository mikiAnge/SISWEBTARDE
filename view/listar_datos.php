<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'panel/nav_bar.php'; ?>
    <h2>Lista de Articulos de tienda</h2>
    <?php
    if (isset($_SESSION['nombre_usuario'])) {
    include '../php/listarArticulos.php';
    include 'panel/footer.php';
    }
    ?>
</body>
</html>
