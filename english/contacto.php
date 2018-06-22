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
    <title>Contacto | Congreso Internacional de Parques Urbanos</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="">
  <article class="">
    <div class=" header header-8">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">Contact us!</h3>
        </div>
      </div>
    </div>
    <div class="row column video">
      <video src="video/sede.mp4" autoplay  width="640" height="360" controls preload>
      </video>
    </div>
      <section id="contacto">
        <div class="row expanded ">
          <div class="column small-12 large-3 large-offset-3 medium-6  text-center">
            <div id="contenido-contacto">
              <h6>Centro Internacional de Congresos de Yucatán</h6>
              <h4>Yucatán</h4>
              <div class="info-contacto">
                <i class="fi-telephone"></i> 99944060<br>
                <i class="fi-mail"></i> info.congreso@anpr.org.mx
              </div>
              <span class="">
               If you have question or comment
              </span>
              <div>
                <form id="form-contacto" action="https://formspree.io/info.congreso@anpr.org.mx" method="POST">
                  <input type="text" name="nombre" value="" placeholder="NAME">
                  <input type="email" name="email" value="" placeholder="E-MAIL">
                  <textarea name="mensaje" rows="2" cols="80" placeholder="MESSAGE"></textarea>
                  <input type="submit" name="" value="SUBMIT" class="button small">
                </form>
              </div>
            </div>
          </div>
          <div class="column small-12 medium-6 large-6 " id="mapa">
            <div class="map" data-interchange="[assets/mapa-small.html, small], [assets/mapa.html, medium]">
            </div>
          </div>
      </section>
      <!--  Fin sección contacto-->
      <!--sección de redes sociales-->
      <section id="redes-sociales">
        <div class="row column align-center ">
          <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank"><img src="img/facebook.png" alt=""></a>
          <a href="https://twitter.com/congreso_parque" target="_blank"><img src="img/twitter.png" alt=""></a>
          <a href="https://www.instagram.com/congreso_parques/" target="_blank"><img src="img/instagram.png" alt=""></a>
          <img src="img/youtobe.png" alt="">
        </div>
      </section><!--fin redes sociales-->
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
