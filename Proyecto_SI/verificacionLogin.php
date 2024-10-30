<?php
require "./conexion.php";
session_start();
$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];


$buscarusuario = "SELECT * FROM administrador WHERE nombre_usuario = '$nombre_usuario' AND password = '$password'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

if ($count == 1) {
    
    //En la variable session vamos a guardar el numero de cuenta temporalmente, hasta que mi usario se salga de la aplicacion
    $_SESSION['nombre_usuario']=$nombre_usuario;

    header("location: ./sesion.php");//esta archivo no esta echo
    
}else{
echo"
<center>
    <h1>No estas registrado en nuestro Sistema</h1>
    <a href='./login.php'>Login</a>
</center>";


}

?>