<?php
include '../data/conexion.php';

// Verificamos si se ha revibido el ID del articulo a eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Preparamos la consulta SQL para eliminar el articulo
    $sql = "DELETE FROM programas WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo ("Programa eliminado exitosamente");
    } else {
        echo "Error al eliminar el programa: ".$conn->error;
    }
    // Redirigimos a la vista de listar artículos
    header("Location: ../php/listar.php");
    exit();
}
$conn->close();
?>