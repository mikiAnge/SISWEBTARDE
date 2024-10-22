<?php
include '../data/conexion.php';
$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM Programas WHERE id = ?");
    $stmt->execute([$id]);
    $programa = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <title><?= $id ? 'Editar Programa' : 'Agregar Programa' ?></title>
</head>
<body>
    <h1><?= $id ? 'Editar Programa' : 'Agregar Programa' ?></h1>
    <form action="<?= $id ? '../data/actualizar.php' : '../php/insertarArticulo.php' ?>" method="POST">
        <?php if ($id): ?>
            <input type="hidden" name="id" value="<?= $programa['id'] ?>">
        <?php endif; ?>
        
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $id ? htmlspecialchars($programa['titulo']) : '' ?>" required>
        
        <label for="genero">Género:</label>
        <input type="text" name="genero" id="genero" value="<?= $id ? htmlspecialchars($programa['genero']) : '' ?>">
        
        <label for="canal">Canal:</label>
        <input type="text" name="canal" id="canal" value="<?= $id ? htmlspecialchars($programa['canal']) : '' ?>">
        
        <label for="fecha_estreno">Fecha Estreno:</label>
        <input type="date" name="fecha_estreno" id="fecha_estreno" value="<?= $id ? $programa['fecha_estreno'] : '' ?>" required>
        
        <label for="duracion">Duración (minutos):</label>
        <input type="number" name="duracion" id="duracion" value="<?= $id ? $programa['duracion'] : '' ?>" required>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required><?= $id ? htmlspecialchars($programa['descripcion']) : '' ?></textarea>
        
        <button type="submit"><?= $id ? 'Actualizar Programa' : 'Agregar Programa' ?></button>
    </form>
    
    <a href="listar_datos.php">Volver a la lista</a>
</body>
</html>
