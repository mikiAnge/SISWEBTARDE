<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Obtener el ID del usuario a eliminar
$id = $_GET['id'];

// Preparar la consulta SQL para eliminar el registro
$sql = "DELETE FROM programas WHERE id=$id";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente";
            echo "<br>";
        echo "<a class='button button2' href='../view/listarDatos.php' class='btn btn-primary'>Volver</a> ";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
