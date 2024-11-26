<?php
$host = 'localhost'; 
$usuario = 'root'; 
$contrasena = ''; 
$base_datos = 'programastelevisivos'; 



$conn = new mysqli($host, $usuario, $contrasena, $base_datos);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
