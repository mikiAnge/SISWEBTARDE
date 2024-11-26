<?php
require_once 'data/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamFlix - Programas de TV</title>
    <link rel="stylesheet" href="public/css/style.css">
    
</head>
<body>
    <header>
        <nav><!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="public/css/style.css">
                <title>Programas Televisivos</title>
            </head>
            <body>
                <header>
                    <div class="navbar">
                        <a href="index.php" class="logo">Mi luisflix</a>
                        <nav>
                            <ul>
                               
                                <li><a href="view/listar_datos.php" class="btn">Inicio</a></li>
                <li><a href="view/operaciones.php" class="btn">Agregar Programa</a></li>
                <li><a href="view/listar_datos.php" class="btn">Mis Programas</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            
                <main>
                    <h1>Programas</h1>
                    <div class="programas-container">
                        <!-- Programa 1 -->
                        <div class="programa">
                            <img src="imagenes/imagen1.jpg" alt="Los Simpson">
                            <div class="info">
                                <h2>Los Simpson</h2>
                                <p>La vida de una familia disfuncional en la ciudad ficticia de Springfield.</p>
                            </div>
                        </div>
            
                        <!-- Programa 2 -->
                        <div class="programa">
                            <img src="imagenes/imagen2.jpg" alt="Avatar">
                            <div class="info">
                                <h2>Avatar</h2>
                                <p>Un exmarine se encuentra en medio de un conflicto entre humanos y los habitantes de Pandora.</p>
                            </div>
                        </div>
            
                        <!-- Programa 3 -->
                        <div class="programa">
                            <img src="imagenes/imagen3.jpg" alt="Harry Potter">
                            <div class="info">
                                <h2>Harry Potter</h2>
                                <p>Un joven mago lucha contra el malvado Voldemort en su camino hacia la grandeza.</p>
                            </div>
                        </div>
            
                        <!-- Programa 4 -->
                        <div class="programa">
                            <img src="imagenes/imagen4.jpg" alt="Camino hacia el terror">
                            <div class="info">
                                <h2>Camino hacia el terror</h2>
                                <p>Un grupo de jóvenes se enfrenta a caníbales en los bosques de West Virginia.</p>
                            </div>
                        </div>
            
                        <!-- Programa 5 -->
                        <div class="programa">
                            <img src="imagenes/imagen5.jpg" alt="Chucky">
                            <div class="info">
                                <h2>Chucky</h2>
                                <p>Un muñeco poseído por el alma de un asesino comienza a aterrorizar a una familia.</p>
                            </div>
                        </div>
            
                        <!-- Programa 6 -->
                        <div class="programa">
                            <img src="imagenes/imagen6.jpg" alt="El Señor de los Anillos">
                            <div class="info">
                                <h2>El Señor de los Anillos</h2>
                                <p>Un grupo de héroes intenta destruir un anillo para derrotar al Señor Oscuro Sauron.</p>
                            </div>
                        </div>
            
                        <!-- Programa 7 -->
                        <div class="programa">
                            <img src="imagenes/imagen7.jpg" alt="Star Wars">
                            <div class="info">
                                <h2>Star Wars</h2>
                                <p>Una lucha épica entre el Imperio Galáctico y la Alianza Rebelde.</p>
                            </div>
                        </div>
            
                        <!-- Programa 8 -->
                        <div class="programa">
                            <img src="imagenes/imagen8.jpg" alt="Rápidos y Furiosos">
                            <div class="info">
                                <h2>Rápidos y Furiosos</h2>
                                <p>Un grupo de corredores de autos se enfrenta a peligrosas misiones alrededor del mundo.</p>
                            </div>
                        </div>
            
                        <!-- Programa 9 -->
                        <div class="programa">
                            <img src="imagenes/imagen9.jpg" alt="Jurassic Park">
                            <div class="info">
                                <h2>Jurassic Park</h2>
                                <p>Un parque temático de dinosaurios cobra vida cuando las criaturas se escapan.</p>
                            </div>
                        </div>
            
                        <!-- Programa 10 -->
                        <div class="programa">
                            <img src="imagenes/imagen10.jpg" alt="Matrix">
                            <div class="info">
                                <h2>Matrix</h2>
                                <p>Un hacker descubre la verdad detrás de la realidad y lucha contra las máquinas que controlan el mundo.</p>
                            </div>
                        </div>
                    </div>
                </main>
            
                <footer>
                    <p>luisflix.</p>
                </footer>
            </body>
            </html>
            
           
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="featured-content">
                
            </div>
        </section>

        <section class="content-list">
        <?php
// Incluir el archivo de conexión
include 'data/conexion.php'; // Asegúrate de que la ruta sea correcta

// Crear una instancia de la clase Conexion
//$conexion = new PDO();

// Llamar al método getConnection() para obtener la conexión a la base de datos
//$db = $conexion->getConnection(); // Aquí es donde llamas al método

//if ($db) {
    // Si la conexión es exitosa, realizar la consulta
    $query = "SELECT * FROM Programas"; // Consulta para obtener todos los programas
    $stmt = $pdo->prepare($query); // Ejecutar la consulta
    $stmt -> execute();
    $result = $stmt -> fetchALL(PDO::FETCH_OBJ);

    // Recorrer los resultados y mostrarlos
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="programa">';
        echo '<h2>' . $row['titulo'] . '</h2>'; // Mostrar el título del programa
        echo '<p>Género: ' . $row['genero'] . '</p>'; // Mostrar el género del programa
        echo '</div>';
    }
/*} else {
    // Si la conexión falla, mostrar un mensaje de error
    echo "No se pudo conectar a la base de datos.";
}*/
?>
 </section>
    </main>
    
</section>
<?php include 'view/panel/nav_bar.php'; ?>
    <h1>Lo de aqui abajo es codigo php, incluido en HTML</h1>
    <?php echo '<p>Hello World</p>'; ?>
    <button><a href="/view/operaciones.php">Operaciones</a></button><br><br>
    <button><a href="/view/formulario.html">Formulario de Datos</a></button>
    <button><a href="/view/listar_datos.php">Listar Datos</a></button>
    <?php include 'view/panel/footer.php'; ?>

</body>
</html>