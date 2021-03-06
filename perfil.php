<?php include("./PHP/sesionHandler.php");
require_once './PHP/db.php';

?>

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
            <div id="divLogoPeq" class="elemento"><a href="perfil.php" class="logopeq">{ CV facil&iacute;to }</a></div>
            <div id="divCrearCV" class="elemento">
                <button id="btnCrearCV" class="cuenta" onclick="redireccionar('formularioCVu.php')">Crear CV</button>
            </div>
            <div id="divActualizarInformacion" class="elemento">
                <button id="btnActualizar" class="cuenta" onclick="redireccionar('actualizarDatos.php')">Actualizar datos</button>
            </div>
            <div id="divCerrarSesion" class="elemento">
                <button id="btnCerrarSesion" class="cuenta" onclick="redireccionar('./PHP/cerrarSesion.php')">Cerrar Sesi&oacute;n</button>
            </div>
        </div>
        <div id="divPanerlContenedorPerfil" class="panelPerfil">
            <div id="divPanelIzquierdo" class="panelInformacionPerfil">
                    <h2 class="subtitulo" id="h2NombreUsuario"><?php echo $_SESSION["nombre"]; ?></h2>
                    <div id="divContenedorImagenPerfil">
                        <img src="./IMG/icono-perfil.png" class="fotoPerfil">
                    </div>
            </div>
            <div id="divPanelDerecho" class="panelInformacionPerfil">
                <h2 class="subtitulo">Informaci&oacute;n de contacto</h2>
                <div id="divInformacionPanelDerecho" class="panelDerecho">
                    <span class="informacionPerfil">Correo electr&oacute;nico registrado: </span><span id="spanCorreo"><?php echo $_SESSION["correo"]; ?></span>
                    <br><br>
                    <span class="informacionPerfil">N&uacute;mero telef&oacute;nico: </span>
                    <?php
                    include("./PHP/getTelefonos.php");
                        if(!$telefonos[0]["tel"]){
                            echo '<span>No hay telefonos registrados. </span>'; //Arroja mensaje si no hay telefonos.
                        } else {
                            for ($i=0; $i < count($telefonos); $i++) { //Imprime todos los telefonos
                                echo '<li>' . $telefonos[$i]["tel"] . '</li>';
                            }
                        }
                    ?>
                    </span>
                    <br><br>
                    <span class="informacionPerfil">Direcci&oacute;n registrada: </span><span id="spanDireccion"><?php echo $_SESSION["direccion"] ?></span>
                </div>
            </div>
            <div id="divPanelInferior" class="panelInferior">
                <h2 class="subtitulo">Mis CV guardados</h2>
                <?php //Mostrar todos los CV guardados
                require("./PHP/obtenerCurriculums.php");
                if(!$cvs[0]["idcurriculum"]){
                    echo '<span>Aun no tienes curriculums</span>'; //Arroja mensaje si no hay curriculums
                } else {
                    for ($i=0; $i < count($cvs); $i++) { 
                        echo '
                    <div id="divContenedorCVs" class="panelCV" onclick="redireccionar(\'pdf.php?idcurriculum='. $cvs[$i]['idcurriculum'] .'\')"> 
                        <img src="IMG/file.png" class="file">
                        <span id="spanTituloCV" class="parrafo">CV '. $i .'</span>
                    </div>'; //TODO: Redireccionar a los curriculums
                    }
                }
                ?>
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