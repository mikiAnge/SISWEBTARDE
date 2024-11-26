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
        echo "Registro exitoso";
        echo "<br>";
        echo "<a class='button button2' href='../view/listarDatos.php' class='btn btn-primary'>Volver</a> ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/body.css">
    <link rel="stylesheet" href="../public/css/tabla.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/formulario.css">
</head>
<body>
<?php include './panel/navbar.php'; ?>
  <center><h1>Añadir Peliculas a la de Netflix</h1></center>  
    
    <div class="divform">
    <form action="formulario.php" method="POST">
  <label for="titulo">Titulo</label>
  <input type="text" id="titulo" name="titulo">
  
  <label for="genero">Genero</label>
  <input type="text" id="genero" name="genero">
  
  <label for="canal">Canal</label>
  <input type="text" id="canal" name="canal">
  
  <label for="fecha_estreno">Fecha de Estreno</label>
  <input type="date" id="fecha_estreno" name="fecha_estreno">
  
  <label for="duracion">Duracion</label>
  <input type="number" id="duracion" name="duracion">
  
  <label for="descripcion">Descripcion</label>
  <input type="text" id="descripcion" name="descripcion">

  <input type="submit" value="Registrar">
</form>

      </div>
</body>
</html>