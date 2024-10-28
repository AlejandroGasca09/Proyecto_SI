<?php
$host_db = "127.0.0.1";
$user_db = "root";
$password_db = "";
$db_name = "registro_modalidad";

// Crear conexión
$conexion = new mysqli($host_db, $user_db, $password_db, $db_name);

// Verificar conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}
?>