<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style_lista.css">
    <link rel="stylesheet" href="../../public/css/style_login.css">
</head>
<?php include '../panel/nav_bar2.php';?>

<div class="contenedor">
    <h5>INICIAR SESION</h5>
    <form action="/php/login/validarUser.php" method="post">
        <div class="campo">
            <label for="">Usuario</label>
            <input type="text" placeholder="Nombre de Usuario" name="nombre" required>
        </div>
        <div class="campo">
            <label for="">Contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña" name="password" required>
        </div>
        <input type="submit" value="Iniciar Sesión">
    </form>
</div>
<?php include '../panel/footer.php';?>