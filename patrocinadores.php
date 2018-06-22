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
    <title>Patrocinadores y Socios Institucionales</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="patrocinadores">
    <div class=" header header-9">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">PATROCINADORES Y SOCIOS INSTITUCIONALES</h1>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-4 organiza">
        <h4 class="text-center ">ORGANIZA</h4>
      </div>
      <div class="column medium-8 patrocinador-oro">
        <h4 class="text-center">ORO</h4>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4 text-center">
        <a href="#"><img src="img/patrocinadores/anpr.jpg" alt=""></a>
      </div>
      <div class="column medium-4 text-center">
        <a href="#"><img src="img/patrocinadores/playclub.jpg" alt=""></a>
      </div>
      <div class="column medium-4 text-center">
        <a href="#"><img src="img/patrocinadores/fundacion-coca.png" alt=""></a>
      </div>
    </div>
    <div class="row contenido text-center">
      <div class="column medium-12 presentan">
        <h4>PRESENTAN</h4>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4 text-center">
        <a href="http://www.parquesdemexico.org/consultora/" target="_blank" title="Ir a www.parquesdemexico.org">
          <img data-src="img/patrocinadores/parques-mexico.jpg" alt="Espacios Públicos y Parques de México" >
        </a>
      </div>
      <div class="column medium-4 text-center">
        <a href="https://www.worldurbanparks.org/en/" target="_blank" title="Ir a www.worldurbanparks.org">
          <img data-src="img/patrocinadores/urban-parks.jpg" alt="World urban Parks" >
        </a>

      </div>
      <div class="column medium-4 text-center">
        <a href="http://parquesalegres.org/" target="_blank" title="Ir a www.parquesalegres.org">
          <img data-src="img/patrocinadores/parques-alegres.jpg" alt="Parques Alegres" >
        </a>
      </div>
    </div>
    <div class="row">
      <div class="column medium-6 text-center">
        <a href="https://www.gob.mx/sedatu" target="_blank" title="Ir a www.sedatu.gob">
          <img data-src="img/patrocinadores/sedatu.jpg" alt="SEDATU" >
        </a>
      </div>
      <div class="column medium-6 text-center">
        <a href="http://www.wrimexico.org/" target="_blank" title="Ir a www.wrimexico.org">
          <img data-src="img/patrocinadores/wri.jpg" alt="WRI México" >
        </a>
      </div>
    </div>

    <div class="row contenido">
      <div class="column  medium-4 patrocinador-plata text-center">
        <h4 class="text-center">PATROCINADOR PLATA</h4>
      </div>
      <div class="column medium-8 patrocinador-bronce">
        <h4 class="text-center">PATROCINADOR BRONCE</h4>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4">
        <a href="#"><img src="img/patrocinadores/escofet.jpg" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="http://www.deacero.com/es/" target="_blank">
          <img src="img/patrocinadores/deacero.jpg" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/fundidora-2.png" alt=""></a>
      </div>
    </div>


    <div class="row contenido">
      <div class="column patrocinador-institucionales">
        <h4 class="text-center">SOCIOS INSTITUCIONALES</h4>
      </div>
    </div>
    <div class="row " id="">
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/yucatan.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/yucatan-travel.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/amimp.png" alt=""></a>
      </div>
    </div>
    <div class="row " id="">
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/ayuntamiento.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/canadevi.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/arquitectos-paisajistas.png" alt=""></a>
      </div>
    </div>
    <div class="row " id="">
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/urbanismopositivo.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/pressumiendomexico.png" alt=""></a>
      </div>
      <div class="column medium-4">
        <a href="#"> <img src="img/patrocinadores/gehl-institute.png" alt=""></a>
      </div>
    </div>
  </article>

</main>
<?php include'assets/footer.php'; ?>
