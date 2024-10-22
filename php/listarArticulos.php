<?php
include '../data/conexion.php';

$stmt = $pdo->query("SELECT * FROM Programas");
$programas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
