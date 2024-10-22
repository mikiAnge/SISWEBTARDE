<?php
// Incluir el archivo de conexión
include '../data/conexion.php';

// Consulta para obtener los datos de la tabla `usuarios`
$sql = "SELECT id, titulo, genero, canal, fecha_estreno , duracion , descripcion FROM programas";
$result = $conn->query($sql);


?>