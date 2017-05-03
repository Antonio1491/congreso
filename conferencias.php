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
    <title>Conferencias Magistrales</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-magistrales">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">CONFERENCIAS MAGISTRALES</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="row">
        <p><span class="letra-capital">L</span>as Conferencias Magistrales serán el momento en el que todos los
          asistentes al congreso se reunirán en una misma sala para escuchar
          hablar a nuestros expertos sobre los parques urbanos y temas de interés
          común para nuestras ciudades. </p>
      </div>
      <div class="row fila-espacio">
      <div class="column medium-2">
        <img src="img/1.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Martha Fajardo</h5>
        <h6 class="text-center">Grupo Verde - Colombia</h6>
      </div>
      <div class="column medium-2">
        <img src="img/3.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Mario Shejtan</h5>
        <h6 class="text-center">Grupo Desarrollo Urbano - México</h6>
      </div>

    </div>
    <div class="row fila-espacio">
      <div class="column medium-2">
        <img src="img/2.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Robert Hammond</h5>
        <h6 class="text-center">High Line - E.E.U.U.</h6>
      </div>
      <div class="column medium-2">
        <img src="img/4.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Barbara Tulipane</h5>
        <h6 class="text-center">Directora Ejecutiva, NRPA - E.E.U.U.</h6>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-2">
        <img src="img/peter.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Peter Harnik</h5>
        <h6 class="text-center">The Trust for Public Land - E.E.U.U.</h6>
      </div>
      <div class="column medium-2">
        <img src="img/jorge-perez.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Jorge Pérez Jaramillo</h5>
        <h6 class="text-center">Ex Director del Dpto. Administrativo de Planeación de Medallín - Colombia </h6>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-2">
        <img src="img/tom.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Tom O-Rourke</h5>
        <h6 class="text-center">Director Ejecutivo Charleston Country Park - E.E.U.U</h6>
      </div>
      <div class="column medium-2">
        <img src="img/marinela-servitje.png" alt="">
      </div>
      <div class="column medium-4 contenido-magistrales ">
        <h4 class="text-center">Espacio público</h4>
        <h5 class="text-center">Marinela Servitje</h5>
        <h6 class="text-center">Directora General Siete Colores - México</h6>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
