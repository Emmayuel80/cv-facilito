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
            <div id="divLogoPeq" class="elemento"><a href="index.php" class="logopeq">{ CV facil&iacute;to }</a></div>
            <div id="divLogin" class="elemento">
                <button id="btnLogin" class="cuenta" onclick="redireccionar('inicioSesion.php')">Iniciar
                    sesi&oacute;n</button>
            </div>
            <div id="divCrearCuenta" class="elemento">
                <button id="btnCrearCuenta" class="cuenta" onclick="redireccionar('registro.php')">Registrarse</button>
            </div>
        </div>
        <div id="divContenedorCV" class="contenedorFormCV">
            <form>
                <div id="divContenedorNombre" class="contenedorNombre">
                    <input Type="text" id="inNombre" placeholder="Nombre" class="formCV" required>
                    <input type="text" id="inApPaterno" placeholder="Apellido paterno" class="formCV" required>
                    <input type="text" id="inApMaterno" placeholder = "Apellido Materno" class="formCV" required><br>
                </div>
                <div id="divFotoCV" class="panelForm">
                    <span>&nbsp;</span>
                    <img src="<?php //TODO: Implementar las rutas de las fotos de perfil. ?>" class="fotoPerfil">
                </div> 
                <div id="divContenedorDatosGrales" class="panelForm">
                    <h3 class="subtitulo"> Datos generales y de contacto </h3>
                    <span class="parrafo">Fecha de nacimiento</span> <input type="date" id="inFechaNac" placeholder="Fecha de nacimiento" required>
                    <span class="parrafo">Direcci&oacute;n</span><input Type="text" id="inDireccion" class="formCV" required>
                    <span class="parrafo">Correo electr&oacute;nico</span><input Type="email" id="inCorreo" class="formCV"required>
                    <span class="parrafo">Tel&eacute;fono(s): </span><br>
                    <blockquote><input type="text" id="inNumeroTelefonico" class="formCV"><button> + </button><blockquote>
                </div> 
                <div id="divContenedorCompetencias" class="contenedorTextArea">
                    <textarea id="inCompetencias" placeholder="Describe de forma breve tus competencias">
                    
                    </textarea>
                </div>
                
            </form>
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