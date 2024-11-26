<?php
session_start();
include('../data/conexion.php');

if (!isset($_SESSION['usuario_id'])) {
    header('Location: inicio.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mensaje = $_POST['mensaje'];
    $id_usuario = $_SESSION['usuario_id'];

    $query = "INSERT INTO comentarios (mensaje, id_usuario) VALUES ('$mensaje', '$id_usuario')";
    if ($conn->query($query) === TRUE) {
        $mensaje_success = "Comentario publicado";
    } else {
        $mensaje_error = "Error: " . $conn->error;
    }
}

$query = "SELECT c.id_msg, c.mensaje, c.fecha, u.username FROM comentarios c 
          JOIN usuarios u ON c.id_usuario = u.id_usuario ORDER BY c.fecha DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/banner.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/body.css">
</head>
<body>
<?php include '../view/panel/navbar.php'; ?>
<?php include '../view/panel/banner.php'; ?>
    <div class="container mt-5">
        <h2>Ingresa Un Comentario</h2>
        
        <!-- Toast de éxito (al publicar comentario) -->
        <?php if (isset($mensaje_success)) { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Éxito</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <?php echo $mensaje_success; ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Toast de error -->
        <?php if (isset($mensaje_error)) { ?>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">Error</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <?php echo $mensaje_error; ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <form method="POST" class="mb-4">
            <div class="form-floating">
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                <label for="mensaje">Escribe tu comentario</label>
            </div>
            <button type="submit" class="btn btn-primary mt-2 w-100">Comentar</button>
        </form>

        <h3>Comentarios Recientes</h3>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="border p-3 mb-3 rounded">
                <p><strong><?php echo $row['username']; ?></strong> dijo:</p>
                <p><?php echo $row['mensaje']; ?></p>
                <p>Se Ingreso el dia : <?php echo $row['fecha']; ?></p>
            </div>
        <?php } ?>
    </div>
    <?php include '../view/panel/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>