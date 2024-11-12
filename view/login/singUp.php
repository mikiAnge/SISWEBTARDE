<?php include '../panel/nav_bar.php';?>
<form action="/php/login/insertarUsuario.php" method="post">
    <label for="">Correo Electronico</label>
    <input type="email" placeholder="Correo@mail.com" name="correo">
    <label for="">Usuario</label>
    <input type="text" placeholder="Nombre de Usuario" name="username">
    <label for="">Contraseña</label>
    <input type="password" placeholder="Escribe tu contraseña" name="contraseña">
    <input type="submit" value="Registrar Usuario">
</form>
<?php include '../panel/footer.php';?>