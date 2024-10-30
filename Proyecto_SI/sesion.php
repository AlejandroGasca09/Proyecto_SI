

<?php
include "./conexion.php";
session_start();

    $recordarDatos= $_SESSION['nombre_usuario'];

    if( !isset($recordarDatos) ){
    header("location: ./login.php");
    }else{
    echo"<h1 style='text-align: center;'>Hola : $recordarDatos estos son todos los registros</h1>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>cuenta</title>
</head>
<body style="background-color: aliceblue;">
<center>
<table border="1" style="border-color: orange; width: 80%; height: 400px;">
    <tr>
        <td>id_registro</td>
        <td>nombre1</td>
        <td>nombre2</td>
        <td>apellido1</td>
        <td>apellido2</td>
        <td>numero_cuenta</td>
        <td>mail</td>
        <td>plan</td>
        <td>modalidad</td>
        <td>telefono</td>
    </tr>

    <?php
    $mregistro = "SELECT * FROM registro";
    $resultado =mysqli_query($conexion,$mregistro);

    while($m =mysqli_fetch_array($resultado)){
    ?>

    <tr>
        <td><?php echo $m['id_registro'] ?></td>
        <td><?php echo $m['nombre1'] ?></td>
        <td><?php echo $m['nombre2'] ?></td>
        <td><?php echo $m['apellido1'] ?></td>
        <td><?php echo $m['apellido2'] ?></td>
        <td><?php echo $m['numero_cuenta'] ?></td>
        <td><?php echo $m['mail'] ?></td>
        <td><?php echo $m['plan'] ?></td>
        <td><?php echo $m['modalidad'] ?></td>
        <td><?php echo $m['telefono'] ?></td>
    </tr>

    <?php
    }
    ?>
</table>
</center>

<center>
<?php
echo "<a href='./cerrar_sesion.php' style='display: inline-block; margin-top: 25px; margin-inline-start: 59px; background-color: gray; padding: 20px 35px; color: aliceblue; text-decoration: none; border-radius: 100px;
'>Salir</a>";
?>
</center>
</body>
</html>
