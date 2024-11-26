<?php
$host = 'localhost'; 
$usuario = 'root'; 
$contrasena = ''; 
$base_datos = 'programastelevisivos'; // Nombre de base de datos


// Crear la conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
