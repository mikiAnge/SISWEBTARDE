<?php
include "../data/conexion.php";

$id = $_POST['id'];
$nommbre = $_POST[''];
$descripciopn = $_POST[''];
$precio = $_POST['']; 

$sql = "UPDATE articulo SET nombres='$nommbre',descripcion='$descripciopn'=,precio='$precio'
WHERE id=$id";
//verificamos que la consulta realize algun combio en la tabla
if($conn->query($sql)=== TRUE) {
    echo "Registro actualizado correctamente";
    //valor
    header("location: ../php/listaArticulos.php"); exit()
}else {
    echo"Error actualizando el resgistro: ". $conn->error;
}
?>