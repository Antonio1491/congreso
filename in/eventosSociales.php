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
    <div class="hide-for-small-only">
      <?php include'assets/menu.php'; ?>
    </div>
    <div class="figure_header">
      <figure class="">
        <img src="../img/i_eventos_sociales.png" alt="">
      </figure>
    </div>
      <hgroup class="titulo_pagina">
        <h1>Social Events </h1>
      </hgroup>
    </header>
<main>

    <div class="row column align-center" >
        <p class="subtitulo descripcion_principal">The time has come to exchange business cards and have fun!</p>
    </div>
    <div class="row column ">
      <p class="descripcion_principal "> Expand your professional network and enjoy during our 3 social events
        made especially for you. Attend the opening, beer party and closing of Congreso Parques, meet in a
        relaxed atmosphere, have fun and do networking. Remember that your entrance to the congress, includes
        your access to these 3 events.    </p>
    </div>
    <br>
    <!-- <div class="row align-center">
      <h5 class="subtitulo">¡Próximamente la información completa!</h5>
    </div> -->

    <?php include('assets/menu_sede.php') ?>

</main>

<?php include'assets/footer.php'; ?>
