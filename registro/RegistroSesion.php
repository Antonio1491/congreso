<?php
include ('../assets/clases_2.php');

// datos personales del conferencista
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
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
$nombre_foto = $_FILES['Foto']['name'];
$tipo_foto = $_Files['Foto']['type'];
$temporal_foto = $_Files['Foto']['tmp_name'];

// Datos sobre la sesión educativa
$sesion = $_POST['Sesion'];
$tema = $_POST['Tema'];
$descripcion = $_POST['Descripcion'];
$justificacion = $_POST['Justificacion'];
$objetivos = $_POST['Objetivos'];
$modalidad = $_POST['Modalidad'];
$documento = $_FILES['Documento']['name'];
$documento = $_FILES['Documento']['type'];
$temporal_documento = $_FILES['Documento']['tmp_name'];
$adicionales = $_POST['Adicionales'];

$consultar = new Conexion;

$consultar->registrarConferencista();



 ?>
