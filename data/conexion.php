<?php
$servername = "localhost";
$username = "root";
$password = ""; // Cambia la contraseña si la tienes configurada
$dbname = "programastelevisivos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión Fallida: " . $conn->connect_error);
}
?>
