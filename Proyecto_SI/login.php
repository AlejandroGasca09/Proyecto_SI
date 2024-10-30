<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Inicio secion</title>
    <link rel="shortcut icon" href="media/logo_ico.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Enlace a jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlace a Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    
    <header class="titulo" style="text-align: center;"> 
        <h1 >Inicio de Sesión</h1>
    </header>

    <div>
        <form action="./verificacionLogin.php" method="post" class="forms">

            <div >
                <a href="inicioICO.php" type="button" class="boton_regreso"><i class="material-icons">close</i></a>
        
            </div>

            <br>
            <div>
                <label for="nombre_usuario"><b>Ingresa tu nombre de usuario</b></label>
                <input type="text" name="nombre_usuario" required maxlength="30" placeholder="ingresa tu nombre de usuario">
            </div>

            <div>
                <label for="password"><b>ingresa tu primer apellido</b></label>
                <input type="password" name="password" required maxlength="70" placeholder="password">
            </div>

            <br>
            <br>
            <button type="submit" name="submit">Ininiciar seción</button>
            <button type="reset"> vaciar</button>
        </form>
</body>
</html>