<?php
include "../data/conexion.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "UPDATE articulos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' 
WHERE id=$id";
// Verificamos que la consulta realize algun cambio en la tabla
if ($conn->query($sql) === TRUE) { 
    echo "Registro actualizado correctamente";
    // volver a la pagina de lista de datos
    header("Location: ../php/listarArticulos.php"); exit();
}else {
    echo "Error actualizando el registro: ". $conn->error;
}
?>