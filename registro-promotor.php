<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
<?php
require('clases.php');

//Registro en Bds del promotor
// $conexion = new Conexion("localhost", "root", "", "congreso");
$conexion = new Conexion("mysql.hostinger.mx", "u951310947_tono", "informatica14#", "u951310947_raso");
$conexion->conectar();

$fecha = date('Y-m-d H:i:s');

$sql="INSERT INTO promotores values (null, '".$_POST['nombre']."', '".$_POST['email']."', '".$_POST['tel']."', '".$_POST['ciudad']."', '$fecha')";
$conexion->insertar($sql);

 ?>
</html>
