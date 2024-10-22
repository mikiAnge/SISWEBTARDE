<?php
include "../data/conexion.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE programas SET titulo='$titulo', genero='$genero', descripcion='$descripcion' 
WHERE id=$id";
// Verificamos que la consulta realize algun cambio en la tabla
if ($conn->query($sql) === TRUE) { 
    echo "Programa actualizado correctamente";
    // volver a la pagina de lista de datos
    header("Location: ../php/listar.php"); exit();
}else {
    echo "Error actualizando el programa: ". $conn->error;
}
?>