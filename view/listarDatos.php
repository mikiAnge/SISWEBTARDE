<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/body.css">
    <link rel="stylesheet" href="../public/css/tabla.css">
    <link rel="stylesheet" href="../public/css/footer.css">
</head>
<body>
    <?php include './panel/navbar.php'; ?>
  <center><h1>Peliculas disponibles de Netflix</h1></center>  
  <?php include '../php/select.php'; ?>
  <table>
  <thead>
  <tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Genero</th>
    <th>Canal</th>
    <th>Fecha de Estreno</th>
    <th>Duracion</th>
    <th>Descripcion</th>
    <th>Acciones</th>
  </tr>
  </thead>
  <tbody>
  <?php include '../php/listar.php'; ?>
  </tbody>
  </table>

</body>
</html>