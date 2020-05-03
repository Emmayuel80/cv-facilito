<?php
$sql_cvs = 'SELECT idcv? FROM curriculums WHERE correo = "'. $_SESSION['correo'] . '"';
$result = $link->query($sql_cvs);
for ($cvs = array(); $row = $result->fetch_assoc(); $cvs[] = $row);
?>