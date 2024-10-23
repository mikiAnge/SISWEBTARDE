<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos Recepcionados Correctamente</h1>
    <p>Nombre: <?php echo htmlspecialchars($_GET['nombre']); ?> </p>
    <p>Edad: <?php echo (int)($_GET['edad']); ?> </p>
</body>
</html>