<?php
require_once 'connection.php';
$servername = "database-1.c1av0xbq33gk.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "YordiiRDS";
$dbname = "school";

$conn = conectarRDS($servername, $username, $password, $dbname);

// Preparar la consulta SELECT utilizando la conexión PDO
$stmt = $conn->prepare("SELECT * FROM instructors");

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados como un array asociativo
$instructors = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>