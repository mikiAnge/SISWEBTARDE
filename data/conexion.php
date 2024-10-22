<?php
$host = 'localhost';
$db = 'ProgramasTelevisivos';
$user = 'root'; // Cambia esto si tienes otro usuario
$pass = ''; // Cambia esto si tienes contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>
