<?php

$host="localhost";
$db="sagrado_corazon";
$user="root";
$pass="";

try {
$conexionbd= new PDO (
    "mysql:host=$host;dbname=$db;charset=utf8mb4",
    $user,
    $pass,
    );
    $conexionbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexionbd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit("No se pudo conectar a la base de datos");
}
?>