<?php
include '../data/conexion.php';
$sql = "SELECT id, titulo, genero, canal, fecha_estreno, duracion, descripcion FROM programas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Programas</title>
    <link rel="stylesheet" type="text/css" href="../public/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../public/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<div>
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
            <div class="background">
                <img src="../view/img/inicio/andromeda.jpg">
            </div>
            <a href="#user"><img class="circle" src="../view/img/inicio/desconocido.jpg"></a>
            <a href="#name"><span class="white-text name">Administrador</span></a>
            <a href="#email"><span class="white-text email">Bienvenido</span></a>
            </div></li>
            <li class="activo"><a href="../index.php"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href="php/listar.php"><i class="fas fa-video"></i> Programas Televisivos</a></li>
            <li><div class="divider"></div></li>
    </ul>
    <a id="menu" href="#" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
</div>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #441573;
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
            background-color: #552391;
        }
        tr:nth-child(even) {
            background-color: #cebce3;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            margin-right: 10px;
            color: purple;
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
        echo "<table><tr><th>Título</th><th>Género</th><th>Descripción</th><th>Acciones</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["titulo"]."</td><td>".$row["genero"]."</td><td>".$row["descripcion"]."</td><td>"
            ."<a href='editar.php?id=".$row["id"]."'>Editar</a>"
            ."<a href='../data/eliminar.php?id=".$row["id"]."' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este artículo?');\">Eliminar</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "Consulta Vacia";
    }
    $conn->close();
    ?>
</div>
    <script type="text/javascript" src="../js/js.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>