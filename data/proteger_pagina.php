<?php
// Iniciar Session
session_start();

// Funcion para proteger páginas
function proteger() {
    if (!isset($_SESSION['usuario_id'])){
        header("Location: /view/login/singIn.php");
        exit();
    }
}
?>