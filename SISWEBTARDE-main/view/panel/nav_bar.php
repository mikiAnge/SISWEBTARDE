<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/navfoot.css">
</head>

<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="/index.php">MiSitio</a>
    
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="/index.php">Inicio</a></li>
      <li class="nav-item"><a class="nav-link" href="/view/listar_datos.php">Ver Datos</a></li>
      <li class="nav-item"><a class="nav-link" href="/view/insertar_datos.php">Insertar Datos</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
      <ul class="menu">
        <?php 
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        if (isset($_SESSION['nombre_usuario'])) { ?>
          
          <h1><?php echo $_SESSION['nombre_usuario']; ?></h1>
          <a href="/data/cerrar_sesion.php" >Cerrar Sesion</a>
        <?php } else{?>
          <li class="nav-item"><a class="nav-link" href="/view/login/singIn.php">Iniciar Session</a></li>
          <li class="nav-item"><a class="nav-link" href="/view/login/singUp.php">Registrarse</a></li>
        
          <?php } ?> 
      </ul>
    </ul>
  </div>
</nav>
