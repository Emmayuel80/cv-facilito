<?php require("./PHP/iniciarSesion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Inicia Sesi&oacute;n</title>
    <script type="text/javascript" src="JS\botones.js"></script>
    <link rel="stylesheet" href="CSS\estiloGeneral.css">
    <link rel="stylesheet" href="CSS\estilo.css">
    <link rel="stylesheet" href="CSS\estiloBarra.css">
</head>

<body>
    <div id="divContenedorPrincipal" class="principal">
        <div id="divBarraSuperior" class="barra">
            <div id="divLogoPeq" class="elemento"><a href="index.php" class="logopeq">{ CV facil&iacute;to }</a></div>
            <div id="divLogin" class="elemento">
                <button id="btnLogin" class="cuenta" onclick="redireccionar('inicioSesion.php')">Iniciar
                    sesi&oacute;n</button>
            </div>
            <div id="divCrearCuenta" class="elemento">
                <button id="btnCrearCuenta" class="cuenta" onclick="redireccionar('registro.php')">Registrarse</button>
            </div>
            <div id="divComenzar" class="elemento">
                <button id="btnComenzar" class="cuenta">Crear un CV como invitado</button>
            </div>
        </div>

        <div id="divContenedorFormularioInicioSesion" class="contenedorCentral">
            <h2 class="subtitulo">Inicia sesi&oacute;n para continuar con un CV guardado o crear uno nuevo</h2>
            <div id="divFormularioInicioSesion" class="formulario">
                <form id="inicioSesion" method="POST" action="#">
                    <input class="campoRegistro" type="text" placeholder="Correo electr&oacute;nico" id="inCorreo" name="inCorreo" required/>
                    <input class="campoRegistro" type="password" placeholder="Contrase&ntilde;a" id="inContrasena" name="inContrasena" required/><br>
                    <input class="boton" type="submit" value="Ingresar">
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