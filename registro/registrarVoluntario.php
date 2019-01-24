<?php
include ('../assets/clases_2.php');
$registro = new Voluntarios();

$nombre = $_POST["nombre"];
$apPaterno = $_POST["apellidoPaterno"];
$apMaterno = $_POST["apellidoMaterno"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$genero = $_POST["genero"];
$universidad = $_POST["universidad"];

if (empty($_POST["dia_1_m"])) {
  $dia1M = null;
}
else {
  $dia1M = $_POST["dia_1_m"];
}

if (empty($_POST["dia_1_v"])) {
  $dia1V = null;
}
else {
  $dia1V = $_POST["dia_1_v"];
}

if (empty($_POST["dia_2_m"])) {
  $dia2M = null;
}
else {
  $dia2M = $_POST["dia_2_m"];
}

if (empty($_POST["dia_2_v"])) {
  $dia2V = null;
}
else {
  $dia2V = $_POST["dia_2_v"];
}

if (empty($_POST["dia_3_m"])) {
  $dia3M = null;
}
else {
  $dia3M = $_POST["dia_3_m"];
}

if (empty($_POST["dia_3_v"])) {
  $dia3V = null;
}
else {
  $dia3V = $_POST["dia_3_v"];
}

if (empty($_POST["dia_4_m"])) {
  $dia4M = null;
}
else {
  $dia4M = $_POST["dia_4_m"];
}

if (empty($_POST["dia_4_v"])) {
  $dia4V = null;
}
else {
  $dia4V = $_POST["dia_4_v"];
}

// $dia1M = $registro->validarTurno($_POST["dia_1_m"]);

// $dia1V = $_POST["dia_1_v"];
// $dia2M = $_POST["dia_2_m"];
// $dia2V = $_POST["dia_2_v"];
// $dia3M = $_POST["dia_3_m"];
// $dia3V = $_POST["dia_3_v"];
// $dia4M = $_POST["dia_4_m"];
// $dia4V = $_POST["dia_4_v"];


$nuevoVoluntario = $registro->registroVoluntario($nombre, $apPaterno, $apMaterno, $email, $celular,
                $genero, $universidad, $dia1M, $dia2M, $dia3M, $dia4M, $dia1V,  $dia2V, $dia3V,  $dia4V);

if($nuevoVoluntario){
  $correoAceptado = $registro->correoAceptacionVoluntario($email, $nombre);
  
  echo header("Location: VoluntarioRegistrado.html");



}
else{
  echo"<script language='JavaScript'>
      alert('Error: No pudimos realizar el registro');
      </script>";
}





?>
