<?php
$sql_imagen = 'SELECT imagen FROM usuario WHERE correo = "'. $_SESSION['correo'] . '"';
$result = $link->query($sql_imagen);
for ($imagen = array(); $row = $result->fetch_assoc(); $imagen[] = $row);
?>