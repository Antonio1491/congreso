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
    <title>SPONSORS</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="patrocinadores">
    <div class=" header header-9">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">SPONSORS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column patrocinador-oro">
        <h4 class="text-center">GOLD</h4>
      </div>
    </div>
    <div class="row contenido-oro">
      <div class="column medium-4">
        <a href="#"><img src="img/patrocinadores/kompan.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"></a>
      </div>
      <div class="column medium-4">
        <a href="#"><img src="img/patrocinadores/play-club.png" alt=""></a>
      </div>
    </div>
    <div class="row contenido">
      <div class="column patrocinador-plata">
        <h4 class="text-center">SILVER</h4>
      </div>
    </div>
    <div class="row contenido-plata">
      <div class="column medium-4">
        <a href="#"><img src="img/patrocinadores/marca-3.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"><img src="img/patrocinadores/escofet.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"><img src="img/patrocinadores/marca-6.png" alt=""></a>
      </div>
    </div>
    <div class="row contenido">
      <div class="column patrocinador-bronce">
        <h4 class="text-center">BRONZE</h4>
      </div>
    </div>
    <div class="row contenido-bronce">
      <div class="column medium-4">
        <a href="#"><a href="#"> <img src="img/patrocinadores/fundidora.png" alt=""></a></a>
      </div>
      <div class="column medium-4">

      </div>
      <div class="column medium-4">
        <a href="http://www.deacero.com/es/" target="_blank"><img src="img/patrocinadores/deacero.png" alt=""></a>
      </div>
    </div>

    <div class="row contenido">
      <div class="column patrocinador-institucionales">
        <h4 class="text-center">SOCIOS INSTITUCIONALES</h4>
      </div>
    </div>
    <div class="row contenido-institucionales" id="">
      <div class="column shrink">
        <a href="#"> <img src="img/patrocinadores/segob.png" alt=""></a>
      </div>
      <div class="column shrink">
        <a href="#"> <img src="img/patrocinadores/conade.png" alt=""></a>
      </div>
      <div class="column shrink">
        <a href="#"> <img src="img/patrocinadores/world-urban-parks.png" alt=""></a>
      </div>
      <div class="column shrink">
        <a href="#"> <img src="img/patrocinadores/infonavit.png" alt=""></a>
      </div>
      <div class="column shrink">
        <a href="#"> <img src="img/patrocinadores/uady.png" alt=""></a>
      </div>
      <div class="column shrink">
        <a href="#"> <img src="img/patrocinadores/universidad-marista.png" alt=""></a>
      </div>
    </div>
  </article>

</main>
<?php include'assets/footer.php'; ?>
