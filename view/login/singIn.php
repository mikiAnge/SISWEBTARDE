<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style_lista.css">
</head>
<?php include '../panel/nav_bar2.php';?>

<form action="/php/login/validarUser.php" method="post">
    <label for="">Usuario</label>
    <input type="text" placeholder="Nombre de Usuario" name="nombre">
    <label for="">Contraseña</label>
    <input type="password" placeholder="Escribe tu contraseña" name="password">
    <input type="submit" value="Iniciar Sesión">
</form>
<?php include '../panel/footer.php';?>