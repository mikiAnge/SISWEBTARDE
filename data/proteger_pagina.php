<?php

session_start();

function proteger() {
    if (!isset($_SESSION['usuario_id'])){
        header("Location: /view/login/singIn.php");
        exit();
    }
}