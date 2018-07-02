<?php include('assets/contador.php') ?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Congreso de Parques: Se parte del inicio del gran movimiento social de los
    parques en México y asiste al 1er. Congreso Internacional de Parques Urbanos 2018.">
    <meta name="author" content="Ing. Antonio Góngora - Web Master">
    <meta property="og:url" content="http://www.anpr.org.mx/congreso" />
    <meta property="og:title" content="Congreso Internacional de Parques Urbanos" />
    <meta property="og:description" content="Se parte del inicio del gran movimiento social de los parques en México." />
    <meta property="og:image" content="http://www.anpr.org.mx/congreso/img/congreso-parques-urbanos-logo.png" />
    <title>Congreso Internacional de Parques Urbanos</title>
    <?php require("assets/head_common.php") ?>
  </head>
  <body onload="countdown('contador'), countdown('contador-small')">
  <?php include'assets/menu.php'; ?>
<!-- pop-up mensaje  -->
  <!-- <div id="popup" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close"><i class="fi-x-circle large"></i></div>
        <div>
           <a href="#" target="_blank">
             <img id="img-popup" src="img/gracias.png" alt="">
           </a>
        </div>
    </div>
	</div> -->
  <!--=====================  video  ========================================-->
  <div class="btn-play hide-for-small-only">
    <a href="#" data-open="exampleModal1" title="Ver Video"><img src="img/btn-play.png" alt="" onclick="ejecutar()"></a>
  </div>
  <div id="portada" class="hide-for-small-only">
    <!-- <video  autoplay loop preload poster="posterimage.jpg" >
      <source src="video/congreso2.mp4" type="video/mp4">
      <source src="videos/loop-2.webm" type="video/webm">
    </video> -->
  </div>
  <!--   modal   -->
    <div class="small reveal" id="exampleModal1" data-reveal>
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/rCamzymTys0" frameborder="0" gesture="media" ></iframe>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <!--====================== cinta patrocinadores   ===================================================-->
  <?php include('assets/cinta_patrocinadores.php') ?>
  <!--======  diseño pra móviles   ======-->
  <div class="show-for-small-only">
    <div class="row align-center logo-contenedor-small">
      <a href="index.php">
        <img src="img/congreso-parques-urbanos-logo.png" class="logo-small" alt="Congreso Internacional de Parques Urbanos">
      </a>
    </div>
    <div class="row align-center idiomas">
      <a href="english/index.php"><img src="img/usa.png" alt=""></a>
    </div>
    <div class="row align-center contenido-contador">
      <div class="contador">
        <!-- <h5>ABRIL 25-27 DEL 2018</h5>
        <h5>MÉRIDA YUCATÁN</h5> -->
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
  <!-- <section id="eventos" class="hide-for-small-only">
    <div class="row"><!-- ====  fila conferencias y sesiones  === -->
      <!-- <div class="small-12 medium-6 column destacados" id="destacados-1">
        <div class="destacados-text izq">
          <hgroup>
            <h5 class="subtitulo">8 CONFERENCIAS</h5>
            <h3>MAGISTRALES</h3>
          </hgroup>
          <a href="conferencias.php" class="button">Ver Más</a>
        </div>
      </div>
      <div class="small-12 medium-6 column destacados" id="destacados-2">
        <div class="destacados-text derecha">
          <hgroup>
            <h5 class="subtitulo">+50 sesiones </h5>
            <h3>Educativas</h3>
          </hgroup>
          <a href="sesiones.php" class="button">Ver Más</a>
        </div>
      </div>
    </div> <!-- /fila -->
    <!-- <div class="row collapse">
      <div class="small-12 medium-6 column destacados" id="destacados-3">
        <div class="destacados-text izq">
          <hgroup>
            <h5 class="subtitulo">9 talleres</h5>
            <h3>Vivenciales</h3>
          </hgroup>
          <a href="talleres.php" class="button">Ver Más</a>
        </div>
      </div>
      <div class="small-12 medium-6 column destacados" id="destacados-4">
        <div class="destacados-text derecha">
          <hgroup>
            <h5 class="subtitulo">Expo Comercial </h5>
            <h3>Parques Urbanos</h3>
          </hgroup>
          <a href="expo.php" class="button">Ver Más</a>
        </div>
      </div>
    </div>
    </section> -->

    <!-- ============= secciones  ========== -->
    <section id="secciones" class="">
        <figure>
          <a href="#">
            <img src="img/i_conferencias.png" alt="">
            <figcaption>
              <h1>Conferencias</h1>
              <h2>Magistrales</h2>
            </figcaption>
          </a>
        </figure>
        <figure>
          <a href="#">
            <img src="img/i_sesiones.png" alt="">
            <figcaption>
              <h1>Sesiones</h1>
              <h2>Educativas</h2>
            </figcaption>
          </a>
        </figure>
        <figure>
          <a href="#">
            <img src="img/i_talleres.png" alt="">
            <figcaption>
              <h1>Talleres</h1>
              <h2>Vivenciales</h2>
            </figcaption>
          </a>
        </figure>
        <figure>
          <a href="#">
            <img src="img/i_expo_parques.png" alt="">
            <figcaption>
              <h1>Expo</h1>
              <h2>Parques</h2>
            </figcaption>
          </a>
        </figure>
        <figure>
          <a href="#">
            <img src="img/i_eventos_sociales.png" alt="">
            <figcaption>
              <h1>eventos</h1>
              <h2>Sociales</h2>
            </figcaption>
          </a>
        </figure>
    </section>
    <!-- ======================  Conferencistas magistrales ============== -->
    <div class="row">
      <h3 class="titulo_seccion">Conferencistas</h3>
    </div>
    <section id="magistrales">
      <figure class="contenido_conferencista">
        <a href="#">
          <img src="img/foto_ejemplo_1.png" alt="">
          <figcaption>
            <h1>Nombre Apellido</h1>
            <h2>Cargo Empresa</h2>
            <h3>Estado y País</h3>
          </figcaption>
        </a>
      </figure>
      <figure class="contenido_conferencista">
        <a href="#">
          <img src="img/foto_ejemplo_2.png" alt="">
          <figcaption>
            <h1>Nombre Apellido</h1>
            <h2>Cargo Empresa</h2>
            <h3>Estado y País</h3>
          </figcaption>
        </a>
      </figure>
      <figure class="contenido_conferencista">
        <a href="#">
          <img src="img/foto_ejemplo_1.png" alt="">
          <figcaption>
            <h1>Nombre Apellido</h1>
            <h2>Cargo Empresa</h2>
            <h3>Estado y País</h3>
          </figcaption>
        </a>
      </figure>
      <figure class="contenido_conferencista">
        <a href="#">
          <img src="img/foto_ejemplo_2.png" alt="">
          <figcaption class="contenido_conferencista">
            <h1>Nombre Apellido</h1>
            <h2>Cargo Empresa</h2>
            <h3>Estado y País</h3>
          </figcaption>
        </a>
      </figure>
    </section>
    <!--========== Boletos  =============-->
    <section id="boletos-contenedor" class="hide-for-small-only">
      <div class="row">
          <h3 class="titulo_seccion_bc">INVERSIÓN</h3>
      </div>
      <div class="row">
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center" id="boletoGeneral">
            <li class="title text-center">General</li>
            <li class="price " >$4,290.00 <span class="pesos">MXN</span></li>
            <li class="description">* Precio antes del 31 Diciembre 201 </li>
            <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
            <li>Sesiones Educativas <br><i class="fi-check"></i></li>
            <li>Expo <br><i class="fi-check"></i></li>
            <li>Eventos Sociales <br><i class="fi-check"></i></li>
            <li>Talleres <br><i class="fi-x"></i></li>
              <!-- <li>Membresía anual ANPR México <br><i class="fi-check"></i></li> -->
            <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
          </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
            <li class="title">Estudiantes</li>
            <li class="price">$2,145.00 <span class="pesos">MXN</span></li>
            <li class="description">* Precio antes del 31 Diciembre 2018 </li>
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
            <li class="price">$100.00 <span class="pesos">MXN</span></li>
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

    <!--========  Organizadores ========-->
    <!-- <section id="proveedores" data-margellan-target="proveedores" class="hide-for-small-only">
      <div class="marcas-1">
        <div class="row">
          <div class="column medium-offset-5">
            <h3 class="sub-3">ORGANIZA</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="column ">
            <a href="http://www.anpr.org.mx/" target="_blank">
              <figure>
                <img data-src="img/anpr-web.png" alt="ANPR Asociación Nacional de Parques y Recreación">
              </figure>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="column text-center">
            <h4>PRESENTA</h4>
          </div>
        </div>

        <div class="row marquee" >
            <div  class="">
              <figure>
                <a href="http://www.parquesdemexico.org/consultora/" target="_blank" title="Ir a www.parquesdemexico.org">
                  <img data-src="img/patrocinadores/parques-de-mexico-logo.png" alt="Espacios Públicos y Parques de México" class="img-patrocinador">
                </a>
              </figure>
            </div>
            <div class="">
              <figure>
                <a href="http://parquesalegres.org/" target="_blank" title="Ir a www.parquesalegres.org">
                  <img data-src="img/patrocinadores/parques-alegres-logo.png" alt="Parques Alegres" class="img-patrocinador">
                </a>
              </figure>
            </div>
            <div class="">
              <figure>
                <a href="https://www.worldurbanparks.org/en/" target="_blank" title="Ir a www.worldurbanparks.org">
                    <img data-src="img/patrocinadores/world-urban-parks.png" alt="World urban Parks" class="img-patrocinador">
                </a>
              </figure>
            </div>
            <div class="">
              <figure>
                <a href="https://www.gob.mx/sedatu" target="_blank" title="Ir a www.sedatu.gob">
                  <img data-src="img/patrocinadores/sedatu-logo.png" alt="SEDATU" class="img-patrocinador">
                </a>
              </figure>
            </div>
            <div class="">
              <figure>
                <a href="http://www.wrimexico.org/" target="_blank" title="">
                    <img data-src="img/patrocinadores/wri.png" alt="WRI México" class="img-patrocinador">
                </a>
              </figure>
            </div>
          </div>
        </div>

    </section> -->

    <!--========  Redes sociales  ========-->
    <!-- <section id="redes-sociales" class="hide-for-small-only">
      <div class="row align-center ">
        <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank">
          <img src="img/facebook.png" alt="">
        </a>
        <a href="https://twitter.com/congreso_parque" target="_blank">
          <img src="img/twitter.png" alt="">
        </a>
        <a href="https://www.instagram.com/congreso_parques/" target="_blank">
          <img src="img/instagram.png" alt="">
        </a>
        <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank">
          <img src="img/youtobe.png" alt="">
        </a>
      </div>
    </section> -->
    <section id="section-mapa">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7191.507337009546!2d-100.28561921134552!3d25.679459210524172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662942a8d42b18f%3A0x1eee54a9dfbc9332!2sCintermex!5e0!3m2!1ses!2smx!4v1528396562531" width="2000" height="450" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
    </section>
    <!--====== Registro Boletín =====-->
    <section id="registro" class="hide-for-small-only">
      <h4 class="text-center"><i class="fi-mail"></i> CONTACTO</h4>
      <p class="text-center">Para ser patrocinador solicita información en comercial@anpr.org.mx</p>
      <p class="text-center">Si tienes dudas o comentarios ¡Contáctanos!</p>
      <form action="https://formspree.io/info.congreso@anpr.org.mx" method="POST">
        <fieldset>
          <div class="row align-justify formulario-1">
            <div class="column small-12 medium-6 small-order-1">
              <input type="text" name="Nombre" class="">
              <label for="" class="text-center">Nombre</label>
            </div>
            <div class="column small-12 medium-6 small-order-2">
              <input type="text" name="Email">
              <label for="" class="text-center">E-mail</label>
            </div>
          </div>
          <div class="row formulario-1">
            <div class="column small-12 medium-12 small-order-3">
              <textarea name="Mensaje" rows="4" cols="80"></textarea>
              <!-- <input type="text" name="Mensaje"></input> -->
              <label for="" class="text-center">Mensaje</label>
            </div>
          </div>
          <div class="row align-center">
            <div class="column small-12 medium-3 text-center small-order-4">
              <input type="submit" name="" id="registro-horizontal" class="button btn-morado" value="ENVIAR">
            </div>
          </div>
        </fieldset>
      </form>
      <!-- <div class="row column">
        <span class="nota-boletin">*No compartiremos su información y usted puede cancelar su suscripción en cualquier momento</span>
      </div> -->
    </section>

    <div class="hide-for-small-only">
      <?php include'assets/footer.php'; ?>

    </div>
