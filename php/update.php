<?php
// Incluir el archivo de conexión
include '../data/conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];

    // Preparar la consulta SQL para actualizar los datos
    $sql = "UPDATE programas SET titulo='$titulo', genero='$genero', canal='$canal', fecha_estreno='$fecha_estreno', duracion='$duracion', descripcion='$descripcion' WHERE id=$id";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
        echo "<br>";
        echo "<a class='button button2' href='../view/listarDatos.php' class='btn btn-primary'>Volver</a> ";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
