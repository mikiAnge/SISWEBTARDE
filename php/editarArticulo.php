<?php
/** Todo el codigo php aqui */
include '../data/conexion.php';
// Obtenemos el id enviado por get
$id = $_GET['id'];

// Consulta sql para obtener el dato mediante el id
$sql = "SELECT nombre,descripcion, precio FROM  articulos WHERE id = $id";
// Ejecutamos la consulta
$result = $conn->query($sql);
// Guardamos el resultado formateado en otra variable
$row = $result->fetch_assoc();
?>

<!-- Todo el codigo html aqui-->
 <form action="../data/actualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre'];?>"><br><br>
    <label for="">Descripción:</label>
    <input type="text" name="descripcion" value="<?php echo $row['descripcion'];?>"><br><br>
    <label for="">Precio:</label>
    <input type="text" name="precio" value="<?php echo $row['precio'];?>"><br><br>
    <input type="submit" value="Actualizar">
 </form>

 <?php
 $conn->close();
 ?>