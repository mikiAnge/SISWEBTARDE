<?php
include '../data/conexion.php';
// Capturamos y verificamos la información enviado por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los valores del formulario
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];
    // Preparamos la consulta SQL de inserción
    $sql = "INSERT INTO programas (titulo, genero,canal,fecha_estreno,duracion, descripcion) VALUES ('$titulo', '$genero', '$canal', '$fecha_estreno', '$duracion', '$descripcion')";
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
    <h2>Insertar Nuevo Programa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">Titulo del Programa</label>
        <input type="text" name="titulo" required placeholder="Escriba el titulo del programa"><br><br>
        <label for="">Genero</label>
        <input type="text" name="genero" required placeholder="Escriba el genero del programa"><br><br>
        <label for="">Canal</label>
        <input type="text" name="canal" required placeholder="Escriba el canal del programa"><br><br>
        <label for="">Fecha Estreno</label>
        <input type="text" name="fecha_estreno" required placeholder="Escriba la fecha de estreno del programa"><br><br>
        <label for="">Duración</label>
        <input type="text" name="duracion" required placeholder="Escriba la duracion del programa"><br><br>
        <label for="">Descripción</label>
        <textarea name="descripcion" placeholder="Describe las caracteristicas del programa"></textarea><br><br>
        <input type="submit" value="Insertar Datos">
    </form>
</body>
</html>