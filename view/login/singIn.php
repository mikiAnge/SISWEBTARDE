<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<?php include '../panel/nav_bar.php';?>
<main>
    <div style="display: grid">
<form action="/php/login/validarUser.php" method="post">
    <label for="">Usuario</label>
    <input type="text" placeholder="Nombre de Usuario" name="username">
    <label for="">Contraseña</label>
    <input type="password" placeholder="Escribe tu contraseña" name="contraseña">
    <input type="submit" value="Iniciar Sesión">
</form>
</div>
</main>