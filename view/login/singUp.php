<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style_lista.css">
    <link rel="stylesheet" href="../../public/css/style_login.css">
</head>
<?php include '../panel/nav_bar2.php';?>

<div class="contenedor">
    <h5>REGISTRARSE</h5>
    <form action="/php/login/insertarUsuario.php" method="post">
        <div class="campo">
            <label for="">Correo Electronico</label>
            <input type="email" placeholder="Correo@mail.com" name="email" required>
        </div>
        <div class="campo">
            <label for="">Usuario</label>
            <input type="text" placeholder="Nombre de Usuario" name="nombre" required>
        </div>
        <div class="campo">
            <label for="">Contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña" name="password" required>
        </div>
        <input type="submit" value="Registrar Usuario">
    </form>
</div>

<?php include '../panel/footer.php';?>