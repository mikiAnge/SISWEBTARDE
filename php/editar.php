<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Programas</title>
    <link rel="stylesheet" type="text/css" href="../public/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../public/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body><div>
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
<div class="container">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            width: calc(100% - 24px);
        }
        input[type="submit"] {
            padding: 10px 15px;
            border: none;
            background: #441573;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background: #9a74ad;
        }
    </style>
    <?php
        include '../data/conexion.php';
        $id = $_GET['id'];
        // Consulta sql para obtener el dato mediante el id
        $sql = "SELECT titulo, genero, descripcion FROM  programas WHERE id = $id";
        // Ejecutamos la consulta
        $result = $conn->query($sql);
        // Guardamos el resultado formateado en otra variable
        $row = $result->fetch_assoc();
    ?>
    <!-- Todo el codigo html aqui-->
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
    <?php
        $conn->close();
    ?>
</div>
<script type="text/javascript" src="../js/js.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>