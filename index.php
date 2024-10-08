<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'view/panel/nav_bar.php'; ?>
    <h1>Lo de aqui abajo es codigo php, incluido en HTML</h1>
    <?php echo '<p>Hello World</p>'; ?>
    <button><a href="/view/operaciones.php">Operaciones</a></button><br><br>
    <button><a href="/view/formulario.html">Formulario de Datos</a></button>
    <button><a href="/view/listar_datos.php">Listar Datos</a></button>
</body>
</html>