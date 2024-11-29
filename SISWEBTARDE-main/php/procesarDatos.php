<?php
//Verifiacamos que metodo se envio por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperamos los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = (int)($_POST['edad']);
    // Tras recuperar la información podemos relizar los direfentes metodos
    // que te permitan validar los datos, o realizar las diferentes consultas
    // para almacenar la información en la base de datos

    // Muestra los datos en el archivo del procesado
    print "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Datos recuperados";
    //Detiene la pagina tiempo en segundos
    sleep(2);
    // Redirigir la información a otro lugar
    header("Location: /view/recibirDatos.php?nombre=" . urlencode($nombre) . "&edad=" . urlencode($edad));
    exit();
    // El header se utiliza para poder devolver mensaje a las otras pajinas al momento de 
    // redireccionarse. No es muy utilizado para enviar datos
}
?>