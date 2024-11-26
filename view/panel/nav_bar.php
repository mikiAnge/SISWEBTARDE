<head>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/navfoot.css">
    <link rel="stylesheet" href="../../public/css/fontello.css">
</head>

<header>
        <input type="checkbox" id="btm">
        <label for="btm" class="icon-article"></label>
        <nav class="menu">
            <ul>
                <li><a href="/index.php">HOME</a></li>
                <li class="subm"><a href="#">Programas<span class="icon-angle-double-down"></span></a>
                    <ul>
                        <li><a href="/php/listar.php">Lista de programas</a></li>
                        <li><a href="/php/insertar.php">Insertar programas</a></li>
                    </ul>
                </li>
                <li class="subm"><a href="/php/comentarios.php">Comentarios</a></li>
                <li class="subm"><a href="#">Usuario<span class="icon-angle-double-down"></span></a>
                    <ul>
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
                </li>
            </ul>
        </nav>
    </header>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/banav.js"></script>
</body>
</html>