
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
  <header class="header_paginas header_comite">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina">
        <h2></h2><br>
        <h1>ORGANIZING COMMITTEE</h1>
      </hgroup>
    </div>
  </header>
<main>
  <article class="">

    <div class="row contenido" >
      <p>The International Congress of Urban Parks, is an event organized by the
        National Recreation and Park Association of Mexico, an organization dedicated
        to professionals training and professionalizing urban parks, recreation and public
        spaces through its 5 core areas. The ANPR Mexico has different goals, among them are:
        <div class="column medium-8">
          <ol>
            <li>Promote the organization of the industry, encouraging interaction,
              training and development of the different actors committed to the public space in Mexico.</li>
            <li>Generate and communicate reliable information about the national and international industry.</li>
            <li>Create a forum for participation and networking for parks and recreation professionals.</li>
            <li>Contribute to the involvement of the Mexican government and influence the development and
              establishment of new public policies.</li>
            <li>Favor the regeneration of the social fabric through the intervention of public spaces.</li>
          </ol>
        </div>
        <div class="column medium-4 text-center">
          <a href="https://anpr.org.mx/" target="_blank"><img src="../img/logotipo/anpr_azul.png" alt="" class="img_organizador"></a>
        </div>

        </p>
        <p>During the second edition of Congreso Parques, more than 3,500 professionals will be welcomed to
          Monterrey, Nuevo León, Mexico. With energetic activities, keynotes, educational sessions, workshops,
          networking events, inspiring projects and a look into the products and services of the industry.</p>
    </div>
    <br>

    <?php include('assets/menu_sede.php') ?>
  </article>
</main>

<?php include'assets/footer.php'; ?>
