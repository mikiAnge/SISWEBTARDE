<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style_lista.css">
</head>
<?php include '../panel/nav_bar2.php';?>

<form action="/php/login/insertarUsuario.php" method="post">
    <label for="">Correo Electronico</label>
    <input type="email" placeholder="Correo@mail.com" name="email">
    <label for="">Usuario</label>
    <input type="text" placeholder="Nombre de Usuario" name="nombre">
    <label for="">Contraseña</label>
    <input type="password" placeholder="Escribe tu contraseña" name="password">
    <input type="submit" value="Registrar Usuario">
</form>
<?php include '../panel/footer.php';?>