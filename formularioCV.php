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
                    <input Type="text" id="inNombre" placeholder="Nombre" class="formNombre" required>
                    <input type="text" id="inApPaterno" placeholder="Apellido paterno" class="formNombre" required>
                    <input type="text" id="inApMaterno" placeholder = "Apellido Materno" class="formNombre" required><br>
                </div>
                <div id="divFotoCV" class="panelForm">
                    <span>&nbsp;</span>
                    <img src="<?php //TODO: Implementar las rutas de las fotos de perfil. ?>" class="fotoPerfil">
                </div> 
                <div id="divContenedorDatosGrales" class="panelForm">
                    <h3 class="subtitulo"> Datos generales y de contacto </h3>
                    <span class="texto">Fecha de nacimiento</span> <input type="date"  class="formCV" id="inFechaNac" placeholder="Fecha de nacimiento" required>
                    <span class="texto">Direcci&oacute;n</span><input Type="text" id="inDireccion" class="formCV" required>
                    <span class="texto">Correo electr&oacute;nico</span><input Type="email" id="inCorreo" class="formCV"required>
                    <span class="texto">Tel&eacute;fono(s): </span>
                    <blockquote><input type="text" id="inNumeroTelefonico" class="formCV"><button> A&ntilde;adir otro n&uacute;mero </button><blockquote>
                </div> 
                <div id="divContenedorCompetencias" class="contenedorNombre">
                    <textarea id="inCompetencias" class="estilo" placeholder="Describe de forma breve tus competencias. P. ej. 'Poseo un amplio conocimiento en mi &aacute;rea de especializaci&oacute;n y puedo manejar perfectamente toda la paqueter&iacute;a office...'"></textarea>
                </div>
                <hr>
                <div id="divContenedorSeccionEstudios">
                    <h2 class="tituloSeccion">Estudios</h2>
                    <div id="divContenedorEstudios" class="elementoDeSeccion">
                        <input type="text" id="inTitulo" class="formNombre" placeholder="T&iacute;tulo o certificaci&oacute;n" required>
                        <br><input type="text" id="inNombreEscuela" class="formCV" placeholder="Nombre de la instituci&oacute;n" required/>
                        <input type="number" id="inInicioEstudios" class="formCV" placeholder="A&ntilde;o de inicio">
                        <input type="text" id="inFinEstudios" class="formCV" placeholder="A&ntilde;o de finalizaci&oacute;n">
                        <br><input type="text" id="inPais" class="formCV" placeholder="Pa&iacute;s">
                        <input type="text" id="inCiudad" class="formCV" placeholder="Ciudad">
                        <br><button>A&ntilde;adir otro t&iacute;tulo </button>
                    </div>
                </div>
                <hr>
                <div id="divContenedorSeccionFormacionAdicional">
                    <h2 class="tituloSeccion">Formaci&oacute;n adicional</h2>
                    <div id="divContenedorFormacionAdicional" class="elementoDeSeccion">
                        <input type="text" id="inCertificadoExtra" class="formNombre" placeholder="T&iacute;tulo, certificaci&oacute;n o diplomado">
                        <br><input type="text" id="inLugarCertificacionExtra" class="formCV" placeholder="Instituci&oacute;n donde lo obtuviste">
                        <br><button>A&ntilde;adir otro t&iacute;tulo </button>
                    </div>
                </div>
                <hr>
                <div id="divContenedorSeccionExperiencia">
                    <h2 class="tituloSeccion">Experiencia</h2>
                    <div id="divContenedorExperiencia" class="elementoDeSeccion">
                        <input type="text" id="inPuesto" class="formNombre" placeholder="Puesto o cargo ejercido" required>
                        <br><input type="text" id="inLugarDeTrabajo" class="formCV" placeholder="Nombre de la empresa" required/>
                        <span class="texto">Fecha de inicio</span><input type="date" id="inFechaInicioTrabajo" class="formCV" placeholder="Fecha de inicio">
                        <span class="texto">Fecha de finalizaci&oacute;n</span><input type="date" id="inFechaFinTrabajo" class="formCV" placeholder="Fecha de finalizaci&oacute;n">
                        <textarea class="estilo" placeholder="Describe brevemente las actividades que realizaste en este trabajo"></textarea>
                        <br><button>A&ntilde;adir otro cargo</button>
                    </div>
                </div>
                <hr>
                <div id="divContenedorSeccionIdiomas">
                    <h2 class="tituloSeccion">Idiomas</h2>
                    <div id="divContenedorIdioma" class="elementoDeSeccion">
                        <input type="text" id="inIdioma" class="formNombre" placeholder="Idioma">
                        <br><input type="text" id="inNivelIdioma" class="formCV" placeholder="Nivel de conocimiento">
                        <br><button>A&ntilde;adir otro idioma</button>
                    </div>
                </div>
                <br><br>
                <div id="divContenedorHabilidades" class="contenedorNombre">
                    <textarea id="inHabilidades" class="estilo" placeholder="Describe de forma breve tus habilidades. P. ej. 'Me considero una persona responsable, proactiva y capaz de trabajar bajo presi&oacute;n...'"></textarea>
                </div>
                <div id="divContenedorBotonContinuar" class="divDerecha">
                    <input class="boton" type="submit" value="Continuar">
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