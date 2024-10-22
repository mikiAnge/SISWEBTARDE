<?php

include '../data/conexion.php';

$sql = "SELECT id,titulo,genero,canal,fecha_estreno, duracion, descripcion FROM programas";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table><tr><th>Titulo</th><th>Genero</th><th>Canal</th><th>Fecha de estreno</th><th>Duracion</th><th>Descripcion</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["titulo"]."</td><td>"
        .$row["genero"]."</td><td>"
        .$row["canal"]."</td><td>"
        .$row["fecha_estreno"]."</td><td>"
        .$row["duracion"]."</td><td>"
        .$row["descripcion"]."</td><td>"
        //Añadimos un boton el cual almacenara como valor el "id" de la tabla
        ."<a href='../view/editar_datos.php?id=".$row["id"]."'>Editar</a>"
        
        ."</td><td>"
        //Añadimos un boton el cual eleminara el articulo
        ."<a href='../data/eliminar.php?id=".$row["id"]."' onclick=\"return confirm('¿Estás seguro de que deas eliminar este artículo?');\">Eliminar</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "Consulta Vacia";
}

$conn->close();
?>