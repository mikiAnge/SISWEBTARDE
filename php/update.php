<?php
include '../data/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $canal = $_POST['canal'];
    $fecha_estreno = $_POST['fecha_estreno'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];


    $sql = "UPDATE programas SET titulo='$titulo', genero='$genero', canal='$canal', fecha_estreno='$fecha_estreno', duracion='$duracion', descripcion='$descripcion' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
        echo "<br>";
        echo "<a class='button button2' href='../view/listarDatos.php' class='btn btn-primary'>Volver</a> ";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
