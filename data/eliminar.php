<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM Programas WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: ../view/listar_datos.php");
}
?>
