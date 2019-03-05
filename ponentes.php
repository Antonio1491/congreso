<!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conferencistas y Ponentes | Congreso Internacional de Parques Urbanos</title>
  <?php  require("assets/head_common.php");
  require("assets/clases_2.php");  ?>
</head>
<body onload="countdown('contador')">
<header class="header_paginas header_sesiones">
      <div class="hide-for-small-only">
        <?php include'assets/menu.php'; ?>
      </div>
  <div class="figure_header">
    <figure class="">
      <img src="img/i_sesiones.png" alt="">
    </figure>
  </div>
  <hgroup class="titulo_pagina">
    <h1>Ponentes</h1>
  </hgroup>
</header>
<main class="">
  <div class="row contenedorPonentes">
    <?php
      $ponentes = new Programa();
      $lista_ponentes = $ponentes->ponentes();
      foreach ($lista_ponentes as $valor) {
        $html = "
                <div class='column medium-4 small-12 contenedorPonente'>
                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                  <h5>".$valor['nombre']."</h5>
                  <span>".$valor['cargo'].", </span>
                  <span>".$valor['empresa']."</span>
                </div>
                ";
        echo $html;
      }
     ?>
  </div>
</main>

<?php include'assets/footer.php'; ?>
