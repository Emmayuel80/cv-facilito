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
                    <input name="nombre" Type="text" id="inNombre" placeholder="Nombre" class="formNombre" required>
                    <input name="ap_Paterno" type="text" id="inApPaterno" placeholder="Apellido paterno" class="formNombre" required>
                    <input name="ap_Materno"type="text" id="inApMaterno" placeholder = "Apellido Materno" class="formNombre" required><br>
                </div>
                <div id="divFotoCV" class="panelForm">
                    <span>&nbsp;</span>
                    <img src="<?php //TODO: Implementar las rutas de las fotos de perfil. ?>" class="fotoPerfil" name="imagen">
                </div> 
                <div id="divContenedorDatosGrales" class="panelForm">
                    <h3 class="subtitulo"> Datos generales y de contacto </h3>
                    <span class="texto">Fecha de nacimiento</span> <input name="fecha_nac" type="date"  class="formCV" id="inFechaNac" placeholder="Fecha de nacimiento" required>
                    <span class="texto">Direcci&oacute;n</span><input name="direccion" Type="text" id="inDireccion" class="formCV" required>
                    <span class="texto">Correo electr&oacute;nico</span><input name="correo" Type="email" id="inCorreo" class="formCV"required>
                    <span class="texto">Tel&eacute;fono(s): </span><blockquote>
                    <div id="divContenedorTelefono">
                    <input type="text" id="inNumeroTelefonico" class="formCV" name="tel[]">
                    </div>
                    <button> A&ntilde;adir otro n&uacute;mero </button><blockquote>
                </div> 
                <div id="divContenedorCompetencias" class="contenedorNombre">
                    <textarea name="competencias" id="inCompetencias" class="estilo" placeholder="Describe de forma breve tus competencias. P. ej. 'Poseo un amplio conocimiento en mi &aacute;rea de especializaci&oacute;n y puedo manejar perfectamente toda la paqueter&iacute;a office...'"></textarea>
                </div>
                <hr>
                <div id="divContenedorSeccionEstudios">
                    <h2 class="tituloSeccion">Estudios</h2>
                    <div id="divContenedorEstudios" class="elementoDeSeccion">
                        <input name="titulo[]" type="text" id="inTitulo" class="formNombre" placeholder="T&iacute;tulo o certificaci&oacute;n" required>
                        <br><input name="institucion[]" type="text" id="inNombreEscuela" class="formCV" placeholder="Nombre de la instituci&oacute;n" required/>
                        
                       <span class="texto">A&ntilde;o de inicio: </span>
                        <select id="inInicioEstudios" class="formCV" name="a_inicio[]" >
                            <option value='1950'>1950</option>
                            <option value='1951'>1951</option>
                            <option value='1952'>1952</option>
                            <option value='1953'>1953</option>
                            <option value='1954'>1954</option>
                            <option value='1955'>1955</option>
                            <option value='1956'>1956</option>
                            <option value='1957'>1957</option>
                            <option value='1958'>1958</option>
                            <option value='1959'>1959</option>
                            <option value='1960'>1960</option>
                            <option value='1961'>1961</option>
                            <option value='1962'>1962</option>
                            <option value='1963'>1963</option>
                            <option value='1964'>1964</option>
                            <option value='1965'>1965</option>
                            <option value='1966'>1966</option>
                            <option value='1967'>1967</option>
                            <option value='1968'>1968</option>
                            <option value='1969'>1969</option>
                            <option value='1970'>1970</option>
                            <option value='1971'>1971</option>
                            <option value='1972'>1972</option>
                            <option value='1973'>1973</option>
                            <option value='1974'>1974</option>
                            <option value='1975'>1975</option>
                            <option value='1976'>1976</option>
                            <option value='1977'>1977</option>
                            <option value='1978'>1978</option>
                            <option value='1979'>1979</option>
                            <option value='1980'>1980</option>
                            <option value='1981'>1981</option>
                            <option value='1982'>1982</option>
                            <option value='1983'>1983</option>
                            <option value='1984'>1984</option>
                            <option value='1985'>1985</option>
                            <option value='1986'>1986</option>
                            <option value='1987'>1987</option>
                            <option value='1988'>1988</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>
                            <option value='1994'>1994</option>
                            <option value='1995'>1995</option>
                            <option value='1996'>1996</option>
                            <option value='1997'>1997</option>
                            <option value='1998'>1998</option>
                            <option value='1999'>1999</option>
                            <option value='2000'>2000</option>
                            <option value='2001'>2001</option>
                            <option value='2002'>2002</option>
                            <option value='2003'>2003</option>
                            <option value='2004'>2004</option>
                            <option value='2005'>2005</option>
                            <option value='2006'>2006</option>
                            <option value='2007'>2007</option>
                            <option value='2008'>2008</option>
                            <option value='2009'>2009</option>
                            <option value='2010'>2010</option>
                            <option value='2011'>2011</option>
                            <option value='2012'>2012</option>
                            <option value='2013'>2013</option>
                            <option value='2014'>2014</option>
                            <option value='2015'>2015</option>
                            <option value='2016'>2016</option>
                            <option value='2017'>2017</option>
                            <option value='2018'>2018</option>
                            <option value='2019'>2019</option>
                            <option value='2020'>2020</option>
                            <option value='Actualidad'>Actualidad</option>
                        </select>

                        <span class="texto">A&ntilde;o de finalizaci&oacute;n: </span>
                        <select id="inFinEstudios" class="formCV" name="a_fin[]" >
                            <option value='1950'>1950</option>
                            <option value='1951'>1951</option>
                            <option value='1952'>1952</option>
                            <option value='1953'>1953</option>
                            <option value='1954'>1954</option>
                            <option value='1955'>1955</option>
                            <option value='1956'>1956</option>
                            <option value='1957'>1957</option>
                            <option value='1958'>1958</option>
                            <option value='1959'>1959</option>
                            <option value='1960'>1960</option>
                            <option value='1961'>1961</option>
                            <option value='1962'>1962</option>
                            <option value='1963'>1963</option>
                            <option value='1964'>1964</option>
                            <option value='1965'>1965</option>
                            <option value='1966'>1966</option>
                            <option value='1967'>1967</option>
                            <option value='1968'>1968</option>
                            <option value='1969'>1969</option>
                            <option value='1970'>1970</option>
                            <option value='1971'>1971</option>
                            <option value='1972'>1972</option>
                            <option value='1973'>1973</option>
                            <option value='1974'>1974</option>
                            <option value='1975'>1975</option>
                            <option value='1976'>1976</option>
                            <option value='1977'>1977</option>
                            <option value='1978'>1978</option>
                            <option value='1979'>1979</option>
                            <option value='1980'>1980</option>
                            <option value='1981'>1981</option>
                            <option value='1982'>1982</option>
                            <option value='1983'>1983</option>
                            <option value='1984'>1984</option>
                            <option value='1985'>1985</option>
                            <option value='1986'>1986</option>
                            <option value='1987'>1987</option>
                            <option value='1988'>1988</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>
                            <option value='1994'>1994</option>
                            <option value='1995'>1995</option>
                            <option value='1996'>1996</option>
                            <option value='1997'>1997</option>
                            <option value='1998'>1998</option>
                            <option value='1999'>1999</option>
                            <option value='2000'>2000</option>
                            <option value='2001'>2001</option>
                            <option value='2002'>2002</option>
                            <option value='2003'>2003</option>
                            <option value='2004'>2004</option>
                            <option value='2005'>2005</option>
                            <option value='2006'>2006</option>
                            <option value='2007'>2007</option>
                            <option value='2008'>2008</option>
                            <option value='2009'>2009</option>
                            <option value='2010'>2010</option>
                            <option value='2011'>2011</option>
                            <option value='2012'>2012</option>
                            <option value='2013'>2013</option>
                            <option value='2014'>2014</option>
                            <option value='2015'>2015</option>
                            <option value='2016'>2016</option>
                            <option value='2017'>2017</option>
                            <option value='2018'>2018</option>
                            <option value='2019'>2019</option>
                            <option value='2020'>2020</option>
                            <option value='Actualidad'>Actualidad</option>
                        </select>
                        <br><input name="pais[]" type="text" id="inPais" class="formCV" placeholder="Pa&iacute;s">
                        <input name="ciudad[]" type="text" id="inCiudad" class="formCV" placeholder="Ciudad">
                    </div>
                    <br><button>A&ntilde;adir otro t&iacute;tulo </button>
                </div>
                <hr>
                <div id="divContenedorSeccionFormacionAdicional">
                    <h2 class="tituloSeccion">Formaci&oacute;n adicional</h2>
                    <div id="divContenedorFormacionAdicional" class="elementoDeSeccion">
                        <input name="certificado[]" type="text" id="inCertificadoExtra" class="formNombre" placeholder="T&iacute;tulo, certificaci&oacute;n o diplomado">
                        <br><input name="lugar[]" type="text" id="inLugarCertificacionExtra" class="formCV" placeholder="Instituci&oacute;n donde lo obtuviste">
                    </div>
                    <br><button>A&ntilde;adir otro t&iacute;tulo </button>
                </div>
                <hr>
                <div id="divContenedorSeccionExperiencia">
                    <h2 class="tituloSeccion">Experiencia</h2>
                    <div id="divContenedorExperiencia" class="elementoDeSeccion">
                        <input name="puesto[]" type="text" id="inPuesto" class="formNombre" placeholder="Puesto o cargo ejercido" required>
                        <br><input name="empresa[]" type="text" id="inLugarDeTrabajo" class="formCV" placeholder="Nombre de la empresa" required/>
                        <span class="texto">A&ntilde;o de inicio</span>
                        <select id="inInicioTrabajo" class="formCV" name="fecha_inicio[]" >
                            <option value='1950'>1950</option>
                            <option value='1951'>1951</option>
                            <option value='1952'>1952</option>
                            <option value='1953'>1953</option>
                            <option value='1954'>1954</option>
                            <option value='1955'>1955</option>
                            <option value='1956'>1956</option>
                            <option value='1957'>1957</option>
                            <option value='1958'>1958</option>
                            <option value='1959'>1959</option>
                            <option value='1960'>1960</option>
                            <option value='1961'>1961</option>
                            <option value='1962'>1962</option>
                            <option value='1963'>1963</option>
                            <option value='1964'>1964</option>
                            <option value='1965'>1965</option>
                            <option value='1966'>1966</option>
                            <option value='1967'>1967</option>
                            <option value='1968'>1968</option>
                            <option value='1969'>1969</option>
                            <option value='1970'>1970</option>
                            <option value='1971'>1971</option>
                            <option value='1972'>1972</option>
                            <option value='1973'>1973</option>
                            <option value='1974'>1974</option>
                            <option value='1975'>1975</option>
                            <option value='1976'>1976</option>
                            <option value='1977'>1977</option>
                            <option value='1978'>1978</option>
                            <option value='1979'>1979</option>
                            <option value='1980'>1980</option>
                            <option value='1981'>1981</option>
                            <option value='1982'>1982</option>
                            <option value='1983'>1983</option>
                            <option value='1984'>1984</option>
                            <option value='1985'>1985</option>
                            <option value='1986'>1986</option>
                            <option value='1987'>1987</option>
                            <option value='1988'>1988</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>
                            <option value='1994'>1994</option>
                            <option value='1995'>1995</option>
                            <option value='1996'>1996</option>
                            <option value='1997'>1997</option>
                            <option value='1998'>1998</option>
                            <option value='1999'>1999</option>
                            <option value='2000'>2000</option>
                            <option value='2001'>2001</option>
                            <option value='2002'>2002</option>
                            <option value='2003'>2003</option>
                            <option value='2004'>2004</option>
                            <option value='2005'>2005</option>
                            <option value='2006'>2006</option>
                            <option value='2007'>2007</option>
                            <option value='2008'>2008</option>
                            <option value='2009'>2009</option>
                            <option value='2010'>2010</option>
                            <option value='2011'>2011</option>
                            <option value='2012'>2012</option>
                            <option value='2013'>2013</option>
                            <option value='2014'>2014</option>
                            <option value='2015'>2015</option>
                            <option value='2016'>2016</option>
                            <option value='2017'>2017</option>
                            <option value='2018'>2018</option>
                            <option value='2019'>2019</option>
                            <option value='2020'>2020</option>
                            <option value='Actualidad'>Actualidad</option>
                        </select>

                        <span class="texto">A&ntilde;o de finalizaci&oacute;n</span>
                        <select id="inFinEstudios" class="formCV" name="fecha_fin[]">
                            <option value='1950'>1950</option>
                            <option value='1951'>1951</option>
                            <option value='1952'>1952</option>
                            <option value='1953'>1953</option>
                            <option value='1954'>1954</option>
                            <option value='1955'>1955</option>
                            <option value='1956'>1956</option>
                            <option value='1957'>1957</option>
                            <option value='1958'>1958</option>
                            <option value='1959'>1959</option>
                            <option value='1960'>1960</option>
                            <option value='1961'>1961</option>
                            <option value='1962'>1962</option>
                            <option value='1963'>1963</option>
                            <option value='1964'>1964</option>
                            <option value='1965'>1965</option>
                            <option value='1966'>1966</option>
                            <option value='1967'>1967</option>
                            <option value='1968'>1968</option>
                            <option value='1969'>1969</option>
                            <option value='1970'>1970</option>
                            <option value='1971'>1971</option>
                            <option value='1972'>1972</option>
                            <option value='1973'>1973</option>
                            <option value='1974'>1974</option>
                            <option value='1975'>1975</option>
                            <option value='1976'>1976</option>
                            <option value='1977'>1977</option>
                            <option value='1978'>1978</option>
                            <option value='1979'>1979</option>
                            <option value='1980'>1980</option>
                            <option value='1981'>1981</option>
                            <option value='1982'>1982</option>
                            <option value='1983'>1983</option>
                            <option value='1984'>1984</option>
                            <option value='1985'>1985</option>
                            <option value='1986'>1986</option>
                            <option value='1987'>1987</option>
                            <option value='1988'>1988</option>
                            <option value='1989'>1989</option>
                            <option value='1990'>1990</option>
                            <option value='1991'>1991</option>
                            <option value='1992'>1992</option>
                            <option value='1993'>1993</option>
                            <option value='1994'>1994</option>
                            <option value='1995'>1995</option>
                            <option value='1996'>1996</option>
                            <option value='1997'>1997</option>
                            <option value='1998'>1998</option>
                            <option value='1999'>1999</option>
                            <option value='2000'>2000</option>
                            <option value='2001'>2001</option>
                            <option value='2002'>2002</option>
                            <option value='2003'>2003</option>
                            <option value='2004'>2004</option>
                            <option value='2005'>2005</option>
                            <option value='2006'>2006</option>
                            <option value='2007'>2007</option>
                            <option value='2008'>2008</option>
                            <option value='2009'>2009</option>
                            <option value='2010'>2010</option>
                            <option value='2011'>2011</option>
                            <option value='2012'>2012</option>
                            <option value='2013'>2013</option>
                            <option value='2014'>2014</option>
                            <option value='2015'>2015</option>
                            <option value='2016'>2016</option>
                            <option value='2017'>2017</option>
                            <option value='2018'>2018</option>
                            <option value='2019'>2019</option>
                            <option value='2020'>2020</option>
                            <option value='Actualidad'>Actualidad</option>
                        </select>

                        <textarea name="actividades[]" class="estilo" placeholder="Describe brevemente las actividades que realizaste en este trabajo"></textarea>
                   </div>
                    <br><button>A&ntilde;adir otro cargo</button>
                </div>
                <hr>
                <div id="divContenedorSeccionIdiomas">
                    <h2 class="tituloSeccion">Idiomas</h2>
                    <div id="divContenedorIdioma" class="elementoDeSeccion">
                        <input name="idioma[]" type="text" id="inIdioma" class="formNombre" placeholder="Idioma">
                        <br><input name="nivel[]" type="text" id="inNivelIdioma" class="formCV" placeholder="Nivel de conocimiento">
                    </div>
                    <br><button>A&ntilde;adir otro idioma</button>
                </div>
                <br><br>
                <div id="divContenedorHabilidades" class="contenedorNombre">
                    <textarea name="habilidades" id="inHabilidades" class="estilo" placeholder="Describe de forma breve tus habilidades. P. ej. 'Me considero una persona responsable, proactiva y capaz de trabajar bajo presi&oacute;n...'"></textarea>
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