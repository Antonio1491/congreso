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
    <meta name="description" content="Congreso Internacional de Parques Urbanos: Se parte del inicio del gran movimiento social de los parques en México.">
    <meta name="keywords" content="congreso de parques, congreso de parques urbanos, congreso internacional de parques">
    <meta name="author" content="Ing. Antonio Góngora - Web Master">
    <meta property="og:url" content="http://www.anpr.org.mx/congreso" />
    <meta property="og:title" content="Congreso Internacional de Parques Urbanos" />
    <meta property="og:description" content="Se parte del inicio del gran movimiento social de los parques en México." />
    <meta property="og:image" content="http://www.anpr.org.mx/congreso/img/congreso-parques-urbanos-logo.png" />
    <title>Congreso Internacional de Parques Urbanos</title>
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
      <div id="video" class="hide-for-small-only">
        <div class="">
          prueba
        </div>
          <video  autoplay loop poster="posterimage.jpg" >
            <source src="video/congreso2.mp4" type="video/mp4">
            <source src="videos/loop-2.webm" type="video/webm">
          </video>
      </div><!-- Fin Portada -->
      <div class="cinta-marquee hide-for-small-only">
        <section class="marquee slider2">
          <div><img src="img/patrocinadores/deacero.png" alt=""></div>
          <div><img src="img/patrocinadores/escofet.png" alt=""></div>
          <div><img src="img/patrocinadores/fundidora.png" alt=""></div>
          <div><img src="img/patrocinadores/kompan.png" alt=""></div>
          <div><img src="img/patrocinadores/play-club.png" alt=""></div>

        </section>
      </div>


      <!--======  diseño pra móviles   ======-->
      <div class="show-for-small-only">
        <div class="row align-center logo-contenedor-small">
          <a href="index.php">
            <img src="img/congreso-parques-urbanos-logo.png" alt="" class="logo-small">
          </a>
        </div>
        <div class="row align-center contenido-contador">
          <div class="contador">
            <h5>ABRIL 25-27 DEL 2018</h5>
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
          <img src="img/youtobe.png" alt="">
        </div>
      </section>

      <!--======  Fin diseño pra móviles   ======-->
      <!-- ======  Barra y título temas  =====-->
      <!--<div class="row expanded align-middle align-justify" id="barra" style="-moz-z-index:10; -webkit-z-index:10;">
        <div class="colum small-12 medium-6">
          <img src="img/barra.png" alt="">
        </div>
      </div>-->

      <!-- === Eventos - talleres === -->
      <!--<div class="row hide-for-small-only">
        <div class="column medium-offset-8">
          <h3 class="sub-2">ACTIVIDADES DESTACADAS</h3>
        </div>-->
      </div>
      <section id="eventos" class="hide-for-small-only">
        <div class="row">
            <div class="small-12 medium-6 column destacados" id="destacados-1">
              <div class="destacados-text izq">
                <h5 class="subtitulo">8 CONFERENCIAS</h5>
                <h3>MAGISTRALES</h3>
                <a href="conferencias.php" class="button">Ver Más</a>
              </div>
            </div>
            <div class="small-12 medium-6 column destacados" id="destacados-2">
              <div class="destacados-text derecha">
                <h5 class="subtitulo">+50 sesiones </h5>
                <h3>Educativas</h3>
                <a href="sesiones.php" class="button">Ver Más</a>
              </div>
            </div>
        </div> <!-- fila -->
        <div class="row collapse">
          <div class="small-12 medium-6 column destacados" id="destacados-3">
            <div class="destacados-text izq">
              <h5 class="subtitulo">9 talleres</h5>
              <h3>Vivenciales</h3>
              <a href="talleres.php" class="button">Ver Más</a>
            </div>
          </div>
          <div class="small-12 medium-6 column destacados" id="destacados-4">
            <div class="destacados-text derecha">
              <h5 class="subtitulo">Expo Comercial </h5>
              <h3>Parques Urbanos</h3>
              <a href="expo.php" class="button">Ver Más</a>
            </div>
          </div>
        </div>
      </section><!-- /Eventos - talleres -->
      <!--===== Temas del congreso ==== -->
      <section id="tematicas" class="hide-for-small-only">
        <div class="" id="iconos-temas"><!--   Iconos temas -->
          <div class="row">
            <div class="column medium-offset-4 large-offset-5">
              <h3 class="sub-1">EJES TEMÁTICOS</h3>
            </div>
          </div>
          <!--<div class="row align-spaced">
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Diseño y Planeación"><a href="tematicas.php"><img data-src="img/planeacion-y-diseno-02.png" alt="icono diseno" onmouseover="this.src='img/planeacion-y-diseno-01.png';" onmouseout="this.src='img/planeacion-y-diseno-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="La Ciudad"><a href="tematicas.php"><img data-src="img/la-ciudad-02.png" alt="icono ciudad" onmouseover="this.src='img/la-ciudad-01.png';" onmouseout="this.src='img/la-ciudad-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Economía y Usos del Espacio Público"><a href="tematicas.php"><img data-src="img/uso-del-espacio-publico-02.png" alt="icono-economía" onmouseover="this.src='img/uso-del-espacio-publico-01.png';" onmouseout="this.src='img/uso-del-espacio-publico-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Salud y Medio Ambiente"><a href="tematicas.php"><img data-src="img/salud-y-medio-ambiente-02.png" alt="icono salud" onmouseover="this.src='img/salud-y-medio-ambiente-01.png';" onmouseout="this.src='img/salud-y-medio-ambiente-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Servicio Público y Participación Ciudadana"><a href="tematicas.php"><img data-src="img/servicio-publico-02.png" alt="icono participación ciudadana" onmouseover="this.src='img/servicio-publico-01.png';" onmouseout="this.src='img/servicio-publico-02.png';" alt=""></a></span>
              </div>
          </div>
        </div>-->
        <!-- sliders frases y fotos -->
        <div class="row " id="banners">
          <div class=" orbit column small-12 medium-12 " id="mensajes" role="region" aria-label="Favorite Space Pictures" data-orbit>
              <ul class="orbit-container" >
                <!--<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>-->
                <!--<li class="orbit-slide fondo-verde">
                  <p class="text-center frases" >"Los parques fortalecen los lazos comunitarios, transforman vidas y protegen nuestro futuro."</p>
                </li>
                <li class="orbit-slide fondo-acuamarina">
                  <div class=" frases">
                    <p class="text-center">"Los parques deben construirse de acuerdo a las necesidades de cada comunidad, ningún espacio es igual a otro."</p>
                  </div>
                </li>
                <li class="orbit-slide fondo-azul">
                  <div class=" frases">
                    <p class="text-center">"Los parques urbanos pueden llegar a reducir hasta 10º C en las ciudades, mejorando la calidad de vida de sus habitantes."</p>
                  </div>
                </li>
                <li class="orbit-slide fondo-azulmarino">
                  <div class=" frases">
                    <p class="text-center">"Si el jugar es el trabajo de los niños, ¿qué pasa si se quedan desempleados?"</p>
                  </div>
                </li>
                <li class="orbit-slide fondo-rosado">
                  <div class=" frases">
                    <p class="text-center">"Las áreas verdes generan bienestar y felicidad ayudando a evitar problemas mentales como: depresión, ansiedad o estrés laboral."</p>
                  </div>
                </li>
              </ul>
          </div>
          <div class=" orbit column small-12 medium-6 " id="mensajes" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container" >
              <li class="orbit-slide">
                <img src="img/planeacion-slider.jpg" alt="Planeación de la ciudad">
              </li>
              <li class="orbit-slide">
                <img src="img/ciudad-slider.jpg" alt="">
              </li>
              <li class="orbit-slide ">
                <img src="img/economia-slider.jpg" alt="">
              </li>
              <li class="orbit-slide ">
                <img src="img/salud-slider.jpg" alt="">
              </li>
              <li class="orbit-slide ">
                <img src="img/participacion-slider.jpg" alt="">
              </li>-->
              <li class="orbit-slide">
                <img class="orbit-image" src="img/diseno.png" alt="Diseño y planeación del espacio público">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/economia-espacio.png" alt="Economía y usos del espacio público">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/salud.png" alt="Salud y medio ambiente">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/participacion.png" alt="Función pública y participación ciudadana">
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="img/ciudad.png" alt="La ciudad y el espacio público">
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section id="certificado">

      </section>

      <!-- Seccion boletos-->
      <section id="boletos-contenedor" class="hide-for-small-only">
        <div class="row">
          <div class="column medium-offset-9">
            <h3 class="sub-5">INVERSIÓN</h3>
          </div>
        </div>
        <div class="row">
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title text-center">General</li>
                <li class="price">$3,900.00 <span class="pesos">MXN</span></li>
                <li class="description">* Precio hasta el 31 de Diciembre</li>
                <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
                <li>Sesiones Educativas <br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-check"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
              </ul>
          </div>
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Estudiantes</li>
                <li class="price">$1,500.00 <span class="pesos">MXN</span></li>
                <li class="description">* Precio hasta el 1 de Febrero</li>
                <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
                <li>Sesiones Educativas <br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-x"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
              </ul>
          </div>
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Expo</li>
                <li class="price">$500.00 <span class="pesos">MXN</span></li>
                <li class="description">* Precio para la expo durante los 2 días del evento</li>
                <li>Conferencias Magistrales <br><i class="fi-x"></i></li>
                <li>Sesiones Educativas <br><i class="fi-x"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-x"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
              </ul>
          </div>
        </div>
      </section>
      <!-- Registro Boletín -->
    <section id="registro" class="hide-for-small-only">
      <h4 class="text-center">¡Mantente informado!</h4>
      <p class="text-center">Regístrate para obtener actualizaciones sobre descuentos para conferencias, promociones y noticias.</p>
      <form action="https://formspree.io/info.congreso@anpr.org.mx" method="POST">
        <div class="row align-justify formulario-1">
          <div class="column small-12 medium-3 small-order-1">
            <input type="text" name="Nombre" class="">
            <label for="" class="text-center">Nombre</label>
          </div>
          <div class="column small-12 medium-3 small-order-2">
            <input type="text" name="Apellido">
            <label for="" class="text-center">Apellido</label>
          </div>
          <div class="column small-12 medium-3 small-order-3">
            <input type="text" name="Email"></input>
            <label for="" class="text-center">E-mail</label>
          </div>
          <div class="column small-12 medium-3 text-center small-order-4">
            <input type="submit" name="" id="registro-horizontal" class="button btn-morado" value="REGÍSTRATE">
          </div>
        </div>
      </form>
      <div class="row column">
        <span class="nota-boletin">*No compartiremos su información y usted puede cancelar su suscripción en cualquier momento</span>
      </div>
    </section>
    <!-- //Registro Boletín  -->
      <!--  Sección patrocinadores -->
      <section id="proveedores" data-margellan-target="proveedores" class="hide-for-small-only">
        <div class="marcas-1">
          <div class="row">
            <div class="column medium-offset-5">
              <h3 class="sub-3">ORGANIZA</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="column ">
              <a href="http://www.anpr.org.mx/" target="_blank">
                <img data-src="img/anpr-web.png" alt="ANPR Asociación Nacional de Parques y Recreación">
              </a>
            </div>
          </div>
        <div class="row">
          <div class="column text-center">
            <h4>PRESENTA</h4>
          </div>
        </div>
        <div class="row  align-center text-center">
          <div class="column large-12 medium-10  apoyos">
            <a href="http://www.parquesdemexico.org/consultora/" target="_blank">
              <img data-src="img/patrocinadores/parques-de-mexico-logo.png" alt="Espacios Públicos y Parques de México" class="img-patrocinador">
            </a>
            <a href="http://parquesalegres.org/" target="_blank">
              <img data-src="img/patrocinadores/parques-alegres-logo.png" alt="Parques Alegres" class="img-patrocinador">
            </a>
            <a href="https://www.gob.mx/sedatu" target="_blank">
              <img data-src="img/patrocinadores/sedatu-logo.png" alt="SEDATU" class="img-patrocinador">
            </a>

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
        <img src="img/youtobe.png" alt="">
      </div>
    </section><!--fin redes sociales-->

    <section class="hide-for-small-only">
      <a href="convocatoria-sesiones.php">
        <section class="convocatoria">
          <div class="row convocatoria-content">
          </div>
        </section>
      </a>
    </section>

<div class="hide-for-small-only">
  <?php include'assets/footer.php'; ?>
</div>
