<?php
session_start();

if (isset($_SESSION['usuario_id'])) {

    header("Location: inicio.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class ="bg-danger">
    <div class="container bg-danger">
        
        <?php if (isset($_GET['registro']) && $_GET['registro'] == 'exito') { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Éxito</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Usuario creado.
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['login']) && $_GET['login'] == 'error_usuario') { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Error</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        EL USUARIO NO EXISTE.
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['login']) && $_GET['login'] == 'error_contraseña') { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Error</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Contraseña incorrecta.
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['logout']) && $_GET['logout'] == 'exito') { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">SESION CERRADA</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        CERRASTE SESION
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (!isset($_SESSION['usuario_id'])) { ?>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    
                    <div class="card mb-4 bg-secondary">
                        <div class="card-header text-center">
                            <h4>INICIAR CUENTA DE NETFLIX</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="data/login.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">USUARIO</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">CONTRASEÑA</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-dark w-100">INGRESAR</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    
                    <div class="card bg-secondary">
                        <div class="card-header text-center">
                            <h4>CREAR CUENTA DE NETFLIX</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="data/registro.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">USUARIO</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">CONTRASEÑA</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-dark w-100">CREAR CUENTA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { 
            header('Location: inicio.php');
     } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
