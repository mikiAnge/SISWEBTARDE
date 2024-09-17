<?php
// si trabajamos con una base de datos de MySql, nesecitas verificar
// que tengas habilitada la extensión de mysqli o PDO
// revisar el archivo de configuracion de PHP llamado php.ini o httpd.conf
$servername = "";// Nombre del servidor localhost
$username = "";// Nombre del usuario de la base de datos, si as creado coloca ese nombre, de lo contrario solo coloca root
$password = "";// Contraseña del usario de la base de datos
$dbname = "";// Nombre de la base de datos

// crear conexion
$conn = new mysqli($servername,$username,$password,$dbname);

// Verificamos que exista conexion con la Base de Datos
if ($conn->connect_error) {
    die("Conexión Fallida: ".$conn->connect_error);
}/*else{
    print("Conexion Exitosa a ".$dbname);
}*/
?>