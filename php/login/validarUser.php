<?php
include('../../data/conexion.php');
//Verificación de los datos enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $contraseña = $_POST['contraseña'];

    // Consulta a la BD para verificar si el usario y la contraseña son correctas
    $sql = "SELECT contraseña FROM usuario WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("s",$username);
    $stmt ->execute();
    $stmt ->store_result();
    //Guarda la contraseña recuperada
    $stmt ->bind_result($contraseña_hash);
    $stmt ->fetch();

    if($stmt->num_rows() > 0 && password_verify($contraseña, $contraseña_hash)) {
        echo "Login exitoso";
    } else {
        echo "Nombre de usario o contraseña incorrectos";
    }
    $stmt->close();
}
$conn->close();
?>