<nav class="navbar">
    <ul>
        
        <li><a href="../listar_datos.php">Lista de programas televisivos</a></li>
        <li><a href="../insertar_datos.php">agregar programa televisivo</a></li>
        <li><a href="#">Ayuda</a></li>
        <li><a href="#">Contactos</a></li>



        <ul class="menu">
            <?php 
            if (session_status() == PHP_SESSION_NONE) { session_start(); }
            if (isset($_SESSION['nombre_usuario'])) { ?>
            
            <h1><?php echo $_SESSION['nombre_usuario']; ?></h1>
            <a href="/data/cerrar_sesion.php" >Cerrar Sesion</a>
            <?php } else{?>
            <li class="nav-item"><a class="nav-link" href="/view/login/singIn.php">Iniciar Sesion</a></li>
            <li class="nav-item"><a class="nav-link" href="/view/login/singUp.php">Registrarse</a></li>
            
            <?php } ?> 
      </ul>

    </ul>
</nav>