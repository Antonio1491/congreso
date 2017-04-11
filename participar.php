<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso Internacional de Parques Urbanos</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="">
    <div class="row column">
      <h3 class="titulos text-center">¿QUÉ ES Y POR QUÉ PARTICIPAR?</h3>
    </div>
    <div class="row">
      <div class="column">
        <p>El Primer Congreso de Parques Urbanos es la primera edición de un evento que se realizará anualmente que tendrá como objetivo reunir y capacitar a profesionales, funcionarios públicos, técnicos, tomadores de decisiones, académicos, estudiantes, sociedad civil y proveedores relacionados al espacio público en un mismo lugar, para impulsar la industria de los parques urbanos y la recreación en México, creando un espacio de  tres días de capacitación, conferencias, talleres y muestra comercial.</p>
        <p>Este evento impulsará a que profesionales de la industria de parques aumenten en número y conocimientos, para que amplíen sus negocios y desarrollen relaciones con otros asistentes.</p>
        <p>Si todavía no estás convencido de asistir a este congreso compartimos algunas de las razones por las que debes asistir:</p>

      </div>
    </div>
  </article>

</main>



<?php include'assets/footer.php'; ?>
