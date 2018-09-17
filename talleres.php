<?php include('assets/contador.php') ?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_talleres">
    <?php include'assets/menu.php'; ?>
    <div class="figure_header">
      <figure class="">
        <img src="img/i_talleres_m.png" alt="">
      </figure>
    </div>
    <hgroup class="titulo_pagina">
      <h1>Talleres </h1>
      <h2> Vivenciales y curriculares</h2>
    </hgroup>
    <p></p>
  </header>
<main class="">
  <section class="contenido">
    <div class="row column">
      <p>Los talleres son una gran oportunidad para extender nuestro conocimiento
        sobre el espacio público. En el Congreso Parques 2019 habrá dos tipos de
        talleres: vivenciales y curriculares.
        El lunch, transporte, materiales y papelería está incluido.</p>
    </div>
    <div class="row text-center">
      <h4 class="subtitulo">Los más de 15 talleres se realizarán
      los días 14 y 15 de mayo, en días previos a las sesiones educativas.</h4>
    </div>
    <section class="section_talleres_vivenciales">
      <div class="cinta_azul ">
        <div class="row align-center">
          <h2 class="subtitulo_bc">Talleres Vivenciales</h2>
        </div>
        <div class="row align-center">
          <p class="subtitulo_bc">¡Visita los parques más emblemáticos de la ciudad sede! </p>
        </div>
      </div>

      <div class="row">
        <div class="column medium-6">
          <figure>
            <img src="img/talleres_vivenciales.png" alt="talleres vivenciales">
          </figure>
        </div>
        <div class="column medium-6">
            <p>Aprende y visita al mismo tiempo con los talleres vivenciales. En ellos
              conocerás atractivos turísticos y proyectos ciudadanos relacionados con el
              espacio público; habrá expertos en el tema y colaboradores de la ciudad
              anfitriona que compartirán durante 4 horas sus experiencias en la
              administración de estos espacios, las dificultades a las que se han
              enfrentado y las actividades que han implementado. </p>
              <div class="cupo_taller">
                <p>Cupo máximo: <span>60 personas por taller</span> </p>
              </div>
        </div>
      </div>
    </section>
    <section class="section_talleres_curriculares">
      <div class="cinta_azul ">
        <div class="row align-center">
          <h2 class="subtitulo_bc">Talleres Curriculares</h2>
        </div>
        <div class="row align-center">
          <p class="subtitulo_bc">Escucha, aprende, actúa y mejora ¡Las herramientas que todo recreador necesita!</p>
        </div>
      </div>
      <div class="row">
        <div class="column medium-6">
          <figure>
            <img src="img/talleres_curriculares.png" alt="talleres vivenciales">
          </figure>
        </div>
        <div class="column medium-6">
            <p>Si lo que deseas es obtener conocimiento técnico y sobre un tema
              especializado, estos talleres son para ti. Durante 4 horas contarás
              con un espacio de formación que potencializará tus conocimientos
              trabajando de la mano con un profesional en el área que brindará
              información para enfrentar retos en proyectos de espacio público.
              Al finalizar el taller, se otorgará un diploma con valor curricular. </p>
              <div class="cupo_taller">
                <p>Cupo máximo: <span>60 personas por taller</span> </p>
              </div>
        </div>
      </div>
    </section>


  </section>


</main>

<?php include'assets/footer.php'; ?>
