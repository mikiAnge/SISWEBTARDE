<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/style_lista.css">
    <title>Document</title>
</head>
<body>
    <?php include 'panel/nav_bar.php'; ?>
    <h2>Lista de Programas de television</h2>
    <?php
    if (isset($_SESSION['nombre_usuario'])) {
    include '../php/listarArticulo.php';
    ?>
    <form id="boxComentarios" action="../php/insertarComentario.php" method="POST" >
        <textarea name="mensaje" placeholder="Escribe tu comentario aquí..." required></textarea>
        <input type="hidden" name="id_usuario" value="<?php $id_usuario?>">
        <button type="submit">Enviar comentario</button>
    </form>
    <?php
    include '../php/mostrarComentario.php';
    include 'panel/footer.php';
    }else{
        echo "<div style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border: 1px solid black; padding: 20px; background-color: white; text-align: center'><p style='font-weight: bold; color:#9d1d36' >INICIA SESION PARA VER LA LISTA DE PROGRAMAS <br></p></div>";
    }
    ?>


</body>
</html>
