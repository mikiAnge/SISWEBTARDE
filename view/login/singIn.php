<?php include '../panel/nav_bar.php';?>
<form action="/php/login/validarUser.php" method="post">
    <label for="">Usuario</label>
    <input type="text" placeholder="Nombre de Usuario" name="username">
    <label for="">Contraseña</label>
    <input type="password" placeholder="Escribe tu contraseña" name="contrasena">
    <input type="submit" value="Iniciar Sesión">
</form>
<?php include '../panel/footer.php';?>

