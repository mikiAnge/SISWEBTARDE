<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];

    $stmt = $pdo->prepare("UPDATE Programas SET titulo = ?, genero = ?, canal = ?, fecha_estreno = ?, duracion = ?, descripcion = ? WHERE id = ?");
    $stmt->execute([$titulo, $genero, $canal, $fecha_estreno, $duracion, $descripcion, $id]);

    header("Location: ../view/listar_datos.php");
}
?>
