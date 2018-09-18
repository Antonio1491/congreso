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
  <header class="header_paginas header_sociales">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina">
        <h1>Eventos Sociales</h1>
      </hgroup>
    </div>
  </header>
<main>
  <article class="">

    <div class="row contenido">
      <div class="column small-12 medium-6">
        <div class="">
          <p><h5>Inauguración:</h5>
            Mérida te da bienvenida con una gran fiesta regional.
            ¡Vive esta experiencia llena de tradiciones! Prueba
            comida yucateca - patrimonio cultural de la humanidad,
            y baila al ritmo de la jarana con la interpretación de
            la Orquesta Jaranera y el Ballet Folclórico de Mérida. </p>
            <p>Inauguración:
            7:30 p.m. – 11:30 p.m.
            Lugar: Remate de Montejo. Calle 47, entre 58 y 56, Colonia Centro.
            Ubicación: <a href="https://goo.gl/maps/nhMKs6VG5M42">google maps</a>
            </p>
            <p>Transporte del Centro Internacional de Congresos de Yucatán de 7: 00 p.m. a 8:00 p.m.</p>
        </div>
        <img src="img/fiesta-inauguracion.png" alt="">

        </div>

      <div class="column small-12 medium-6">
        <div class="">
          <p><h5>Clausura:</h5>
            Celebremos lo aprendido y las nuevas amistades en nuestra fiesta de clausura. Una última
            oportunidad para convivir, celebrar y despedirse de todos los que hicieron nuestra experiencia
            en el congreso, única e inolvidable.
            Acompáñanos en una noche de food trucks, música y mucho ambiente en "El Minaret", una de las
            casonas del post porfiriato estilo francés de hermosas balaustradas y candiles ubicada en el emblemático Paseo Montejo.
          </p>
          <p>Clausura:
            8:00 p.m. – 12:00 a.m.
            Lugar: "El Minaret" Paseo Montejo 473 entre 35 y 37 Col. Centro.
            Ubicación: <a href="https://goo.gl/maps/ZRBREHvc8tA2">google maps</a>
          </p>
        </div>
        <div class="">
          <img src="img/fiesta-clausura.png" alt="">
        </div>

      </div>

    </div>
    <br>
    <div class="row menu_sede">
      <div class="column medium-3">
        <a href="http://www.merida.gob.mx/capitalcultural/" target="_blank"><img src="img/turismo.png" alt=""></a>
      </div>
      <div class="column medium-3">
          <a href="http://www.yucatan.travel/" target="_blank"><img src="img/parques.png" alt="">
      </div>
      <div class="column medium-3">
          <a href="conectividad.php" target=""><img src="img/conectividad.png" alt="">
      </div>
      <div class="column medium-3">
          <a href="hospedajes.php" target=""><img src="img/hospedaje.png" alt="">
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
