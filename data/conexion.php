<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programastelevisivos";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Conexión Fallida: ".$conn->connect_error);
}/* else{
    print("Conexion Exitosa a ".$dbname);
}*/
?>