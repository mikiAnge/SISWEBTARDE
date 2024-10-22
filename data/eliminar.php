<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM programas WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente";
            echo "<br>";
        echo "<a class='button button2' href='../view/listarDatos.php' class='btn btn-primary'>Volver</a> ";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();
?>
