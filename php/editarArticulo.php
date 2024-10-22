<?php
include '../data/conexion.php';

$id = $_GET['id'];

$sql = "SELECT titulo, genero, canal, fecha_estreno, duracion, descripcion FROM programas WHERE id = $id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>
 <form action="../data/actualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label for="">Titulo:</label>
    <input type="text" name="titulo" value="<?php echo $row['titulo'];?>"><br><br>

    <label for="">Genero:</label>
    <input type="text" name="genero" value="<?php echo $row['genero'];?>"><br><br>

    <label for="">Canal:</label>
    <input type="text" name="canal" value="<?php echo $row['canal'];?>"><br><br>

    <label for="">Fecha de estreno:</label>
    <input type="date" name="fecha_estreno" value="<?php echo $row['fecha_estreno'];?>"><br><br>

    <label for="">Duracion:</label>
    <input type="time" name="duracion" value="<?php echo $row['duracion'];?>"><br><br>

    <label for="">Descripción:</label>
    <textarea name="descripcion" value="<?php echo $row['descripcion'];?>"></textarea><br><br>
    
    <input type="submit" value="Actualizar">
 </form>

 <?php
 $conn->close();
 ?>
