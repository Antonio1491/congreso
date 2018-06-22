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
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-5">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">HOSPEDAJE</h1>
        </div>
      </div>
    </div>
    <div class="row column contenido">
      <p>¡Encuentra tu hospedaje! Mérida cuenta con una vasta oferta de hoteles, en esta sección encontrarás información sobre hoteles a una distancia caminable del Centro Internacional de Congresos de Yucatán.</p>
    </div>
    <div class="row ">
      <div class="column small-12 medium-8 hoteles">
          <a href="https://merida.regency.hyatt.com/es/hotel/home.html" target="_blank"><h5>Hyatt Regency Mérida</h5></a>
          <!-- <span>Costo promedio por noche:</span> $2,250 MXN<br> -->
          <span>Distancia:</span> 300mts, 4 minutos.<br>
          <span>Menciona al reservar:</span> "Grupo de Parques Urbanos" y obten los siguientes precios preferenciales.<br>Realiza tu reservación en:
          <a href="https://aws.passkey.com/go/parquesurbanos">https://aws.passkey.com/go/parquesurbanos</a>
      </div>
      <div class="column small-12 medium-4">
        <img src="img/hyatt.png" alt="">
      </div>
    </div>
      <div class="row fila-espacio">
        <div class="column small medium-6 ">
          <img src="img/hyatt-plan-europeo.png" alt="">
        </div>
        <div class="column small medium-6">
          <img src="img/hyatt-plan-ejecutivo.png" alt="">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="column small-12 medium-8 hoteles">
          <a href="http://www.misolhahotel.com/" target=""><h5>MISOL-HA</h5></a>
          <span>Distancia:</span> 800mts, 10 minutos.</span><br>
          <span>Menciona al reservar:</span> "Congreso Parques"
        </div>
        <div class="column small-12 medium-4">
          <img src="img/misolha.png" alt="">
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column small medium-6">
          <img src="img/tarifa-misol-ha.png" alt="">
        </div>
      </div>
      <hr>
      <div class="row fila-espacio">
        <div class="column small-12 medium-8 hoteles">
          <a href="http://www.hotelvictoriamerida.com/" target="_blank"><h5>Hotel Victoria</h5></a>
          <!-- <span>Costo promedio por noche:</span> $1500 MXN -->
          <span>Distancia:</span> 800mts, 10 minutos.<br>
          <span>Clave para reservar:  CP250418</span>
        </div>
        <div class="column small-12 medium-4">
          <img src="img/hotel-victoria.png" alt="">
        </div>
      </div>
      <div class="row fila-espacio">
        <img src="img/tarifa-hotel-victoria.png" alt="">
      </div>
    <hr>
    <div class="row fila-espacio">
      <div class="column small-12 medium-8 hoteles">
        <a href="http://realsanjuancenter.com/" target="_blank"><h5>Hotel Boutique Real San Juan</h5></a>
        <!-- <span>Costo promedio por noche:</span> $1500 MXN -->
        <span>Distancia:</span> 250mts, 3 minutos.<br>
        <span>Menciona al reservar que son integrantes del “congreso internacional de parques urbanos”.</span>
      </div>
      <div class="column small-12 medium-4">
        <img src="img/hotel-boutique.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <img src="img/hospedaje-sanjuan.png" alt="">
    </div>
  <hr>

  <div class="row fila-espacio">
    <div class="column small-12 medium-8 hoteles">
      <a href="http://www.elespanoldemontejo.com.mx" target="_blank"><h5>Hotel "El Español" Paseo de Montejo</h5></a>
      <!-- <span>Costo promedio por noche:</span> $1500 MXN -->
      <span>Distancia:</span> 1200mts, 15 minutos.<br>
      <span>Los precios son válidos del 24 al 28 de abril del 2018. Mencionar Código "CONIPAR".</span>
    </div>
    <div class="column small-12 medium-4">
      <img src="img/logo_el_espanol.png" alt="">
    </div>
  </div>
  <div class="row fila-espacio">
    <img src="img/el_espanol.png" alt="">
  </div>
<hr>

    <div class="row fila-espacio align-center">
      <div class="column small-12 medium-10">
        <figure class="carga">
          <img data-src="img/mapa-hoteles.jpg" alt="Ruta de hoteles cercanos al congreso de parques urbanos" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
     <!--  <div class="column small-12 medium-6">
        <figure class="carga">
          <img data-src="img/hoteles-1.png" alt="Ruta de hoteles cercanos al congreso de parques urbanos" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column small-12 medium-6">
        <figure class="carga">
          <img data-src="img/hoteles-2.png" alt="Ruta de hoteles al congreso de parques urbanos"src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div> -->
    </div>
    <hr>
    <div class="row">
      <div class="column medium-3">
        <a href="http://www.merida.gob.mx/capitalcultural/" target="_blank"><img src="img/turismo.png" alt=""></a>
      </div>
      <div class="column medium-3">
          <a href="http://www.yucatan.travel/" target="_blank"><img src="img/turismo-yuc.png" alt="">
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
