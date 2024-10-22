<?php
// Datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programastelevisivos"; //mi bd

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>  
