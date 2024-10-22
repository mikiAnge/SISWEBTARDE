<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT titulo, genero, canal, fecha_estreno, duracion, descripcion FROM programas WHERE id = $id";
    $result = $conn->query($sql);

    if (!$result) {
        echo "Error en la consulta: " . $conn->error;
        exit();
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No se encontraron registros";
        exit();
    }
} else {
    echo "ID no proporcionado.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/tabla.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/formulario.css">
</head>
<body>
<?php include '../view/panel/navbar.php'; ?>
<center><h1>Formulario Para Editar Programas</h1></center>  

<div class="divform">
    <form action="../php/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo htmlspecialchars($row['titulo']); ?>" required>

        <label for="genero">Genero</label>
        <input type="text" id="genero" name="genero" value="<?php echo htmlspecialchars($row['genero']); ?>" required>

        <label for="canal">Canal</label>
        <input type="text" id="canal" name="canal" value="<?php echo htmlspecialchars($row['canal']); ?>" required>

        <label for="fecha_estreno">Fecha de Estreno</label>
        <input type="date" id="fecha_estreno" name="fecha_estreno" value="<?php echo htmlspecialchars($row['fecha_estreno']); ?>" required>

        <label for="duracion">Duracion</label>
        <input type="number" id="duracion" name="duracion" value="<?php echo htmlspecialchars($row['duracion']); ?>" required>

        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" value="<?php echo htmlspecialchars($row['descripcion']); ?>" required>

        <input type="submit" value="Actualizar">
    </form>
</div>
</body>
</html>
