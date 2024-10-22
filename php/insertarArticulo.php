<?php
include '../data/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];

    $stmt = $pdo->prepare("INSERT INTO Programas (titulo, genero, canal, fecha_estreno, duracion, descripcion) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$titulo, $genero, $canal, $fecha_estreno, $duracion, $descripcion]);

    header("Location: ../view/listar_datos.php");
}
?>
