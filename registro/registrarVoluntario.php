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

$contador = 0;
$turnos = [];

if (empty($_POST["dia_1_m"])) {
  $dia1M = "null";
}
else {
  $dia1M = $_POST["dia_1_m"];
  $contador = $contador + 1;
  $turnos[] = $dia1M;
}

if (empty($_POST["dia_1_v"])) {
  $dia1V = "null";
}
else {
  $dia1V = $_POST["dia_1_v"];
  $contador = $contador + 1;
  $turnos[] = $dia1V;
}

if (empty($_POST["dia_2_m"])) {
  $dia2M = "null";
}
else {
  $dia2M = $_POST["dia_2_m"];
  $contador = $contador + 1;
  $turnos[] = $dia2M;
}

if (empty($_POST["dia_2_v"])) {
  $dia2V = "null";
}
else {
  $dia2V = $_POST["dia_2_v"];
  $contador = $contador + 1;
  $turnos[] = $dia2V;
}

if (empty($_POST["dia_3_m"])) {
  $dia3M = "null";
}
else {
  $dia3M = $_POST["dia_3_m"];
  $contador = $contador + 1;
  $turnos[] = $dia3M;
}

if (empty($_POST["dia_3_v"])) {
  $dia3V = "null";
}
else {
  $dia3V = $_POST["dia_3_v"];
  $contador = $contador + 1;
  $turnos[] = $dia3V;
}

if (empty($_POST["dia_4_m"])) {
  $dia4M = "null";
}
else {
  $dia4M = $_POST["dia_4_m"];
  $contador = $contador + 1;
  $turnos[] = $dia4M;
}

if (empty($_POST["dia_4_v"])) {
  $dia4V = "null";
}
else {
  $dia4V = $_POST["dia_4_v"];
  $contador = $contador + 1;
  $turnos[] = $dia4V;
}


if ($contador == 2) {
  echo "Seleccionaste 2 turnos";

  $nuevoVoluntario = $registro->registroVoluntario($nombre, $apPaterno, $apMaterno, $email, $celular,
                  $genero, $universidad, $dia1M, $dia2M, $dia3M, $dia4M, $dia1V, $dia2V, $dia3V, $dia4V);

  // $turnoAsignado = $registro->turnoAsignado($turnos);
  //

  if($nuevoVoluntario){

    foreach ($turnos as $valor) {
      $turno = "'".$valor."'";
      $turnos_aux[] = $turno;
    }

    $turno1 = $turnos_aux[0];
    $turno2 = $turnos_aux[1];

    $correoAceptado = $registro->correoAceptacionVoluntario($email, $nombre, $turno1, $turno2);
    echo header("Location: VoluntarioRegistrado.html");
  }
  else{
    echo"<script language='JavaScript'>
        alert('Error: No pudimos realizar el registro');
        </script>";
  }

}

elseif ($contador < 2 ) {
  echo"<script language='JavaScript'>
      alert('Selecciona almenos 2 turnos para poder registrarte');
      </script>";

   echo "<script>window.history.go(-1);</script>";
}
else {
  echo"<script language='JavaScript'>
      alert('No puedes seleccionar más de 2 opciones');
      </script>";

   echo "<script>window.history.go(-1);</script>";
}









?>
