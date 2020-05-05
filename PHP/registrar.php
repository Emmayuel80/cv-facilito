<?php
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Validate username
    if(empty(trim($_POST["inCorreo"]))){
        $username_err = "Por favor ingresa un nombre de usuario. <br>";
    } else{
        // Prepare a select statement
        $sql = "SELECT correo FROM usuario WHERE correo = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["inCorreo"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este correo ya esta registrado. Ingresa uno nuevo.<br>";
                } else{
                    $username = trim($_POST["inCorreo"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["inContrasena"]))){
        $password_err = "Por favor ingresa una contrasena. <br>";     
    } elseif(strlen(trim($_POST["inContrasena"])) < 6){
        $password_err = "Las contrasenas deben tener al menos 6 caracteres. <br>";
    } else{
        $password = trim($_POST["inContrasena"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["inContrasenaValidacion"]))){
        $confirm_password_err = "Por favor confirma tu contrasena. <br>";     
    } else{
        $confirm_password = trim($_POST["inContrasenaValidacion"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Las contrasenas no coinciden. <br>";
        }
    }
    echo $password_err;
    echo $confirm_password_err;
    echo $username_err;
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        //TODO: Configurar el registro
        // Prepare an insert statement
        $sql = "INSERT INTO usuario (correo, direccion, contrasena, nombre, ap_materno, ap_paterno, fecha_nac) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $direccion, $param_password, $nombre, $ap_materno, $ap_paterno, $fecha_nac);
            
            // Set parameters
            $param_username = $username;
            $param_password = trim($_POST["inContrasena"]);
            $nombre = trim($_POST["nombre"]);
            $ap_paterno = trim($_POST["ap_paterno"]);
            $ap_materno = trim($_POST["ap_materno"]);
            $direccion = trim($_POST["direccion"]);
            $fecha_nac = trim($_POST["fecha_nac"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: inicioSesion.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
            
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    //}
    
    // Close connection
    mysqli_close($link);
    }
}
?>