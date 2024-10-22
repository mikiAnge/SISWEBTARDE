<?php
/**todo el codigo php aqui */
include '../data/conexion.php';
 
$id = $_GET['id'];

//consutar sql para obtener el dato mediante el id
$sql = "SELECT nombre,decipcion, precio FROM articulo WHERE id = $id";
// ejecutamos la consulta
$result = $conn->querry($sql);
// guardamos el resultado formateada en otra variable
$row = $result->fetch_assoc();
?>

</.. todo el codigo html Aqui
<form action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for=""></label>
    <input type="text" name="nombre"id="" value="<?php ech $row['nombre']; ?>"><br><br>
    <label for=""><Precio:</label>
    <input type="text" name="descricio" id="" value=""<?php echo $precio['descripcion'];?>"><br><br> 
    <label for="">precio:</label>
    <input type="text" name="" id="" value=""<?php echo $precio['precio'];?>"><br><br>
    <input type="submit" value="Actualizar">
</form> 

<?php
$conn->class();