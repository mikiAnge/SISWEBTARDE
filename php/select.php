<?php

include '../data/conexion.php';

$sql = "SELECT id, titulo, genero, canal, fecha_estreno , duracion , descripcion FROM programas";
$result = $conn->query($sql);


?>