<?php
session_start();

// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "programastelevisivos");

// Verificar si la conexión fue exitosa
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

// Procesar el formulario de login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Verificar si la contraseña es correcta
        if ($password == $usuario['password']) {
            // Iniciar sesión
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            header("Location: ../inicio.php"); // Redirigir a inicio.php si el login es exitoso
            exit();
        } else {
            // Contraseña incorrecta
            header("Location: ../index.php?login=error_contraseña");
            exit();
        }
    } else {
        // Usuario no encontrado
        header("Location: ../index.php?login=error_usuario");
        exit();
    }
}
?>
