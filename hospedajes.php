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
    <title>Hospedaje</title>

    <?php  require("assets/head_common.php") ?>


</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_hospedaje">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h1>hospedaje</h1>
      </hgroup>
      <div class="row descripcion_header">
        <p>¡Encuentra tu hospedaje! Monterrey, N.L. cuenta con una vasta oferta de hoteles, en esta sección
          encontrarás información sobre hoteles a una distancia caminable del Centro de congresos CINTERMEX</p>
      </div>
  </header>
<main>
  <div class=" row contenedor_hoteles">
    <div class="row">
      <div class="column medium-2">
        <figure  >
          <a href="#antaris" class="MO"><img src="img/hoteles/antaris.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#hmonterrey" class="MO"><img src="img/hoteles/hotel_monterrey.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#fourpoints" class="MO"><img src="img/hoteles/four_points.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/four_points_2.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/holiday_inn.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/crowne_plaza.png" alt=""></a>
        </figure>
      </div>
    </div>
    <div class="row">
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/istay.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/travohotel.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/holiday_inn_2.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/holiday_inn_3.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href=""><img src="img/hoteles/milenium.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">

      </div>
    </div>
  </div>

  <section >
    <div class="row" id="descripcion_hotel">
      <div id="antaris" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/logo_antaris.png" alt="">
              </figure>
            </div>
            <div class="column medium-6">
              <p><span>Ubicación: </span></p>
              <p><span>Clave de reservación: </span></p>
              <p><span>Contacto: </span></p>
              <a href="#" class="btn_verde">Sitio Web</a>
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row column precios_hotel">
          <div class="column medium-6">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>luxor suite</li>
              </ul>
            </div>
          </div>
          <div class="column medium-6">
            <div class="titulo_tabla">
              <h4>Sencilla o doble</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,695</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="hmonterrey" class="oculto">
        contenido monterrey
    </div>
    <div id="fourpoints" class="oculto">
      contenido four points
    </div>

  </section>

</main>

<?php include'assets/footer.php'; ?>
