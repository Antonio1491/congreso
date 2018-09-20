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
    <title>Eventos Sociales</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">

  <header class="header_paginas header_acerca_de">
    <?php include'assets/menu.php'; ?>
    <div class="figure_header">
      <figure class="">
        <img src="img/i_eventos_sociales.png" alt="">
      </figure>
    </div>
      <hgroup class="titulo_pagina">
        <h1>EVENTOS SOCIALES</h1>
      </hgroup>
    </header>
<main>
  <article class="">

    <div class="row descripcion_cover" >
      ¡Ha llegado el momento de intercambiar tarjetas y divertirse! Expande tu red profesional y disfruta durante los 3 eventos realizados especialmente para ti. Asiste a la inauguración, beer party y clausura del Congreso Parques, reúnete en un ambiente relajado, diviértete y haz networking.
      Recuerda que tu entrada al congreso, incluye tu acceso a estos 3 eventos.

    </div>
    <br>
    <div class="row align-center">
      <h5 class="subtitulo">¡Próximamente la información completa!</h5>
    </div>

    <?php include('assets/menu_sede.php') ?>

  </article>
</main>

<?php include'assets/footer.php'; ?>
