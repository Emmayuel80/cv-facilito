<?php
$sql_cvs = 'SELECT idcurriculum FROM curriculum WHERE correo = "'. $_SESSION['correo'] . '"';
$result = $link->query($sql_cvs);
for ($cvs = array(); $row = $result->fetch_assoc(); $cvs[] = $row);
?>