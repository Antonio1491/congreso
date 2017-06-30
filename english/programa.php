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
    <title>SCHEDULE AT GLANCE | Congreso Internacional de Parques Urbanos</title>
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
    <div class=" header header-8">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">SCHEDULE AT GLANCE</h3>
        </div>
      </div>
    </div>
    <div class="row column contenido">
      <h4 class="titulo-programa ">TRACKS</h4>
    </div>
    <div class="row">
      <div class="column pistas text-center">
        <figure>
          <img src="img/icon-magistrales.png" alt="icon-magistrales">
          <figcaption>Keynote Presentations</figcaption>
        </figure>
        <figure>
          <img src="img/icon-talleres.png" alt="icon-magistrales">
          <figcaption>Workshops</figcaption>
        </figure>
        <figure>
          <img src="img/icon-sesiones.png" alt="icon-magistrales">
          <figcaption>Educational Sessions</figcaption>
        </figure>
        <figure>
          <img src="img/icon-expo.png" alt="icon-magistrales">
          <figcaption>Expo</figcaption>
        </figure>
      </div>
    </div>
    <hr>
    <div class="row column fila-espacio">
      <h4 class="titulo-programa">THEMES</h4>
    </div>
    <div class="row">
      <div class="column pistas">
        <figure>
          <img src="img/planeacion-y-diseno-02.png" alt="icon-magistrales">
          <figcaption>Planning and Design</figcaption>
        </figure>
        <figure>
          <img src="img/uso-del-espacio-publico-02.png" alt="icon-magistrales">
          <figcaption>Economy and Uses of Public Space</figcaption>
        </figure>
        <figure>
          <img src="img/la-ciudad-02.png" alt="icon-magistrales">
          <figcaption>The City</figcaption>
        </figure>
        <figure>
          <img src="img/salud-y-medio-ambiente-02.png" alt="icon-magistrales">
          <figcaption>Health and Environment</figcaption>
        </figure>
        <figure>
          <img src="img/servicio-publico-02.png" alt="icon-magistrales">
          <figcaption>Public Function and Citizen Participation</figcaption>
        </figure>
      </div>
    </div>
    <hr>
    <!-- Horarios -->
    <div class="row column fila-espacio">
      <h4 class="titulo-programa">SCHEDULES</h4>
    </div>
    <div class="row align-center">
      <div class="column-10 horario">
        <img src="img/dia-1.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column-10 horario">
        <img src="img/dia-2.png" alt="">
      </div>
    </div>
    <div class="row align-center">
      <div class="column-10 fila-espacio horario">
        <img src="img/dia-3.png" alt="">
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
