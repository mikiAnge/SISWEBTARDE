<?php
include "../data/conexion.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$canal = $_POST['canal'];
$fecha_estreno = $_POST['fecha_estreno'];
$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE programas SET titulo='$titulo', genero='$genero', canal='$canal', fecha_estreno='$fecha_estreno', duracion='$duracion', descripcion='$descripcion' 
WHERE id=$id";

if ($conn->query($sql) === TRUE) { 
    echo "Registro actualizado correctamente";
    header("Location: ../view/listar_datos.php"); exit();
}else {
    echo "Error actualizando el registro: ". $conn->error;
}
?>