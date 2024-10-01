<?php
include '../data/conexion.php';

// Capturamos y verificamos la información enviado por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los valores del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Preparamos la consulta SQL de inserción
    $sql = "INSERT INTO articulos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

    // Ejecutamos la consulta y verificamos si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }

    // Cerramos la conexion
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Insertar Nuevo Artículo</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">Nombre del Articulo</label>
        <input type="text" name="nombre" required placeholder="Escriba el nombre del Articulo"><br><br>
        <label for="">Descripción</label>
        <textarea name="descripcion" placeholder="Describe las caracteristicas del articulo"></textarea><br><br>
        <label for="">Precio</label>
        <input type="number" step="0.01" name="precio" required><br><br>
        <input type="submit" value="Insertar Datos">
    </form>
</body>
</html>