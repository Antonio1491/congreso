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
    <title>The First Congress of Urban Parks</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador'), countdown('contador-small')">
<?php include'assets/menu.php'; ?>

      <!--=====  portada/video  ====-->
      <div class="btn-play">
        <a href="#" data-open="exampleModal1" title="Ver Video"><img src="img/btn-play.png" alt="" onclick="ejecutar()"></a>
      </div>
      <div id="video" class="hide-for-small-only">
        <video  autoplay loop preload poster="posterimage.jpg" >
          <source src="video/congreso2.mp4" type="video/mp4">
          <source src="videos/loop-2.webm" type="video/webm">
        </video>
      </div>
      <!--   modal   -->
        <div class="small reveal" id="exampleModal1" data-reveal>
          <iframe width="100%" height="350" src="https://www.youtube.com/embed/bDO1URe09UM" frameborder="0" gesture="media" ></iframe>
          <!-- <video src="https://www.youtube.com/watch?v=rCamzymTys0" controls width="100%" height="100%">
          </video> -->
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <!---->


      <div class="cinta-marquee hide-for-small-only">
    <section class="marquee slider2 slider-patrocinadores">
      <div>
        <figure>
          <a href="http://www.playclub.com.mx/" target="_blank" title="Ir a www.playclub.com.mx">
            <img src="img/patrocinadores/playclub.png" alt="Play Club">
          </a>
        </figure>
      </div>
      <div>
        <figure>
          <a href="http://www.escofet.com/" target="_blank" title="Ir a www.escofet.com">
            <img src="img/patrocinadores/escofet.png" alt="Escofet">
          </a>
        </figure>
      </div>
      <div>
        <figure>
          <a href="https://www.parquefundidora.org/" target="_blank" title="Ir a www.parquefundidora.org">
            <img src="img/patrocinadores/fundidora.png" alt="Parque Fundidora">
          </a>
        </figure>
      </div>
      <div>
        <figure>
          <a href="http://rejadeacero.com/" target="_blank" title="Ir a www.rejadeacero.com">
            <img src="img/patrocinadores/deacero.png" alt="Reja Deacero">
          </a>
        </figure>
      </div>
      <div>
        <figure>
          <a href="https://www.coca-colamexico.com.mx/fundacion-coca-cola" target="_blank" title="Ir a www.coca-colamexico.com.mx">
            <img src="../img/patrocinadores/fundacion-coca-cola.png" alt="Fundación Coca-Cola">
          </a>
        </figure>
      </div>
    </section>
  </div>

      <!--======  diseño pra móviles   ======-->
      <div class="show-for-small-only">
        <div class="row align-center logo-contenedor-small">
          <a href="index.php">
            <img src="img/congreso-parques-urbanos-logo.png" alt="" class="logo-small">
          </a>
        </div>
        <div class="row align-center idiomas">
          <a href="index.php"><img src="img/mex.png" alt="Español"></a>
        </div>
        <div class="row align-center contenido-contador">
          <div class="contador">
            <h5>APRIL 25-27 DEL 2018</h5>
            <h5>MÉRIDA YUCATÁN</h5>
            <div id='contador-small'></div>
          </div>
        </div>
      </div>
      <section id="redes-small" class="show-for-small-only">
        <div class="row column align-center ">
          <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank"><img src="img/facebook.png" alt=""></a>
          <a href="https://twitter.com/congreso_parque" target="_blank"><img src="img/twitter.png" alt=""></a>
          <a href="https://www.instagram.com/congreso_parques/" target="_blank"><img src="img/instagram.png" alt=""></a>
          <a href="#"><img src="img/youtobe.png" alt=""></a>
        </div>
      </section>
      </div>
      <section id="eventos" class="hide-for-small-only">
        <div class="row">
            <div class="small-12 medium-6 column destacados" id="destacados-1">
              <div class="destacados-text izq">
                <h5 class="subtitulo">8 keynote  </h5>
                <h3>speakers</h3>
                <a href="conferencias.php" class="button">More</a>
              </div>
            </div>
            <div class="small-12 medium-6 column destacados" id="destacados-2">
              <div class="destacados-text derecha">
                <h5 class="subtitulo">+50 educational  </h5>
                <h3>sessions</h3>
                <a href="sesiones.php" class="button">More</a>
              </div>
            </div>
        </div> <!-- fila -->
        <div class="row collapse">
          <div class="small-12 medium-6 column destacados" id="destacados-3">
            <div class="destacados-text izq">
              <h5 class="subtitulo">9 workshops </h5>
              <h3></h3>
              <a href="talleres.php" class="button">VMore</a>
            </div>
          </div>
          <div class="small-12 medium-6 column destacados" id="destacados-4">
            <div class="destacados-text derecha">
              <h5 class="subtitulo">Expo  </h5>
              <h3>Urban Parks</h3>
              <a href="expo.php" class="button">More</a>
            </div>
          </div>
        </div>
      </section><!-- /Eventos - talleres -->
      <!--===== Temas del congreso ==== -->
      <section id="tematicas" class="hide-for-small-only">
        <!--   Iconos temas -->
          <div class="row">
            <div class="column medium-offset-4 large-offset-5">
              <h3 class="sub-1">THEMES</h3>
            </div>
          </div>

        <!-- sliders frases y fotos -->
        <div class="row " id="banners">
          <div class=" orbit column small-12 medium-12 " id="mensajes" role="region" aria-label="Favorite Space Pictures" data-orbit>
              <ul class="orbit-container" >
              <li class="orbit-slide">
                <img class="orbit-image" src="img/diseno.png" alt="Space">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/economia-espacio.png" alt="Space">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/salud.png" alt="Space">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/participacion.png" alt="Space">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/ciudad.png" alt="Space">
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- =======  Certificado  =====  -->
    <section id="certificado" class="hide-for-small-only">
      <div class="row ">
        <div class="column medium-2">
          <figure>
            <img src="img/certificado.png" alt="Certificado profesional en parques y recreación">
          </figure>
        </div>
        <div class="column medium-10">
          <div class="text-center">
            <h4>OBTAIN A PROFESSIONAL CERTIFICATE </h4>
            <h6>SUPPORTED BY THE NATIONAL ASSOCIATION OF PARKS AND RECREATION</h6>

            <hr>
            <p>By attending<strong> 80%</strong>  of all keynote and educational sessions.</p>
          </div>
        </div>
      </div>
    </section>
      <!-- Seccion boletos-->
      <section id="boletos-contenedor" class="hide-for-small-only">
        <div class="row column contenido align-center">
          Take advantage of our promotion to months without interest with participants.<img src="img/tarjestas-admitidas.png" alt="" class="tarjetas">
        </div><br>
        <div class="row">
          <div class="column medium-offset-9">
            <h3 class="sub-5">INVESTMENT</h3>
          </div>
        </div>
        <div class="row">
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title text-center">General</li>
                <li class="price">$245 <span class="pesos">USD</span></li>
                <!-- <li class="description">* Price from January 1st until March 1st </li> -->
                <li>Keynote Presentations <br><i class="fi-check"></i></li>
                <li>Educational Sessions<br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Social Events<br><i class="fi-check"></i></li>
                <li>Workshops<br><i class="fi-x"></i></li>
                <li>Annual Membership ANPR México<br><i class="fi-check"></i></li>
                <li><a class="button" href="https://www.ticketopolis.com/congresoparqueseng/tickets.aspx" target="_blank">BUY</a></li>
              </ul>
          </div>
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Students</li>
                <li class="price">$75 <span class="pesos">USD</span></li>
                <!-- <li class="description">* Price until March 1st</li> -->
                <li>Keynote Presentations<br><i class="fi-check"></i></li>
                <li>Educational Sessions<br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Social Events<br><i class="fi-x"></i></li>
                <li>Workshops<br><i class="fi-x"></i></li>
                <li>Annual Membership ANPR México<br><i class="fi-check"></i></li>
                <li><a class="button" href="https://www.ticketopolis.com/congresoparqueseng/tickets.aspx" target="_blank">BUY</a></li>
              </ul>
          </div>
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Expo</li>
                <li class="price">$25 <span class="pesos">USD</span> </li>
                <li class="description">* Permanent price for both days</li>
                <li>Keynote Presentations<br><i class="fi-x"></i></li>
                <li>Educational Sessions<br><i class="fi-x"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Social Events<br><i class="fi-x"></i></li>
                <li>Workshops<br><i class="fi-x"></i></li>
                <li>Annual Membership ANPR México<br><i class="fi-x"></i></li>
                <li><a class="button" href="https://www.ticketopolis.com/congresoparqueseng/tickets.aspx" target="_blank">BUY</a></li>
              </ul>
          </div>
        </div>
        <div class="row text-center">
        <div class="column nota">
          <p><strong>Note:</strong> You can register to the workshops and social events through the buying process of a general or student ticket to the congress. Enter the option BUY in the ticket you want and these options will appear!.</p>
        </div>
      </div>
      </section>
      <!-- Registro Boletín -->
    <section id="registro" class="hide-for-small-only">
      <h4 class="text-center">Stay informed!</h4>
      <p class="text-center">Sign up for updates, discounts and news.</p>
      <form action="https://formspree.io/info.congreso@anpr.org.mx" method="POST">
        <div class="row align-justify formulario-1">
          <div class="column small-12 medium-3 small-order-1">
            <input type="text" name="Nombre" class="">
            <label for="" class="text-center">Name</label>
          </div>
          <div class="column small-12 medium-3 small-order-2">
            <input type="text" name="Apellido">
            <label for="" class="text-center">last name</label>
          </div>
          <div class="column small-12 medium-3 small-order-3">
            <input type="text" name="Email"></input>
            <label for="" class="text-center">E-mail</label>
          </div>
          <div class="column small-12 medium-3 text-center small-order-4">
            <input type="submit" name="" id="registro-horizontal" class="button btn-morado" value="SIGN UP">
          </div>
        </div>
      </form>
      <div class="row column">
        <span class="nota-boletin">*We will not share your information and you can cancel your subscription at any time.</span>
      </div>
    </section>
    <!-- //Registro Boletín  -->
      <!--  Sección patrocinadores -->
      <section id="proveedores" data-margellan-target="proveedores" class="hide-for-small-only">
        <div class="marcas-1">
          <div class="row">
            <div class="column medium-offset-5">
              <h3 class="sub-3">ORGANIZED BY </h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="column ">
              <a href="http://www.anpr.org.mx/" target="_blank"><img data-src="img/anpr-web.png" alt="Asociación Nacional de Parques y Recreación"></a>
            </div>
          </div>
        <div class="row">
          <div class="column text-center">
            <h4>PRESENTED BY</h4>
          </div>
        </div>
        <div class="row  align-center text-center">
          <div class="column large-12 medium-10  apoyos">
            <a href="http://www.parquesdemexico.org/consultora/" target="_blank"><img data-src="img/patrocinadores/parques-de-mexico-logo.png" alt="Espacios Públicos y Parques de México" class="img-patrocinador"></a>
            <a href="http://parquesalegres.org/" target="_blank"><img data-src="img/patrocinadores/parques-alegres-logo.png" alt="Parques Alegres" class="img-patrocinador"></a>
            <a href="https://www.worldurbanparks.org/en/" target="_blank" title="Ir a www.worldurbanparks.org">
                <img data-src="img/patrocinadores/world-urban-parks.png" alt="World urban Parks" class="img-patrocinador">
            </a>
            <div class="">
            <a href="https://www.gob.mx/sedatu" target="_blank" title="Ir a www.sedatu.gob">
              <img data-src="img/patrocinadores/sedatu-logo.png" alt="SEDATU" class="img-patrocinador"
            </a>
            <a href="http://www.wrimexico.org/" target="_blank" title="">
                <img data-src="../img/patrocinadores/wri.png" alt="WRI México" class="img-patrocinador">
            </a>
          </div>
          </div>
        </div>
      </div>
      <!--<div class="marcas-2" id="patrocinadores">
        <div class="row" >
          <div class="column text-center" >
            <h4>CON EL APOYO DE</h4>
          </div>
        </div>
        <div class="row text-center align-center">
          <div class="column large-12 medium-10  apoyos">
            <img src="img/patrocinadores/marca-1.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-2.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-3.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-4.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-5.png" alt="" class="img-patrocinador">
          </div>
        </div>
        <h3 class="text-center"><a href="patrocinadores.php">DIRECTORIO PATROCINADORES</a></h3>
      </div>-->
      </section>

    <!--sección de redes sociales-->
    <section id="redes-sociales" class="hide-for-small-only">
      <div class="row column align-center ">
        <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank"><img src="img/facebook.png" alt=""></a>
        <a href="https://twitter.com/congreso_parque" target="_blank"><img src="img/twitter.png" alt=""></a>
        <a href="https://www.instagram.com/congreso_parques/" target="_blank"><img src="img/instagram.png" alt=""></a>
        <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank"><img src="img/youtobe.png" alt=""></a>
      </div>
    </section><!--fin redes sociales-->

    <!-- <section class="hide-for-small-only">
      <a href="convocatoria-sesiones.php">
        <section class="convocatoria">
          <div class="row convocatoria-content">
          </div>
        </section>
      </a>
    </section> -->

<div class="hide-for-small-only">
  <?php include'assets/footer.php'; ?>
</div>
