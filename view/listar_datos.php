<?php
include '../php/listarArticulos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Listar Programas</title>
</head>
<body>
    <h1>Programas Televisivos</h1>
    <a href="operaciones.php">Agregar Nuevo Programa</a>
    <table>
        <tr>
            <th>Título</th>
            <th>Género</th>
            <th>Canal</th>
            <th>Fecha Estreno</th>
            <th>Duración</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($programas as $programa): ?>
        <tr>
            <td><?= $programa['titulo'] ?></td>
            <td><?= $programa['genero'] ?></td>
            <td><?= $programa['canal'] ?></td>
            <td><?= $programa['fecha_estreno'] ?></td>
            <td><?= $programa['duracion'] ?></td>
            <td><?= $programa['descripcion'] ?></td>
            <td>
                <a href="../data/eliminar.php?id=<?= $programa['id'] ?>">Eliminar</a>
                <a href="../php/editarArticulo.php?id=<?php echo $programa['id']; ?>">Editar</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
