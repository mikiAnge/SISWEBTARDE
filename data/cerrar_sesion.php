<?php
session_start();
// reemplaza los datos viejos por esto
$_SESSION = array();

// Destruimos la session anterior, tambien se debe eliminar la cookie de la session
if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]);
}

session_destroy();

// redirigir a pagina de login
header("Location: /view/login/singIn.php");
exit();
?>