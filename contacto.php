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
    <title>Contacto y Sede</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="">
  <article class="">
    <div class=" header header-8">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">CONTACTO Y SEDE</h1>
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
                <i class="fi-telephone"></i> (999) 944 40 60<br>
                <i class="fi-mail"></i> info@congresoparques.com
              </div>
              <span class="">
                Si tienes dudas o comentarios<br> ¡Contáctanos!
              </span>
              <div>
                <form id="form-contacto" action="https://formspree.io/info@congresoparques.com" method="POST">
                  <input type="text" name="nombre" value="" placeholder="NOMBRE">
                  <input type="email" name="email" value="" placeholder="CORREO">
                  <textarea name="mensaje" rows="2" cols="80" placeholder="MENSAJE"></textarea>
                  <input type="submit" name="" value="ENVIAR" class="button small">
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
          <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank"><img src="img/youtobe.png" alt=""></a>
        </div>
      </section><!--fin redes sociales-->
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
