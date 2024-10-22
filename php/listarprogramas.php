<?php
// En este archivo implementaremos todas las funciones de solicitud de 
// Vista de los datos almacenados, en una tabla
// Incluimos la conexion a este archivo, esto a igual a realizar un import
include '../data/conexion.php';
// Aqui realizaremos todas las funciones de peticones a la tabla Articulos
// Almacenamos una consulta SQl en la siguiente variable
$sql = "SELECT id,titulo, genero,canal,fecha_estreno,duracion,descripcion FROM programas";
// ejecutamos y almacenamos el resultado en una variable
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<style>
        body {
            font-family: 'Agdasima', sans-serif;
            background-color: #00ff55;
            text-size-adjust: 60px;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid white;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #3EB489;
        }
        tr:nth-child(even) {
            background-color: #b86a6a;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            margin-right: 10px;
            color: #3d0622;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
            color: darkblue;
        }
    </style>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            //Formateo de los datos de resultadod, para la visualizacion de la informacion
            echo "<table><tr><th>Titulo</th><th>Genero</th><th>Canal</th><th>Fecha Estreno</th><th>Duración</th><th>Descripción</th><th>Acciones</th></tr>";
            //Recorremos los valores por cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["titulo"]."</td><td>"
                .$row["genero"]."</td><td>"
                .$row["canal"]."</td><td>"
                .$row["fecha_estreno"]."</td><td>"
                .$row["duracion"]."</td><td>"
                .$row["descripcion"]."</td><td>"
        
                //Añadimos un boton el cual almacenara como valor el "id" de la tabla
                ."<a href='editarprogramas.php?id=".$row["id"]."'>Editar</a>"
                ."<a href='../php/insertarprogramas.php?id=".$row["id"]."'>Insertar</a>"
                //Añadimos un boton el cual eleminara el articulo
                ."<a href='../data/eliminar.php?id=".$row["id"]."' onclick=\"return confirm('¿Estás seguro de que deas eliminar este programa?');\">Eliminar</a></td></tr>";
            }
            echo "</table>";
        } else {
            echo "Consulta Vacia";
        }
        // Funcion que cierra la conexion con base de datos
        $conn->close();
        ?>
    </div>
</body>
</html>