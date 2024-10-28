<?php
include "./conexion.php";
mysqli_set_charset($conexion, "utf8");

$nombre_completo = $_POST['nombre_completo'];
$apellido_com = $_POST['apellido_com'];
$numero_cuenta = $_POST['numero_cuenta'];
$mail = $_POST['mail'];
$Plan = $_POST['Plan'];
$modalidad = $_POST['modalidad'];
$telefono = $_POST['telefono'];

if ($nombre_completo && $apellido_com && $numero_cuenta && $mail && $Plan && $modalidad && $telefono) {
    // Separar nombres y apellidos
    $nombres = explode(' ', $nombre_completo);
    $nombre1 = $nombres[0];
    $nombre2 = isset($nombres[1]) ? $nombres[1] : '';

    $apellidos = explode(' ', $apellido_com);
    $apellido1 = $apellidos[0];
    $apellido2 = isset($apellidos[1]) ? $apellidos[1] : '';}

$buscarusuario = "SELECT * FROM registro WHERE numero_cuenta = '$numero_cuenta'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

if ($count == 1) {
    echo "El usuario ya está registrado.";
    echo "<a href='registro.php'>Nuevo Registro</a>";
} else {
    $insert_query = "INSERT INTO registro (nombre1, nombre2, apellido1, apellido2, numero_cuenta, mail, Plan, modalidad, telefono) VALUES ('$nombre1', '$nombre2', '$apellido1', '$apellido2', '$numero_cuenta', '$mail', '$Plan', '$modalidad', '$telefono')";
    if (mysqli_query($conexion, $insert_query)) {
        echo "<br><h1>Usuario creado con éxito</h1>";
        echo "<a href='./registro.php'>Puedes generar un nuevo registro</a>";
    } else {
        echo "Error al insertar el usuario: " . mysqli_error($conexion);
    }
}
?>