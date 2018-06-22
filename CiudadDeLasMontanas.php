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
    <title>La Ciudad de las Montañas</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="">
    <div class=" header header-4">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">LA CIUDAD de las montañas</h1>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-4">
        <p>También conocida como “La Ciudad de las Montañas”, Monterrey es una fortaleza que
          está enmarcada por el Cerro de la Silla, la Loma Larga, el Topo Chico, el Cerro de
          las Mitras y la Sierra Madre Oriental.</p>
          <p>Monterrey se encuentra localizada en un valle, con una altura sobre el nivel del
            mar de aproximadamente 500 m., y las montañas que la rodean la dotan de una
            singular belleza. Cuenta con un clima seco estepario con precipitaciones en verano.</p>

      </div>
      <div class="column medium-8">
        <!-- <p><span class="letra-capital">L</span>a Ciudad de Mérida, Yucatán fue fundada el 6 de Enero de 1542 por el español Francisco de Montejo y León "El Mozo", donde se encontraba la antigua Ciudad Maya T'Hó.</p> -->
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/cqom897wZko" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="expanded fondo-gris">
      <div class="row column">
        <h4 class="titulo-morado">¿SABÍAS QUE?</h4>
        <p>Monterrey tiene un gran pasado histórico pues sus habitantes pelearon en las
          guerras de intervención americana y francesa. Además por su gran número de
          universidades están por llamarla “la Ciudad del Conocimiento”.</p>
      </div>
    </div>
    <div class="row column">
      <p>Es una ciudad vibrante, infatigable y de muchas facetas. Un lugar donde conviven
        la sofisticación y el folklore. Su amplia oferta de museos, parques, restaurantes,
        bares, centros comerciales, tiendas exclusivas; su afición al futbol y al béisbol;
        su excitante vida artística y su diversión nocturna la hacen un destino fascinante.
        Monterrey es además un poderoso centro industrial, comercial y cultural para el país,
        lo que le ha ganado el nombre de “La Sultana del Norte”</p>
    </div>
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
