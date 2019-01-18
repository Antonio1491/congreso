<?php
session_start();
    $_SESSION['dia'] = '14';
    $_SESSION['mes'] = '5'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2019';
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
    <title>THE CITY OF THE MOUNTAINS</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_sede">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h2>THE CITY OF THE MOUNTAINS</h2>
        <h1>Monterrey,</h1>
        <h1>Nuevo León</h1>
      </hgroup>

  </header>
<main class="sede">
  <div class="row">
    <p class="descripcion_principal">The Congreso Parques is waiting for you in one of the most
      important convention and exhibition centers in Mexico: CINTERMEX. This important business
      center located within Parque Fundidora, the largest and most important urban metropolitan
      park in Monterrey. The Parque Fundidora is a spectacular public space in which culture,
      sports, entertainment and business converge. With its more than 120 acres it connects
      through Paseo Santa Lucía with the Macro Plaza. </p>
  </div>
  <div class="row align-center">
    <h3 class="subtitulo">Monterrey: Success Scenario</h3>
  </div>
  <section id="video_sede" class="row expanded align-center" >
    <iframe width="960" height="455" src="https://www.youtube-nocookie.com/embed/uzITkJXazsI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </section>

  <div class="row contenido_sede">
    <div class="column medium-8">
      <p>Monterrey, capital of the state of Nuevo León, is a city with 420 years of history.
        It is a business and industrial center with a great economic impact in Mexico. It
        possesses great landscapes such as Cerro de la Silla, green areas and historical
        monuments worth visiting; among them is the Cerro de las Mitras, the Cola de Caballo,
        the Caves de García and the Sierra Madre.</p>
        <p>Monterrey is also home to one of the largest student communities in Mexico, which
          is why it is the birthplace of entrepreneurs who have helped transform the economy
          of Nuevo Leon and Mexico.</p>
      <p>Get to know the incredible public spaces of Monterrey and don’t stop surprising
        yourself with its gastronomy, traditions and attractions. The city of the mountains
        is waiting for you!</p>
    </div>
    <div class="column medium-4 sabias">
      <h4>Did you know?</h4>
      <ul>
        <li>Monterrey has the second most important economy in Latin America.</li>
        <li>It is the number 9 in the world ranking of international tourism (OMT).</li>
        <li>It has more than 3,500 established foreign companies.</li>
        <li>It has 52 museums.</li>
      </ul>
    </div>
  </div>
  <div class="cinta_azul">
    <div class="row cintermex_sede">
      <div class="column medium-4 cintermex_icono">
        <div class="">
          <figure>
            <a href="http://www.cintermex.com.mx/newweb/"><img src="../img/patrocinadores/sede_cintermex.png" alt=""></a>
          </figure>
        </div>
        <div class="">
          <a href="https://www.google.com/maps/place/Cintermex/@25.6778062,-100.2913019,17z/data=!4m8!1m2!2m1!1scintermex!3m4!1s0x8662942a8d42b18f:0x1eee54a9dfbc9332!8m2!3d25.6781236!4d-100.2879763"
          target="_blank" class="btn_vermas">VIEW MAP</a>
        </div>

      </div>
      <div class="column medium-8">
        <h3 class="subtitulo_bc">Monterrey Tourism </h3>
        <h5 class="subtitulo_bc">Paseo Santa Lucia</h5>
        <p>Tour in boats through a canal considered a Wonder of Mexico.</p>
        <h5 class="subtitulo_bc">Parque Fundidora:</h5>
        <p>Beautiful green areas with ultural and recreational center.</p>
        <h5 class="subtitulo_bc">Ecotourism and adventure:</h5>
        <p>Incredible natural places to live emotions to the fullest.</p>
        <h5 class="subtitulo_bc">Amusement parks:</h5>
        <p>Sesame Street Park, Bioparque Estrella and Bosque Mágico among the most visited.</p>
        <h5 class="subtitulo_bc">Gastronomy</h5>
        <p>More than 1,700 quality restaurants with renowned chefs specialized in regional,
          national and international cuisine.</p>
      </div>
    </div>
  </div>

<?php include('assets/menu_sede.php') ?>
</main>

<?php include'assets/footer.php'; ?>
