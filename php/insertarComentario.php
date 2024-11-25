<?php
session_start();

include '../data/conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mensaje = $_POST['mensaje'];
    $id = $_SESSION['usuario_id'];
   
    /*

    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    echo "ID de usuario recibido: " . htmlspecialchars($id) . "<br>";
    echo "Mensaje recibido: " . htmlspecialchars($mensaje) . "<br>";
    */
    $sql = "INSERT INTO comentarios (mensaje, id_usuario) VALUES ('$mensaje', '$id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Comentario insertado exitosamente')";
    } else {
        echo "Error: " . $conn->error;
    }
    
    
    
}
$conn->close();
header("Location: ../view/listar_datos.php");
?>
    
