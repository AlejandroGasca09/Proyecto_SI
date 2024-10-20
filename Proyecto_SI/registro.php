<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>registro de modalidad</title>
    <link rel="shortcut icon" href="media/logo_ico.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Enlace a jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlace a Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</head>
<body class="form_body">
    
    <header  style="text-align: center;"> 
        <h1 style="color: white;">Registro de modalidad de Titlación</h1>
    </header>


    <div>
        <form action="./enviarRegistro.php" method="post" class="forms">

        <div >
        <a href="inicioICO.php" type="button" class="boton_regreso"><i class="material-icons">close</i></a>

    </div>
            <br>
            <div>
                <label for="nombre_usuario">Ingresa tu nombre(s): </label>
                <input type="text" name="nombre_usuario" required maxlength="30" class="tinput" placeholder="ingresa tu nombre(s)">
            </div>

            <div>
                <label for="apellido_usuario">ingresa tus apellidos</label>
                <input type="text" name="apellido_usuario" required maxlength="30" class="tinput" placeholder="ingresa tus apellidos">
            </div>

            <div>
                <label for="numero_cuenta">Numero de cuenta</label>
                <input type="text" name="numero_cuenta" required maxlength="9" class="tinput" placeholder="ingresa tu numero de cuenta"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <div>
                <label for="mail">Ingresa tu correo electronico: </label>
                <input type="mail" name="mail" required maxlength="100" class="minput" placeholder="ingresa tu correo">
            </div>
            <br>

            <label>selecciona tu Plan de estudios</label>
    <br>
    <select class="browser-default" style="background-color: gray">
    <option value="" disabled selected>Planes</option>
    <option value="1">1921 </option>
    <option value="2">1272 </option>
    <option value="3">0082 </option>
    </select>

            <div class="input-field col s12">
                <br>
    <label>selecciona tu modalidad</label>
    <br>
    <select class="browser-default" style="background-color: gray">
    <option value="" disabled selected>modalidades</option>
    <option value="1">Alto nivel académico </option>
    <option value="2">Créditos de maestría </option>
    <option value="3">Desarrollo de un caso práctico </option>
    <option value="4">Examen general de conocimientos</option>
    <option value="5">Informe del ejercicio profesional </option>
    <option value="6">Memoria de desempeño de Servicio Social  </option>
    <option value="7">Seminarios y cursos de actualización y capacitación profesional  </option>
    <option value="8">Tesis </option>
    </select>
    <br>

            <div>
                <label for="mail">telefono: </label>
                <input type="tel" id="number" name="telefono" required maxlength="10" class="tinput"  placeholder="ingresa tu telefono"
                pattern="\d*" >
            </div>

            <input type="hidden" name="user_id" value="<?php echo isset($user_id) ? $user_id : ''; ?>">
            <br>

            <button type="submit" name="submit">Registrarme</button>
            <button type="reset" name="reset" > vaciar</button>
        </form>

</body>

<script src="inicio.js"></script>

</html>