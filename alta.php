<?php
$conexion= mysqli_connect( "localhost", "root", "", "congreso");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
  die("Error en la conexión")
}


 ?>
