<?php
session_start();
include('../data/conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comentario = $_POST['comentario'];
    $usuario_id = $_SESSION['usuario_id'];

    $query = "INSERT INTO comentarios (comentario, usuario_id) VALUES ('$comentario', '$usuario_id')";
    if ($conn->query($query) === TRUE) {
        $comentario_success = "Comentario publicado";
    } else {
        $comentario_error = "Error: " . $conn->error;
    }
}

$query = "SELECT c.id_comentario, c.comentario, c.fecha, u.username FROM comentarios c 
          JOIN usuarios u ON c.usuario_id = u.usuario_id ORDER BY c.fecha DESC";
$result = $conn->query($query);
?>
