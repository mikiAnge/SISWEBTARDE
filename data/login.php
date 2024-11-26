<?php
session_start();


$mysqli = new mysqli("localhost", "root", "", "programastelevisivos");


if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        
        if ($password == $usuario['password']) {
            
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            header("Location: ../inicio.php"); 
            exit();
        } else {
            
            header("Location: ../index.php?login=error_contraseña");
            exit();
        }
    } else {
        
        header("Location: ../index.php?login=error_usuario");
        exit();
    }
}
?>
