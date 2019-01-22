<?php
include ('../assets/clases_2.php');
$nombre = $_POST["nombre"];
$apPaterno = $_POST["apellidoPaterno"];
$apMaterno = $_POST["apellidoMaterno"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$genero = $_POST["genero"];
$universidad = $_POST["universidad"];

$arrayTurno = $_POST["turno"];
// $array = implode("," , $arrayTurno);

// $turnoVespertino = $_POST["vespertino"];

$registro = new Voluntarios();
$nuevoRegistro = $registro->registroVoluntario($nombre, $apPaterno, $apMaterno, $email, $celular,
                $genero, $universidad, implode($arrayTurno );



?>
