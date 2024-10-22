<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Programas Televisivos</title>
	<link rel="stylesheet" type="text/css" href="public/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="public/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="icon" href="view/img/logo/icon.png" type="image/png" />
</head>
<body>
    <div>
        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
                <div class="background">
                    <img src="view/img/inicio/andromeda.jpg">
                </div>
                <a href="#user"><img class="circle" src="view/img/inicio/desconocido.jpg"></a>
                <a href="#name"><span class="white-text name">Administrador</span></a>
                <a href="#email"><span class="white-text email">Bienvenido</span></a>
            </div></li>
            <li class="activo"><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
            <li><a href="php/listar.php"><i class="fas fa-video"></i> Programas Televisivos</a></li>
            <li><div class="divider"></div></li>
        </ul>
        <a id="menu" href="#" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
    </div>

    <div class="containerr">
	    <center>
	        <img width="360" src="view/img/logo/logo.png" alt=""> <br><br>
	        <h5 class="white-text">Agrega, edita, actualiza o elimina Programas Televisivos 📺</h5> <br><br>
	        <a class="blue darken-4 waves-effect btn-large pulse" href="php/listar.php">Comenzar!</a> <br><br><br>
            <div class="espacio">
		        <a class="btn tooltipped waves-effect orange accent-3" data-position="right" data-tooltip="Ingresa nuevos programas!" href="php/insertar.php" >Insertar</a>
	        </div>
	    </center>

	    <center>
	        <p id="bottom" class="white-text">2024 © Copyright</p>
	    </center>
	
    </div>

    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>