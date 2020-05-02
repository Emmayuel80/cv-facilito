<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CV facilito</title>
    <script type="text/javascript" src="JS\botones.js"></script>
    <link rel="stylesheet" href="CSS\estiloGeneral.css">
    <link rel="stylesheet" href="CSS\estilo.css">
    <link rel="stylesheet" href="CSS\estiloBarra.css">
</head>

<body>
    <div id="divContenedorPrincipal" class="principal">
        <div id="divBarraSuperior" class="barra">
            <div id="divLogoPeq" class="elemento"><a href="index.html" class="logopeq">{ CV facil&iacute;to }</a></div>
            <div id="divCrearCuenta" class="elemento">
                <button id="btnCrearCV" class="cuenta" onclick="redireccionar('plantillaCV.html')">Crear CV</button>
            </div>
            <div id="divComenzar" class="elemento">
                <button id="btnCerrarSesion" class="cuenta" onclick="redireccionar('index.html')">Cerrar Sesi&oacute;n</button>
            </div>
        </div>
        <div id="divPanerlContenedorPerfil" class="panelPerfil">
            <div id="divPanelIzquierdo" class="panelInformacionPerfil">
                    <h2 class="subtitulo" id="h2NombreUsuario">Nombre de usuario</h2>
                    <div id="divContenedorImagenPerfil">
                        <img src="IMG\icono-perfil.png" class="fotoPerfil">
                    </div>
            </div>
            <div id="divPanelDerecho" class="panelInformacionPerfil">
                <h2 class="subtitulo">Informaci&oacute;n de contacto</h2>
                <div id="divInformacionPanelDerecho" class="panelDerecho">
                    <span class="informacionPerfil">Correo electr&oacute;nico registrado: </span><span id="spanCorreo"></span><span id="spanCorreo"></span>
                    <br><br>
                    <span class="informacionPerfil">N&uacute;mero telef&oacute;nico: </span><span id="spanNumeroTelefonico">ninguno</span>
                    <br><br>
                    <span class="informacionPerfil">Direcci&oacute;n registrada: </span><span id="spanDireccion">ninguna</span>
                </div>
            </div>
            <div id="divPanelInferior" class="panelInferior">
                <h2 class="subtitulo">Mis CV guardados</h2>
                <div id="divContenedorCVs" class="panelCV" onclick="redireccionar('index.html')">
                    <img src="IMG\file.png" class="file">
                    <span id="spanTituloCV" class="parrafo">CV ejemploVisual1</span>
                </div>
                <div id="divContenedorCVs" class="panelCV" onclick="redireccionar('index.html')">
                    <img src="IMG\file.png" class="file">
                    <span id="spanTituloCV" class="parrafo">CV ejemploVisual2</span>
                </div>
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