<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
<?php
require_once('clases.php');

//Registro en Bds del promotor
$conexionBd = new Conexion("localhost", "anprorgm_admin", "Admin_*2016", "anprorgm_registros");
$mysql = $conexionBd->conectar();

$registroPromotor = new Promotor($_POST['nombre'], $_POST['email'], $_POST['tel'], $_POST['ciudad']);
 $registroPromotor->nuevoPromotor($mysql);

 ?>
</html>
