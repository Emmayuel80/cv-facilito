<?php
    $sql_id = "SELECT idcurriculum FROM curriculum order by idcurriculum DESC limit 1";
    $lastId = $link->query($sql_id);
    $idCurriculum = (intval($lastId['idcurriculum'][0]) + 4);
    //Insercion basica del curriculum
    $sql_cv = "INSERT INTO curriculum (correo, idcurriculum, habilidades, competencias) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql_cv)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "siss", $correo, $idCv, $habilidades, $competencias);
            
            // Set parameters
            $correo = $_SESSION['correo'];
            $idCv = $idCurriculum;
            $habilidades = $_POST['habilidades'];
            $competencias = $_POST['competencias'];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_close($stmt);
                //Si se pudo insertar el curriculum, procedemos a insertar lo demas
                insertarEstudios($idCurriculum, $link);
                insertarExperiencia($idCurriculum, $link);
                insertarForm_adicional($idCurriculum, $link);
                insertarIdiomas($idCurriculum, $link);
                //Redireccionamiento al acabar de registrar el curriculum
                header('../perfil.php');
            } else{
                echo "Something went wrong. Please try again later.";
                mysqli_stmt_close($stmt);
            }
            
        }

    
    function insertarEstudios($id, $link){
        $sql_cv = "INSERT INTO estudios (idcurriculum, titulo, institucion, a_inicio, a_fin, ciudad, pais) VALUES (?, ?, ?, ?, ?, ?, ?)";
        foreach($_POST['titulo'] as $key => $title){
            if($stmt = mysqli_prepare($link, $sql_cv)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "issssss", $id, $titulo, $institucion, $a_inicio, $a_fin, $ciudad, $pais);
            
                $titulo = $title;
                $institucion = $_POST['institucion'][$key];
                $a_inicio = $_POST['a_inicio'][$key];
                $a_fin = $_POST['a_fin'][$key];
                $ciudad = $_POST['ciudad'][$key];
                $pais = $_POST['pais'][$key];

                if(!mysqli_stmt_execute($stmt)){
                    echo "Error al insertar estudios.";
                }
            }
            mysqli_stmt_close($stmt);
        }
        
    }

    function insertarExperiencia($id, $link){
        $sql_cv = "INSERT INTO experiencia (idcurriculum, fecha_inicio, fecha_fin, lugar, puesto, actividades) VALUES (?, ?, ?, ?, ?, ?)";
        foreach($_POST['lugar'] as $key => $place){
            if($stmt = mysqli_prepare($link, $sql_cv)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "isssss", $id, $fecha_inicio, $fecha_fin, $lugar, $puesto, $actividades);
                
                $fecha_inicio = $_POST['fecha_inicio'][$key];
                $fecha_fin = $_POST['fecha_fin'][$key];
                $lugar = $place;
                $puesto = $_POST['puesto'][$key];
                $actividades = $_POST['actividades'][$key];
            

                if(!mysqli_stmt_execute($stmt)){
                    echo "Error al insertar Experiencia.";
                }
            }
        }
    }

    function insertarForm_adicional($id, $link){
        $sql_cv = "INSERT INTO form_adicional (idcurriculum, nombre, lugar) VALUES (?, ?, ?)";
        foreach($_POST['nombre'] as $key => $p_name){
            if($stmt = mysqli_prepare($link, $sql_cv)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "iss", $id, $nombre, $lugar);
                
                $nombre = $p_name;
                $lugar = $_POST['lugar'][$key];
            

                if(!mysqli_stmt_execute($stmt)){
                    echo "Error al insertar form adicional.";
                }
            }
        }
    }

    function insertarIdiomas($id, $link){
        $sql_cv = "INSERT INTO idiomas (idcurriculum, idioma, nivel) VALUES (?, ?, ?)";
        foreach($_POST['idioma'] as $key => $lang){
            if($stmt = mysqli_prepare($link, $sql_cv)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "iss", $id, $idioma, $nivel);
                
                $idioma = $lang;
                $nivel = $_POST['nivel'][$key];
            

                if(!mysqli_stmt_execute($stmt)){
                    echo "Error al insertar Idiomas.";
                }
            }
        }
    }
?>