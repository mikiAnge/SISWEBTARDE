<?php
include('../../data/conexion.php');

// Verificamos que se recibio los datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Funcion que encripta la contraseña
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Usar declaraciones por separado para evitar inyeciones de codigo SQL
    $stmt = $conn->prepare("INSERT INTO usuarios (username, correo, contrasena) VALUES (?,?,?)");
    $stmt ->bind_param("sss",$username,$correo,$contrasena_hash);

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