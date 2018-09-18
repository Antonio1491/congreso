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
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_patrocinadores">
    <?php include'assets/menu.php'; ?>
    <div class="figure_header">
      <figure class="">
        <img src="img/i_patrocinadores.png" alt="">
      </figure>
    </div>
    <hgroup class="titulo_pagina">
      <h1>PATROCINADORES </h1>
      <h2>Y SOCIOS INSTITUCIONALES</h2>
    </hgroup>
    <p></p>
  </header>
  <main class="patrocinadores">
    <div class="row column">
      <p class="pat_descripcion">Cada vez más cerca de la segunda edición de Congreso Parques.
Un año más que se permite el fortalecimiento de la comunidad de los parques urbanos, la recreación y el espacio público. El apoyo de patrocinadores, colaboradores, promotores y organizadores es fundamental, agradecemos a todos ellos quienes confían en este increíble sector.
</p>
    </div>
    <div class="contenedor_patrocinadores">
      <div class="item_patrocinador">
        <h3 class="subtitulo">Organiza</h3>
        <figure>
          <a href="http://www.anpr.org.mx/" target="_blank">
            <img src="img/organiza.png" alt="" >
          </a>
        </figure>
      </div>
      <div class="item_patrocinador">
        <h3 class="subtitulo">Presenta</h3>
        <figure>
          <a href="https://www.parquefundidora.org/" target="_blank">
            <img src="img/presenta.png" alt="">
          </a>
        </figure>
      </div>
    </div>
    <div class="row column align-center">
      <h3 class="subtitulo">Patrocinan</h3>
    </div>
    <div class="contenedor_patrocinadores">
      <div class="item_patrocinador">
        <figure>
          <a href="https://www.coca-colamexico.com.mx/fundacion-coca-cola" target="_blank">
            <img src="img/patrocinan_fundacion_cocacola.png" alt="">
          </a>
        </figure>
      </div>
      <div class="item_patrocinador" target="_blank">
        <figure>
          <a href="http://www.arcacontal.com/">
            <img src="img/patrocinan_arcacontinental.png" alt="">
          </a>
        </figure>
      </div>
      <div class="item_patrocinador">
        <figure>
          <a href="http://www.playclub.com.mx/" target="_blank">
            <img src="img/patrocinan_playclub.png" alt="">
          </a>
        </figure>
      </div>
    </div>
    <div class="contenedor_patrocinadores">
      <div class="item_patrocinador">
        <figure>
          <a href="https://www.escofet.com/inicio" target="_blank">
            <img src="img/patrocinan_escofet.png" alt="">
          </a>
        </figure>
      </div>
      <div class="item_patrocinador">
        <figure>
          <a href="http://rejadeacero.com/" target="_blank">
            <img src="img/patrocinan_rejadeacero.png" alt="">
          </a>
        </figure>
      </div>
    </div>
    <div class="row column align-center">
      <h3 class="subtitulo">Socios Institucionales</h3>
    </div>
    <div class="contenedor_patrocinadores">
      <div class="item_patrocinador">
        <figure>
          <a href="https://nuevoleon.travel/" target="_blank">
            <img src="img/socios_nuevoleon.png" alt="">
          </a>
        </figure>
      </div>
      <div class="item_patrocinador">
        <figure>
          <img src="img/socios_monterrey.png" alt="">
        </figure>
      </div>
    </div>

  </main>
<?php include'assets/footer.php'; ?>
