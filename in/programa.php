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
    <title>Programa Completo</title>
    <?php  require("assets/head_common.php") ?>
  </head>
<body onload="countdown('contador')">
  <header class="header_paginas header_programa">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h2>Preliminary  Program</h2>
        <h1>Congreso parques</h1>
      </hgroup>
  </header>
  <main ><br>
    <!-- <div class="row align-center">
        <h5 class="subtitulo">Próximamente el programa completo.</h5>
    </div> -->
    <div class="row column align-center">
      <a href="assets/ProgramaPreliminar2019.pdf"><img src="img/DOWLOAD.png"></a>
    </div>
    <div class="row ">
      <div class="column medium-6 ">
        <section class="dia">
          <div class="dia_titulo">
            <a href=""> Day 1</a>
            <h4>Tuesday</h4>
            <h5>May 14</h5>
          </div>
          <div class="horario">
            <figure>
              <img src="img/day1.png" alt="">
            </figure>
          </div>
        </section>
      </div>
      <div class="column medium-6">
        <section class="dia">
          <div class="dia_titulo">
            <a href=""> Day 2</a>
            <h4>Wednesday</h4>
            <h5>May 15</h5>
          </div>
          <div class="horario">
            <figure>
              <img src="img/day2.png" alt="">
            </figure>
          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="column medium-6">
        <section class="dia">
          <div class="dia_titulo">
            <a href=""> Day 3</a>
            <h4>Thursday</h4>
            <h5>May 16</h5>
          </div>
          <div class="horario">
            <figure>
              <img src="img/day3.png" alt="">
            </figure>
          </div>
        </section>
      </div>
      <div class="column medium-6">
        <section class="dia">
          <div class="dia_titulo">
            <a href="">Day 4</a>
            <h4>Friday</h4>
            <h5>May 17</h5>
          </div>
          <div class="horario">
            <figure>
              <img src="img/day4.png" alt="">
            </figure>
          </div>
        </section>
      </div>
    </div>

  </main>




<?php include'assets/footer.php'; ?>
