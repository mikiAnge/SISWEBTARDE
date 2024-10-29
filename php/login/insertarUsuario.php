<?php
include('../../data/conexion.php');

// Verificamos que se recibio los datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Funcion que encripta la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Usar declaraciones por separado para evitar inyeciones de codigo SQL
    $stmt = $conn->prepare("INSERT INTO usuario (username, correo, contraseña) VALUES (?,?,?)");
    $stmt ->bind_param("sss",$username,$correo,$contraseña_hash);

    if ($stmt->execute()) {
        echo "Datos insertados exitosamente";
    } else {
        echo "Error al insertar los datos: ".$stmt->error;
    }
    //Cerramos la segunda conexion abierta
    $stmt->close();
}
$conn->close();//Cerramos la primera conexion abierta
?>