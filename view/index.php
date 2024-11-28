<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/style_lista.css">
    <title>Página Principal</title>
</head>
<body>
    <?php include 'panel/nav_bar.php'; ?>
    
    <div class="contenedor">
        <h2>Bienvenido a Nuestro Sitio</h2>
        <div class="featured">
            <h3>ESTOS SON NUESTROS PROGRAMAS MÁS DESTACADOS</h3>
            
            <!-- Tarjetas de programas destacados -->
            <div class="featured-programs">
                <div class="card">
                    <img src="../public/img/programa1.jpg" alt="Los Simpson"> <!-- Asegúrate de que las imágenes sean grandes -->
                    <h3>Los Simpson</h3>
                    <p>Una familia disfuncional vive en la ciudad de Springfield.</p>
                    <a href="#">Ver más</a>
                </div>

                <div class="card">
                    <img src="../public/img/programa2.jpg" alt="Avatar">
                    <h3>Avatar</h3>
                    <p>Un exmarine se encuentra en medio de un conflicto en un mundo alienígena.</p>
                    <a href="#">Ver más</a>
                </div>

                <div class="card">
                    <img src="../public/img/programa3.jpg" alt="Harry Potter">
                    <h3>Harry Potter</h3>
                    <p>Un joven mago lucha contra el malvado Voldemort en su camino hacia la adultez.</p>
                    <a href="#">Ver más</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'panel/footer.php'; ?>
</body>
</html>
