<?php
include '../data/conexion.php';
// Obtener los comentarios con el nombre del usuario
$sql = "SELECT c.mensaje, c.fecha, u.nombre AS nombre_usuario, u.email AS correo_Electronico
        FROM comentarios c
        INNER JOIN usuarios u ON c.id_usuario = u.id_usuario
        ORDER BY c.fecha DESC";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; border-radius: 5px; margin: 0 auto; width: 75%; text-align: center;'>";
        echo "<p style='font-weight: bold;'>" . strtoupper(htmlspecialchars($row['nombre_usuario'])) . " <small style='font-size: 0.8em; color: #999;'>(" . htmlspecialchars($row['correo_Electronico']) . ")</small></p>";
        echo "<p style='font-size: 1em; color: #666;'>" . htmlspecialchars($row['mensaje']) . "</p>";
        echo "<p style='font-size: 0.8em; color: #999;'><small>Publicado el: " . $row['fecha'] . "</small></p>";
        echo "</div><hr style='border: 1px solid #ccc;'>";
    }
} else {
    echo "No hay comentarios.";
}

$conn->close();
?>
