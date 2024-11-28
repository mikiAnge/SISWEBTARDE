<?php
include('../../data/conexion.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $contraseña_hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?,?,?)");
    $stmt ->bind_param("sss",$nombre,$email,$contraseña_hash);

    if ($stmt->execute()) {
        echo "<script>alert('Datos insertados exitosamente'); window.location.href='../../view/login/singIn.php';</script>";

    } else {
        echo "Error al insertar los datos: ".$stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>