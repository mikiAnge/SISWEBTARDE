<?php
include "../data/conexion.php";
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$canal = $_POST['canal'];
$fecha_estreno = $_POST['fecha_estreno'];
$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];
$sql = "UPDATE programas SET titulo='$titulo', genero='$genero',canal='$canal',fecha_estreno='$fecha_estreno', duracion='$duracion', descripcion='$descripcion' 
WHERE id=$id";
// Verificamos que la consulta realize algun cambio en la tabla
if ($conn->query($sql) === TRUE) { 
    echo "Registro actualizado correctamente";
    // volver a la pagina de lista de datos
    header("Location: ../php/listarprogramas.php"); exit();
}else {
    echo "Error actualizando el registro: ". $conn->error;
}
?>