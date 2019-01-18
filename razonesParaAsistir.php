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
    <meta name="description" content="El 1er. Congreso de Parques Urbanos es un evento que tiene como objetivo reunir y capacitar a profesionales del espacio público, los parques y la recreación.">
    <title>Razones para asistir al congreso parques</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_sesiones">
      <?php include'assets/menu.php'; ?><br><br>
      <div class="row">
        <div class="column medium-2">
          <img src="img/caricatura_mujer.png" alt="">
        </div>
        <div class="column medium-8">
          <hgroup class="titulo_razones">
            <h2>¿Como convencer a mi jefe </h2>
            <h1 class="color_rosado">para Asistir al congreso?</h1>
          </hgroup>
        </div>
        <div class="column medium-2">
          <img src="img/caricatura_hombre.png" alt="">
        </div>
      </div>

  </header>
<main class="back-1"><br>
  <article class="" id="beneficios">
    <div class="row">
      <div class="column medium-8">
        <img src="img/programa.png" alt="">
        <ul class="ul_verde">
          <li><span>Antes de poder discutir con tu jefe tu posible participación
            al Congreso, es importante que <b>conozcas a fondo la estructura</b> del mismo,
            fechas, horarios, logística, tipos de conferencias, conferencistas y
            precios.</span></li>
          <li><span>A través de conocer toda esta información <b>establece metas</b> a corto
            y largo plazo que te <b>ayuden a cumplir mejor tu trabajo.</b> Estas metas
            deben de ser apoyadas por la idea de asistir al evento.</span></li>
        </ul>
        <div class="text-center">
          <a href="programa.php" class="btn_verde_transparente">Ver el Programa</a>
        </div>

      </div>
      <div class="column medium-4">
        <img src="img/conoce.png" alt="" class="img_asistir">
      </div>
      <!-- <div class="column-4">
        <a href="assets/PROGRAMA-PRELIMINAR.pdf" target="_blank">
          <img src="img/btn-descarga-programa.png" alt="">
        </a>
      </div> -->
    </div>

    <div class="cinta_azul">
    <div class="row">
      <div class="column medium-8">
        <img src="img/agenda.png" alt="">
        <ul class="ul_verde">
          <li><span class="text_bc"><b>Alinea tus objetivos laborales y los de tu organización</b>
             con los objetivos de las conferencias y talleres a los que te gustaría asistir. La
             mejor forma de justificar tu asistencia al Congreso es que lo que vas a aprender te ayude
             a poder hacer mejor tu trabajo.</span></li>
          <li><span class="text_bc"><b>Establece una agenda de contactos</b> y planea un posible acercamiento con algún conferencista
            con el cual le llegue interesar a tu organización hacer relación.</span></li>
        </ul>

      </div>
      <div class="column medium-4">
        <img src="img/planea-sesiones.png" alt="" class="img_asistir">
      </div>
    </div>

    </div>

    <div class="row">
      <div class="column medium-8">
        <img src="img/razones.png" alt="">
        <ul class="ul_verde">
          <li><span><b>Conocer más</b> sobre los <b>parques y espacios públicos</b> a través de los mejores
conferencistas y talleristas del mundo.</span></li>
          <li><span><b>Ampliar tus contactos</b> y generar grandes relaciones públicas.</span></li>
          <li><span><b>Conocer a los proveedores de la industria</b> más importantes de México
            y el mundo, así como las tendencias del mercado, nuevos productos, precios, calidades y oportunidades.</span></li>
          <li><span><b>Aprender de historias de éxito</b> sobre los parques y espacios públicos
            que están sucediendo en México y Latinoamérica.</span></li>
          <li><span>Llevar a tu organización <b>nuevas ideas</b> para el desarrollo de proyectos.</span></li>
          <li><span>Obtener una <b>constancia</b> otorgada por la <b>ANPR México.</b></span></li>
          <li><span>Poder <b>descargar todo el material</b> de todas las conferencias al finalizar el Congreso.</span></li>
          <li><span><b>Visitar los parques y espacios públicos</b> más emblemáticos de la ciudad sede.</span></li>
          <li><span><b>Ser parte de la comunidad</b> mexicana dedicada al cuidado, mantenimiento, administración
              y gestión de los parques urbanos.</span></li>

        </ul>
      </div>
      <div class="column medium-4"><br>
        <img src="img/razones-2.png" alt="" class="img_asistir">
      </div>
    </div>

<div class="cinta_azul">
  <div class="row">
    <div class="column medium-7">
      <img src="img/titulo-carta.png" alt="">
      <ul class="ul_verde">
        <li><span class="text_bc">Descarga una carta molde en:</span></li>
      </ul>
      <div class="text-center">
        <a href="assets/carta_molde.docx" class="btn_verde_transparente">Descargar Carta</a>
      </div>
    </div>
    <div class="column medium-5">
      <!-- <a href="assets/Carta.docx"><img src="img/btn-carta.png" alt=""></a> -->
        <img src="img/carta.png" alt="" class="img_asistir">
    </div>
  </div>
</div>



  </article>

</main>



<?php include'assets/footer.php'; ?>
