<?php
include '../data/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];
    
    $sql = "INSERT INTO programas (titulo, genero, canal, fecha_estreno, duracion, descripcion) 
    VALUES ('$titulo', '$genero', '$canal', '$fecha_estreno', '$duracion', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }

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
    <h2>ingrese los datos de un nuevo programa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="">Nombre del programa</label>
        <input type="text" name="titulo" required placeholder="Escriba el nombre del programa"><br><br>

        <label for="">Genero</label>
        <input type="text" name="genero" required placeholder="Escriba el genero del programa"><br><br>

        <label for="">Canal</label>
        <input type="text" name="canal" required placeholder="Escriba el canal del programa"><br><br>

        <label for="">Fecha de estreno</label>
        <input type="date" name="fecha_estreno" required><br><br>

        <label for="">Duración</label>
        <input type="time" name="duracion" required><br><br>

        <label for="">Descripción</label>
        <textarea name="descripcion" required placeholder="Describe las caracteristicas del programa"></textarea><br><br>
        
        <input type="submit" value="agregar programa">
    </form>
</body>
</html>