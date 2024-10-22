<?php
// Conectar a la base de datos
include '../data/conexion.php';

// Manejar la inserción del programa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];

    // Insertar el nuevo programa en la base de datos
    $insertQuery = "INSERT INTO Programas (titulo, genero, canal, fecha_estreno, duracion, descripcion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssssiis", $titulo, $genero, $canal, $fecha_estreno, $duracion, $descripcion);

    if ($stmt->execute()) {
        header("Location: ../view/listar_datos.php?mensaje=Programa agregado con éxito");
        exit();
    } else {
        echo "Error al agregar el programa: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Agregar Programa</title>
</head>
<body>
    <header>
        <h1>Agregar Programa</h1>
    </header>

    <div class="container">
        <form method="POST" action="">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="genero">Género</label>
            <input type="text" id="genero" name="genero" required>

            <label for="canal">Canal</label>
            <input type="text" id="canal" name="canal" required>

            <label for="fecha_estreno">Fecha de Estreno</label>
            <input type="date" id="fecha_estreno" name="fecha_estreno" required>

            <label for="duracion">Duración (minutos)</label>
            <input type="number" id="duracion" name="duracion" required>

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <button type="submit">Agregar Programa</button>
        </form>
    </div>
</body>
</html>
