<?php
include '../data/conexion.php';

// Capturamos y verificamos la información enviado por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los valores del formulario
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];

    // Preparamos la consulta SQL de inserción
    $sql = "INSERT INTO programas (titulo, genero, canal, fecha_estreno, duracion, descripcion) VALUES ('$titulo', '$genero', '$fecha', '$duracion', '$descripcion')";

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
    <title>Insertar Programa</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #cebce3;
            margin: 150px;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="date"], textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            width: calc(100% - 24px);
        }
        input[type="submit"] {
            padding: 10px 15px;
            border: none;
            background: #6a1ac7;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #b5a5c7;
        }
    </style>
    <h2>Insertar nuevo Programa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="">Título: </label>
        <input type="text" name="titulo" required placeholder="Escriba el título del Programa"><br><br>
        <label for="">Género:</label>
        <input type="text" name="genero" required placeholder="Escriba el género del Programa"><br><br>
        <label for="">Canal:</label>
        <input type="text" name="canal" required placeholder="Escriba el canal del Programa"><br><br>
        <label for="">Fecha:</label>
        <input type="date" name="fecha_estreno" required placeholder="Escriba la fecha de estreno del Programa"><br><br>
        <label for="">Duración:</label>
        <input type="text" name="titulo" required placeholder="Escriba la duración del Programa"><br><br>
        <label for="">Descripción:</label>
        <textarea name="descripcion" placeholder="Escriba un pequeño resumen del Programa"></textarea><br><br>
        <input type="submit" value="Insertar Datos">
    </form>
</body>
</html>