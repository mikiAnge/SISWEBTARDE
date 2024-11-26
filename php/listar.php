<?php
    include '../data/conexion.php';
    include "../data/proteger_pagina.php";

    $sql = "SELECT id, titulo, genero, canal, fecha_estreno, duracion, descripcion FROM programas";
    $result = $conn->query($sql);
?>
<body>
    <?php include '../view/panel/nav_bar.php'; ?>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Título</th><th>Género</th><th>Descripción</th><th>Acciones</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["titulo"]."</td><td>".$row["genero"]."</td><td>".$row["descripcion"]."</td><td>"
                ."<a href='editar.php?id=".$row["id"]."'> Editar </a><br><br>"
                ."<a href='../data/eliminar.php?id=".$row["id"]."' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este artículo?');\"> Eliminar </a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "Consulta Vacia";
        }
            $conn->close();
        ?>
    </div>
    <?php include '../view/panel/footer.php'; ?>
</body>


