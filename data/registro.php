<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
    if ($conn->query($query) === TRUE) {
        echo 'Usuario registrado correctamente. <a href="../index.php">Iniciar sesión</a>';
    } else {
        echo 'Error: ' . $conn->error;
    }
}
?>
