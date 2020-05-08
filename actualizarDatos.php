<?php include("./PHP/sesionHandler.php");
require_once './PHP/db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Actualizar datos</title>
    <script type="text/javascript" src="JS\botones.js"></script>
    <link rel="stylesheet" href="CSS\estiloGeneral.css">
    <link rel="stylesheet" href="CSS\estilo.css">
    <link rel="stylesheet" href="CSS\estiloBarra.css">
</head>

<body>
    <div id="divContenedorPrincipal" class="principal">
        <div id="divBarraSuperior" class="barra">
            <div id="divLogoPeq" class="elemento"><a href="index.php" class="logopeq">{ CV facil&iacute;to }</a></div>
            <div id="divCrearCV" class="elemento">
                <button id="btnCrearCV" class="cuenta" onclick="redireccionar('formularioCVu.php')">Crear CV</button>
            </div>
            <div id="divCerrarSesion" class="elemento">
                <button id="btnCerrarSesion" class="cuenta" onclick="redireccionar('./PHP/cerrarSesion.php')">Cerrar Sesi&oacute;n</button>
            </div>
        </div>

        <div id="divContenedorFormularioRegistro" class="contenedorCentral">
            <h2 class="subtitulo">Actualiza los datos que mostrar&aacute;s en tus CV</h2>
            <h3 class="subtitulo">*Campos obligatorios</h3>
            <div id="divFormularioActDatosGrales" class="formulario">
            <h2 class="subtitulo">Datos generales</h2>
                <form id="actualizacionDatos" method="POST" action='data' enctype='multipart/form-data'>
                    <input class="campoRegistro" type="text" name="nombre" id="nombre" placeholder="Nombre*" value='<?php echo $_SESSION['nombre']; ?>'  required> <br>
                    <input class="campoRegistro" type="text" name="ap_paterno" id="ap_paterno" placeholder="Apellido Paterno*" value='<?php echo $_SESSION['ap_paterno']; ?>' required><br>
                    <input class="campoRegistro" type="text" name="ap_materno" id="ap_materno" placeholder="Apellido Materno*" value='<?php echo $_SESSION['ap_materno']; ?>' required><br>
                   
                    <input class="campoRegistro" type="text" name="direccion" id="direccion" placeholder="Direcci&oacute;n*" value='<?php echo $_SESSION['direccion']; ?>' required><br>
                   
                    <span class='subtitulo'>Fecha de nacimiento*: </span>
                    <input type="date" name="fecha_nac" id="fecha_nac" placeholder="Fecha de nacimiento"  required><br><br>

                    
                    <div id="divContenedorTelefono">
                        <input type="text" id="inNumeroTelefonico" class="campoRegistro" placeholder="Numero telef&oacute;nico*" name="tel[]">
                    </div>
                    <button> A&ntilde;adir otro n&uacute;mero </button>

                   <br> <br> <span class='subtitulo'>Foto de perfil*: </span><br>
                    <input type="file" name="imagen" id="inFotoPerfil"><br><br>

                    <input class="boton" type="submit" value="Actualizar">
                </form>
            </div>
            <hr>
            <div id="divFormularioCambioContrasena" class="formulario">
                <h2 class="subtitulo">Cambiar contrase&ntilde;a</h2>
                <form id="actualizacionContrasena" method="POST" action='psw'>
                    <input class="campoRegistro" type="password" placeholder="Nueva contrase&ntilde;a*" id="inContrasena"
                        name="contrasena" required /><br>
                    <input class="campoRegistro" type="password" placeholder="Repita su nueva contrase&ntilde;a*"
                        id="inContrasenaValidacion" name="contrasenaValidacion" required /><br>
                    <input class="boton" type="submit" value="Actualizar">
                </form>
            </div>
        </div>
        <footer>
            <div id="divFooter" class="pie">
                <span>Este sitio fue creado por alumnos del equipo No.5 de Tecnolog&iacute;as para la Web del grupo 2CV10 de
                    la
                    Escuela Superior de C&oacute;mputo</span>
                <br><span>Semestre 2020-2</span>
            </div>
        </footer>
    </div>
</body>

</html>