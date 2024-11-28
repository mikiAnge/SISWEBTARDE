<?php
include '../data/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $sql = "DELETE FROM programas WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo ("Artículo Eliminado exitosamente");
    } else {
        echo "Error al eliminar el artículo: ".$conn->error;
    }

    header("Location: ../view/listar_datos.php");
    exit();
}
$conn->close();
?>