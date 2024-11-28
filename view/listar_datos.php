<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/style_lista.css">
    <title>Lista de Programas</title>
</head>
<body>
    <?php include 'panel/nav_bar.php'; ?>

    <h2>Lista de Programas de Televisión</h2>

    <div class="program-list">
        <?php
        // Conectar a la base de datos
        include '../data/conexion.php';

        // Consultar los programas
        $sql = "SELECT id, titulo, genero, canal, fecha_estreno, duracion, descripcion FROM programas";
        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<img src='../public/img/default.jpg' alt='{$row['titulo']}'>"; // Imágenes opcionales
                echo "<h3>{$row['titulo']}</h3>";
                echo "<p><strong>Género:</strong> {$row['genero']}</p>";
                echo "<p><strong>Canal:</strong> {$row['canal']}</p>";
                echo "<p><strong>Fecha de Estreno:</strong> {$row['fecha_estreno']}</p>";
                echo "<p><strong>Duración:</strong> {$row['duracion']} minutos</p>";
                echo "<p><strong>Descripción:</strong> {$row['descripcion']}</p>";

                // Botones de acción
                echo "<div class='action-buttons'>";
                echo "<a href='editar_datos.php?id={$row['id']}'>Editar</a>";
                echo "<a href='../data/eliminar.php?id={$row['id']}' onclick=\"return confirm('¿Estás seguro de eliminar este programa?');\">Borrar</a>";
                echo "</div>";

                echo "</div>"; // Fin de la tarjeta
            }
        } else {
            echo "<p>No hay programas para mostrar.</p>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>

    <div id="boxComentarios">
        <h3>Deja tu comentario</h3>
        <form action="../php/insertarComentario.php" method="POST">
            <textarea name="mensaje" placeholder="Escribe tu comentario aquí..." required></textarea>
            <button type="submit">Enviar Comentario</button>
        </form>
    </div>

    <?php include 'panel/footer.php'; ?>
</body>
</html>
