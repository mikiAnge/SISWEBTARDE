<?php
// En este archivo implementaremos todas las funciones de solicitud de 
// Vista de los datos almacenados, en una tabla
// Incluimos la conexion a este archivo, esto a igual a realizar un import
include '../data/conexion.php';
// Aqui realizaremos todas las funciones de peticones a la tabla Articulos
// Almacenamos una consulta SQl en la siguiente variable
$sql = "SELECT nombre, descripcion, precio FROM articulos";
// ejecutamos y almacenamos el resultado en una variable
$result = $conn->query($sql);
// verifiamos que exista algun dato en resultado
if ($result->num_rows > 0) {
    //Formateo de los datos de resultadod, para la visualizacion de la informacion
    echo "<table><tr><th>Nombre</th><th>Descripción</th><th>Precio</th></tr>";
    //Recorremos los valores por cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nombre"]."</td><td>"
        .$row["descripcion"]."</td><td>"
        .$row["precio"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Consulta Vacia";
}
// Funcion que cierra la conexion con base de datos
$conn->close();
?>