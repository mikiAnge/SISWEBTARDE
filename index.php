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
<body class ="bg-primary">
    <div class="container bg-primary">
        
        <?php if (isset($_GET['registro']) && $_GET['registro'] == 'exito') { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Éxito</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Usuario creado exitosamente.
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
                        Usuario no encontrado. Por favor, verifica tus credenciales.
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
                        Contraseña incorrecta. Intenta nuevamente.
                    </div>
                </div>
            </div>
        <?php } ?>

       
        <?php if (isset($_GET['logout']) && $_GET['logout'] == 'exito') { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Sesión cerrada</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Has cerrado sesión correctamente.
                    </div>
                </div>
            </div>
        <?php } ?>

        
        <?php if (!isset($_SESSION['usuario_id'])) { ?>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <h4>Iniciar sesión</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="data/login.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-warning w-100">Ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Registrar nuevo usuario</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="data/registro.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-warning w-100">Registrar</button>
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
