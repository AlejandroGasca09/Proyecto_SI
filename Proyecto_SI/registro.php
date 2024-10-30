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
        <h1>Registro de modalidad de Titlación</h1>
    </header>


    <div>
        <form action="./enviarRegistro.php" method="post" class="forms">

        <div >
        <a href="inicioICO.php" type="button" class="boton_regreso"><i class="material-icons">close</i></a>

    </div>
            <br>
            <div>
                <label for="nombre_completo"><b>Ingresa tu nombre(s):</b></label>
                <input type="text" name="nombre_completo" required maxlength="30" placeholder="ingresa tu nombre(s)">
            </div>

            <div>
                <label for="apellido_com"><b>ingresa tus apellidos</b></label>
                <input type="text" name="apellido_com" required maxlength="30" placeholder="ingresa tus apellidos">
            </div>

            <div>
                <label for="numero_cuenta"><b>Numero de cuenta</b></label>
                <input type="text" name="numero_cuenta" required maxlength="9" placeholder="ingresa tu numero de cuenta"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <div>
                <label for="mail"><b>Ingresa tu correo electronico: </b></label>
                <input type="mail" name="mail" required maxlength="100" class="minput" placeholder="ingresa tu correo">
            </div>
            <br>

            <label for="Plan" ><h6>selecciona tu Plan de estudios</h6></label>
    <br>
    <select class="browser-default opcion" name="Plan" style="background-color: orange">
    <option value="" disabled selected>Planes</option>
    <option value="1921">1921 </option>
    <option value="1279">1279 </option>
    <option value="0082">0082 </option>
    </select>

            <div class="input-field col s12">
                <br>
    <label for="modalidad"><h6>selecciona tu modalidad</h6></label>
    <br>
    <select class="browser-default opcion" name="modalidad" style="background-color: orange">
    <option value="" disabled selected>modalidades</option>
    <option value="Titulación por totalidad de créditos y alto nivel académico">Titulación por totalidad de créditos y alto nivel académico </option>
    <option value="actividad de apoyo a la docencia"> actividad de apoyo a la docencia</option>
    <option value="trabajo profesional">trabajo profesional</option>
    <option value="Servicio Social-1921">Servicio Social- 1921 </option>
    <option value="actividad de investigación en su alternativa de artículo académico">actividad de investigación en su alternativa de artículo académico </option>
    <option value="ampliación y profundización de conocimientos en su alternativa de semestre adicional">ampliación y profundización de conocimientos en su alternativa de semestre adicional </option>
    <option value="ampliación y profundización de conocimientos en su alternativa de cursos o diplomados de educación continua">ampliación y profundización de conocimientos en su alternativa de cursos o diplomados de educación continua </option>
    <option value="Tesis">Tesis </option>
    <option value="Alto nivel académico ">Alto nivel académico </option>
    <option value="Créditos de maestría ">Créditos de maestría </option>
    <option value="Desarrollo de un caso práctico">Desarrollo de un caso práctico </option>
    <option value="Examen general de conocimientos">Examen general de conocimientos</option>
    <option value="Informe del ejercicio profesional">Informe del ejercicio profesional </option>
    <option value="Memoria de desempeño de Servicio Social">Memoria de desempeño de Servicio Social  </option>
    <option value="Seminarios y cursos de actualización y capacitación profesional">Seminarios y cursos de actualización y capacitación profesional  </option>

    </select>
    <br>

            <div>
                <label for="telefono">telefono: </label>
                <input type="tel" id="number" name="telefono" required maxlength="10"   placeholder="ingresa tu telefono"
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