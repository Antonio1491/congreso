<?php
include ('../assets/clases_2.php');

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

// Datos sobre la sesión educativa
$sesion = $_POST['Sesion'];
$tema = $_POST['Tema'];
$descripcion = $_POST['Descripcion'];
$justificacion = $_POST['Justificacion'];
$objetivos = $_POST['Objetivos'];
$modalidad = $_POST['Modalidad'];
$nombre_documento= $_FILES['archivo']['name'];
$tipo_documento = $_FILES['archivo']['type'];
$temporal_documento = $_FILES['archivo']['tmp_name'];
$adicionales = $_POST['Adicionales'];



$registro = new Registro();

// $conferencista = $registro->registroConferencista($nombre, $apellido, $email,
//                                               $emailAsis, $telefono, $cargo, $empresa,
//                                             $localidad, $direccion, $experiencia,
//                                           $anteriormente, $lugar, $nombre_foto, $tipo_foto,
//                                         $temporal_foto);

$sesion = $registro->registroSesionEducativa($sesion, $tema, $descripcion, $justificacion, $objetivos,
                                        $modalidad, $nombre_documento, $tipo_documento, $temporal_documento,
                                        $adicionales);

if ( $sesion == true ) {
  echo "Registrado con éxito";
}
else{
  echo "Error de registro" ;
}
 ?>
