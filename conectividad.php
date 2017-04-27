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
    <title>Conectividad</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-ciudad">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">CONECTIVIDAD</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-12">
        <img src="img/vuelos-1.jpg" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-12">
        <img src="img/vuelos-2.jpg" alt="">
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
