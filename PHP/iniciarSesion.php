<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: profile.php");
    exit;
}
 
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["inCorreo"]))){
        $username_err = "Por favor ingresa tu correo.";
    } else{
        $username = trim($_POST["inCorreo"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["inContrasena"]))){
        $password_err = "Por favor ingresa tu contrasena.";
    } else{
        $password = trim($_POST["inContrasena"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT correo, contraseña, imagen, direccion, nombre, ap_materno, ap_paterno FROM usuario WHERE correo = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $correo, $contrasena, $imagen, $direccion, $nombre, $ap_materno, $ap_paterno);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $contrasena){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["correo"] = $correo;
                            $_SESSION["imagen"] = $imagen;
                            $_SESSION["nombre"] = $nombre;
                            $_SESSION["apellido"] = $ap_paterno . ' ' . $ap_materno;
                            $_SESSION["direccion"] = $direccion;                          
                            
                            // Redirect user to welcome page
                            header("location: ./profile.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>