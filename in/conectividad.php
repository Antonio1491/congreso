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
    <title>Connectivity</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_conectividad">
    <?php include'assets/menu.php'; ?>
    <div class="figure_header">
      <figure class="">
        <img src="../img/conectividad.png" alt="">
      </figure>
    </div>
      <hgroup class="titulo_pagina">
        <h1>Connectivity</h1>
      </hgroup>
    </div>
  </header>
<main class="conectividad">
  <div class="row align-center">
    <h2 class="subtitulo mayus">Air connectivity</h2>
  </div>
  <br>
  <div class="row align-center">
    <h4 class="titulo_tabla_conectividad subtitulo_mb">DIRECT NATIONAL DESTINATIONS</h4>
  </div>
  <div class="cinta_azul">
    <div class="row">
      <figure>
        <img src="../img/vuelos_nacional.png" alt="">
      </figure>
    </div>
  </div><br><br>
  <div class="row align-center fila-espacio">
    <h4 class="titulo_tabla_conectividad subtitulo_mb">DIRECT INTERNATIONAL DESTINATIONS</h4>
  </div>
  <div class="cinta_azul">
    <div class="row">
      <figure>
        <img src="../img/vuelos_internacional.png" alt="" >
      </figure>
    </div>
  </div><br>
  <div class="row align-center">
    <figure>
      <img src="../img/mapa-conectividad.png" alt="" class="mapa_conectividad">
    </figure>
  </div><br>
  <div class="row align-center">
    <h2 class="subtitulo mayus">Earth connectivity</h2>
  </div>
  <div class="cinta_azul">
    <div class="row align-center">
      <h4 class="subtitulo_bc">Monterrey easily connects with the rest of the country.</h4>
      <p class="descripcion_cover">
        It is located 957km north of Mexico City on highways number 57, 45, and 40 and 225km from Reynosa on highway number 40.</p>
    </div>
  </div><br>
  <div class="row align-center">
    <figure>
      <img src="../img/conectividad_terrestre.png" alt="" class="conectividad_terrestre">
    </figure>
  </div>
  <br>
  <?php include('assets/menu_sede.php') ?>
  </div>
</main>

<?php include'assets/footer.php'; ?>
