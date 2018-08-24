<?php
include ('../assets/clases_2.php');

$registro = new Registro();
// datos personales del conferencista
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellidos'];
$email = $_POST['Email'];
$emailAsis = $_POST['EmailAsistente'];
$telefono = $_POST['Telefono'];
$cargo = $_POST['Cargo'];
$empresa = $_POST['Empresa'];
$localidad = $_POST['Localidad'];
$direccion = $_POST['Direccion'];
$experiencia = $_POST['Experiencia'];
$anteriormente = $_POST['Anteriormente'];
$lugar = $_POST['Lugar'];
$nombre_foto = $_FILES['fotografia']['name'];
$tipo_foto = $_FILES['fotografia']['type'];
$temporal_foto = $_FILES['fotografia']['tmp_name'];

$array = count($_POST['Nombre']);

// Datos sobre la sesión educativa
$sesion = $_POST['Sesion'];
$tema = $_POST['Tema'];
$descripcion = $_POST['Descripcion'];
$justificacion = $_POST['Justificacion'];
$objetivos = $_POST['Objetivos'];
$modalidad = $_POST['Modalidad'];
// $nombre_documento= $_FILES['archivo']['name'];
// $tipo_documento = $_FILES['archivo']['type'];
// $temporal_documento = $_FILES['archivo']['tmp_name'];
$adicionales = $_POST['Adicionales'];

$sesion = $registro->registroSesionEducativa($sesion, $tema, $descripcion, $justificacion, $objetivos, $modalidad, $adicionales);

$id_sesion = $registro->asignarId();
// echo "el id:" .$id_sesion;
$conferencista = $registro->registroConferencista($array, $nombre, $apellido, $email,
                                              $emailAsis, $telefono, $cargo, $empresa,
                                            $localidad, $direccion, $experiencia,
                                          $anteriormente, $lugar, $nombre_foto,
                                            $tipo_foto, $temporal_foto, $id_sesion);

if ( $conferencista == true && $sesion == true ) {
  echo header("Location: PropuestaRegistrada.html");

}
else{
  echo"<script language='JavaScript'>
      alert('Error: No pudimos realizar el registro');
      </script>";
  // echo "<script>window.history.go(-1);</script>";
}
 ?>
