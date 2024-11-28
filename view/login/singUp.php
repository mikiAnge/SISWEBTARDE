<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style_lista.css">
    <link rel="stylesheet" href="../../public/css/style_login.css">
    <title>Registrarse</title>
</head>
<?php include '../panel/nav_bar2.php'; ?>

<div class="contenedor">
    <h5>Registrarse</h5>
    <form action="/php/login/insertarUsuario.php" method="post">
        <div class="campo">
            <label for="email">Correo Electrónico</label>
            <input type="email" placeholder="Correo@mail.com" name="email" required>
        </div>
        <div class="campo">
            <label for="nombre">Usuario</label>
            <input type="text" placeholder="Nombre de Usuario" name="nombre" required>
        </div>
        <div class="campo">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña" name="password" required>
        </div>
        <input type="submit" value="Registrar Usuario">
    </form>
</div>

<?php include '../panel/footer.php'; ?>
