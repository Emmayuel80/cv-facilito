<?php
$sql_telefonos = 'SELECT tel FROM telefono WHERE correo = "'. $_SESSION['correo'] . '"';
$result = $link->query($sql_telefonos);
for ($telefonos = array(); $row = $result->fetch_assoc(); $telefonos[] = $row);
?>