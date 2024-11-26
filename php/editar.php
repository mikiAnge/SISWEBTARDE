<?php
    include '../data/conexion.php';
    include '../view/panel/nav_bar.php';
    $id = $_GET['id'];
    // Consulta sql para obtener el dato mediante el id
    $sql = "SELECT titulo, genero, descripcion FROM  programas WHERE id = $id";
    // Ejecutamos la consulta
    $result = $conn->query($sql);
    // Guardamos el resultado formateado en otra variable
    $row = $result->fetch_assoc();
?>
<!-- Todo el codigo html aqui-->
<div class="formularios">
    <form action="../data/actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"> <br><br>
        <label for="genero">Género:</label>
        <input type="text" name="genero" value="<?php echo $row['genero']; ?>"> <br><br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>"> <br><br>
        <input type="submit" value="Actualizar">
    </form>
</div>
<?php
    $conn->close();
?>
<?php include '../view/panel/footer.php';?>