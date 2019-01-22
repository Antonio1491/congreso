<?php
include ('../assets/clases_2.php');
$nombre = $_POST["nombre"];
$apPaterno = $_POST["apellidoPaterno"];
$apMaterno = $_POST["apellidoMaterno"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$genero = $_POST["genero"];
$universidad = $_POST["universidad"];
$dia1M = $_POST["dia_1_m"];
$dia1V = $_POST["dia_1_v"];
$dia2M = $_POST["dia_2_m"];
$dia2V = $_POST["dia_2_v"];
$dia3M = $_POST["dia_3_m"];
$dia3V = $_POST["dia_3_v"];
$dia4M = $_POST["dia_4_m"];
$dia4V = $_POST["dia_4_v"];


// $array = implode("," , $arrayTurno);

// $turnoVespertino = $_POST["vespertino"];

$registro = new Voluntarios();
$nuevoRegistro = $registro->registroVoluntario($nombre, $apPaterno, $apMaterno, $email, $celular,
                $genero, $universidad, $dia1M, $dia2M, $dia3M, $dia4M, $dia1V,  $dia2V, $dia3V,  $dia4V);






?>
