<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = 'UPDATE usuario 
            SET nombre="'. $_POST['nombre'] . '", direccion="' . $_POST['direccion'] . '", fecha_nac="'. $_POST['fecha_nac'] . '",
                ap_paterno="'. $_POST['ap_paterno'] . '", ap_materno='. $_POST['ap_materno'] . '"
            WHERE correo="'. $_SESSION['correo'] . '"';
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . "Informacion actualizada correctamente.";

}
?>