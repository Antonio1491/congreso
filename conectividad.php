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
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_conectividad">
    <?php include'assets/menu.php'; ?>
    <div class="figure_header">
      <figure class="">
        <img src="img/conectividad.png" alt="">
      </figure>
    </div>
      <hgroup class="titulo_pagina">
        <h1>Conectividad</h1>
      </hgroup>
    </div>
  </header>
<main class="conectividad">
  <div class="row align-center">
    <h2 class="subtitulo mayus">conectividad aérea</h2>
  </div>
  <br>
  <div class="row align-center">
    <h4 class="titulo_tabla_conectividad subtitulo_mb">DESTINOS NACIONALES DIRECTOS</h4>
  </div>
  <div class="cinta_azul">
    <div class="row">
      <figure>
        <img src="img/vuelos_nacional.png" alt="">
      </figure>
    </div>
  </div><br><br>
  <div class="row align-center fila-espacio">
    <h4 class="titulo_tabla_conectividad subtitulo_mb">DESTINOS INTERNACIONALES DIRECTOS</h4>
  </div>
  <div class="cinta_azul">
    <div class="row">
      <figure>
        <img src="img/vuelos_internacional.png" alt="" >
      </figure>
    </div>
  </div><br>
  <div class="row align-center">
    <figure>
      <img src="img/mapa-conectividad.png" alt="" class="mapa_conectividad">
    </figure>
  </div><br>
  <div class="row align-center">
    <h2 class="subtitulo mayus">conectividad Terrestre</h2>
  </div>
  <div class="cinta_azul">
    <div class="row align-center">
      <h4 class="subtitulo_bc">Monterrey conecta fácilmente con el resto del país.</h4>
      <p class="descripcion_cover">Se localiza a 957km al norte de la ciudad de México por las carreteras número 57, 45, y 40 y a 225km de Reynosa por la carretera número 40.</p>
    </div>
  </div><br>
  <div class="row align-center">
    <figure>
      <img src="img/conectividad_terrestre.png" alt="" class="conectividad_terrestre">
    </figure>
  </div>
  <br>
  <?php include('assets/menu_sede.php') ?>
  </div>
</main>

<?php include'assets/footer.php'; ?>
