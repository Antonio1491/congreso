<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-float.css">

  </head>
<?php
include('../assets/clases_2.php');

$array_propuestas = new Registro();
echo "<table>";
$listar = $array_propuestas->mostrarRegistros();
echo "</table>";

 ?>
</html>
