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
            <div id="divComenzar" class="elemento">
                <button id="btnComenzar" class="cuenta" onclick="redireccionar('formularioCV.php')" >Crear un CV como invitado</button>
            </div>
        </div>
        <div id="divTextoBienvenida" class="contenedorCentral">
            <div id="divLogotipo" class="logotipo">
                <h1>{ CV facil&iacute;to }</h1>
            </div>
            <div id="divParrafoIntroductorio" class="parrafo">
                <p>
                    ¿Quieres escribir un Curr&iacute;culum Vitae y no sabes c&oacute;mo empezar? ¡Nosotros te ayudamos!
                </p>
                <p></p>
                Nuestro objetivo es proveer una herramienta facilitadora que te ayude a crear un Curr&iacute;culum
                Vitae de manera sencilla, a trav&eacute;s de un formulario con preguntas simples. S&oacute;lo tienes
                que escribir tu informaci&oacute;n y descargar. </p>
                <p> F&aacute;cil, ¿no?.
                </p>
            </div>
            <div id="divVideoPromocional">
                <iframe width="361" height="204" src="https://www.youtube.com/embed/#" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
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