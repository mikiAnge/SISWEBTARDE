<?php
include 'data/conexion.php'; // Asegúrate de que la ruta sea correcta

// Manejar la inserción de datos si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = new Conexion();
    $db = $conexion->getConnection();

    if ($db) {
        // Obtener los datos del formulario
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $canal = $_POST['canal'];
        $fecha_estreno = $_POST['fecha_estreno'];
        $duracion = $_POST['duracion'];
        $descripcion = $_POST['descripcion'];

        // Consulta para insertar un nuevo programa
        $query = "INSERT INTO Programas (titulo, genero, canal, fecha_estreno, duracion, descripcion) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$titulo, $genero, $canal, $fecha_estreno, $duracion, $descripcion]);

        // Redirigir a la página principal después de agregar
        header("Location: listar_datos.php"); // Ajusta la ruta según sea necesario
        exit;
    } else {
        echo "No se pudo conectar a la base de datos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Programa</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Agregar Nuevo Programa</h1>
    </header>

    <form method="POST" action="">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>

        <label for="canal">Canal:</label>
        <input type="text" id="canal" name="canal" required>

        <label for="fecha_estreno">Fecha Estreno:</label>
        <input type="date" id="fecha_estreno" name="fecha_estreno" required>

        <label for="duracion">Duración (minutos):</label>
        <input type="number" id="duracion" name="duracion" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>

        <button type="submit">Agregar Programa</button>
    </form>

    <footer>
        <a href="listar_datos.php">Volver a la lista</a>
    </footer>
</body>
</html>
