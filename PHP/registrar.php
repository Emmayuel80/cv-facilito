<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Validate username
    if(empty(trim($_POST["inCorreo"]))){
        $username_err = "Please enter a username.";
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
                    $username_err = "This username is already taken.";
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
   /* if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }*/
    
    // Validate confirm password
    /*if(empty(trim($_POST["verif"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["verif"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }*/
    
    // Check input errors before inserting in database
    //if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        //TODO: Configurar el registro
        // Prepare an insert statement
        $sql = "INSERT INTO lector (idLector, Nombre, Ap_Paterno, Ap_Materno, Email, Genero, Edad, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "isssssis", $idLector,$nombre, $apellidoPat, $apellidoMat, $param_username, $genero, $edad,$param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = trim($_POST["password"]);
            $nombre = trim($_POST["nombre"]);
            $apellidoPat = trim($_POST["apellidoPat"]);
            $apellidoMat = trim($_POST["apellidoMat"]);
            $genero = trim($_POST["genero"]);
            $edad = intval(trim($_POST["edad"]));
            $idLector = (intval($lastId[0]['idLector']) + 53);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
?>