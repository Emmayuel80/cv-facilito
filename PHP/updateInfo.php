<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = 'UPDATE usuario 
            SET nombre="'. $_POST['nombre'] . '", direccion="' . $_POST['direccion'] . '", fecha_nac="'. $_POST['fecha_nac'] . '",
                ap_paterno="'. $_POST['ap_paterno'] . '", ap_materno="'. $_POST['ap_materno'] . '"
            WHERE correo="'. $_SESSION['correo'] . '"';
    
    if (mysqli_query($link, $sql)) {
        echo "Informacion actualizada correctamente";
        changePic($link);
        deleteTelefonos($link);
        insertarTelefonos($link);
        actualizarDatos($link);
        header('location: perfil.php');
    } else {
        echo "Error updating record: " . mysqli_error($link);
    }

}

function insertarTelefonos($link){
    $sql_cv = "INSERT INTO telefono (correo, tel) VALUES (?, ?)";
    foreach($_POST['tel'] as $key => $telef){
        if($stmt = mysqli_prepare($link, $sql_cv)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $correo, $tel);
        
            $tel = $telef;
            $correo = $_SESSION['correo'];
            if(!mysqli_stmt_execute($stmt)){
                echo "Error al insertar telefonos.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    
}

function changePic($link){
$target_dir = getcwd().DIRECTORY_SEPARATOR . "uploads/";
$target_file = $target_dir . $_SESSION['correo'] . basename($_FILES["imagen"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["imagen"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  //check size
  if ($_FILES["imagen"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (@move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
      $sql_ruta = 'UPDATE usuario 
      SET imagen="'. $target_file . '"
      WHERE correo ="' . $_SESSION['correo'] . '"';

      mysqli_query($link, $sql_ruta);

    } else {
      echo "Sorry, there was an error uploading your file.";
        }
    }
}

function deleteTelefonos($link){
    $sql_delete = 'DELETE FROM telefono WHERE correo ="'. $_SESSION['correo'] . '"';
    mysqli_query($link, $sql_delete);
}

function actualizarDatos($link){
    $sql_get = 'SELECT imagen, direccion, nombre, ap_materno, ap_paterno FROM usuario WHERE correo ="'. $_SESSION['correo'] . '"';
    $result = $link->query($sql_get);
    for ($info = array(); $row = $result->fetch_assoc(); $info[] = $row);
    $_SESSION["imagen"] = $info[0]['imagen'];
    $_SESSION["nombre"] = $info[0]['nombre'];
    $_SESSION["ap_paterno"] = $info[0]['ap_paterno'];
    $_SESSION["ap_materno"] = $info[0]['ap_materno'];
    $_SESSION["apellido"] = $info[0]['ap_paterno'] . ' ' . $info[0]['ap_materno'];
    $_SESSION["direccion"] = $info[0]['direccion'];    
}
?>