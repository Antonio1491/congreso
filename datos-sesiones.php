<?php
include('clases.php');

$conex = new Conexion("localhost", "root", "", "conferencistas");
$conex->conectar();

$sql = "SELECT * FROM ponentes WHERE id_conferencia = 1";
$conex->consultar($sql);

while ($fila = $conex->mostrar()) {
  echo $fila['nombre'];
}





 ?>
