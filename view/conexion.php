<?php 
// si trabajamos con una base de datos de MySql, necesitas verficar
//que tengas habilitado la extencion de mysqli o PDO
//revisar el archivo de configuracion de PHP llamado php.ini o httpd.conf
$servername = "localhost";// nombre del servidor localhost
$username = "root";// Nombre del usuario de la base de datos, si as creado colocado este nombre,de la
$password = "";// contraseña del usuario de la base de datos
$dbname = "db_hof";// nombre de la base de datosç

// crear conexion
$conn = new mysqli($servername,$username,$password,$dbname);

//verificamos que exista conexion con la Base de datos
if($conn->connet_error) {
    die("Conexion Fallida: ".$conn->connect_error);
}else{
    print("conexion Exitosa a" .$dbname);
}
¿>