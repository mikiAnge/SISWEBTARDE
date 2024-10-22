<?php
/** Todo el codigo php aqui */
include '../data/conexion.php';
// Obtenemos el id enviado por get
$id = $_GET['id'];
// Consulta sql para obtener el dato mediante el id
$sql = "SELECT titulo,genero,canal,fecha_estreno,duracion,descripcion FROM  programas WHERE id = $id";
// Ejecutamos la consulta
$result = $conn->query($sql);
// Guardamos el resultado formateado en otra variable
$row = $result->fetch_assoc();
?>
<!-- Todo el codigo html aqui-->
 <form action="../data/actualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="">Titulo:</label>
    <input type="text" name="titulo" value="<?php echo $row['titulo'];?>"><br><br>    
    <label for="">Genero:</label>
    <input type="text" name="genero" value="<?php echo $row['genero'];?>"><br><br>
    <label for="">Canal:</label>
    <input type="text" name="canal" value="<?php echo $row['canal'];?>"><br><br>
    <label for="">Fecha Estreno:</label>
    <input type="text" name="fecha_estreno" value="<?php echo $row['fecha_estreno'];?>"><br><br>
    <label for="">Duración:</label>
    <input type="text" name="duracion" value="<?php echo $row['duracion'];?>"><br><br>
    <label for="">Descripción:</label>
    <input type="text" name="descripcion" value="<?php echo $row['descripcion'];?>"><br><br>

    <input type="submit" value="Actualizar">
 </form>
 <?php
 $conn->close();
 ?>