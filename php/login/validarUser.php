<?php
session_start();

include('../../data/conexion.php');
//Verificación de los datos enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // Consulta a la BD para verificar si el usario y la contraseña son correctas
    $sql = "SELECT id_usuario, password FROM usuarios WHERE nombre=?";
    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("s",$nombre);
    $stmt ->execute();
    $stmt ->store_result();
    //Guarda la contraseña recuperada
    $stmt ->bind_result($id, $contraseña_hash);
    $stmt ->fetch();

    if($stmt->num_rows() > 0 && password_verify($password, $contraseña_hash)) {
        // Guardamos toda la informacion del usario dentro la session
        $_SESSION['usuario_id']=$id;
        $_SESSION['nombre_usuario']=$nombre;
        // Muestra un mensaje de alerta antes de redirigirnos a una página
        echo "<script>
            alert('Ingreso Autorizado');
            window.location.href='/view/listar_datos.php';
        </script>"; 
    } else {
        echo "<script>
            alert('Usuario o contraseña no valido');
            window.location.href='/view/login/singIn.php';
        </script>";
    }
    $stmt->close();
}
$conn->close();
?>