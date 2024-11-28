<nav class="navbar">
    <div class="logo">
        <a href="index.php" class="brand">Mi Proyecto</a> <!-- Logo de tu proyecto -->
    </div>
    <ul class="nav-links">
        <li><a href="../listar_datos.php">Lista de Programas</a></li>
        <li><a href="../insertar_datos.php">Agregar Programa</a></li>
        <li><a href="#">Ayuda</a></li>
        <li><a href="#">Contactos</a></li>
    </ul>

    <div class="user-menu">
        <?php 
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        if (isset($_SESSION['nombre_usuario'])) { ?>
            <div class="user-info">
                <span><?php echo $_SESSION['nombre_usuario']; ?></span>
                <a href="/data/cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        <?php } else { ?>
            <a href="/view/login/singIn.php">Iniciar Sesión</a>
            <a href="/view/login/singUp.php">Registrarse</a>
        <?php } ?>
    </div>
</nav>
