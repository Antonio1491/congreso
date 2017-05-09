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
    <title>Congreso Internacional de Parques Urbanos</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
      <!--=====  portada/video  ====-->
      <div id="video">
          <video  autoplay loop poster="posterimage.jpg">
            <source src="video/loop.mp4" type="video/mp4">
            <source src="videos/loop.webm" type="video/webm">
          </video>
      </div><!-- Fin Portada -->

      <!-- ======  Barra y título temas  =====-->
      <div class="row expanded align-middle align-justify" id="barra" style="-moz-z-index:10; -webkit-z-index:10;">
        <div class="colum small-8 medium-6">
          <img src="img/barra.png" alt="">
        </div>
        <div class="colum small-4 medium-4 medium-offset-2 ">
          <h3 class="sub-1">TEMAS</h3>
        </div>
      </div>
      <!--===== Temas del congreso ==== -->
      <section id="tematicas">
        <div class="row expanded align-middle">
          <div class=" orbit column small-12 medium-6 " id="mensajes" role="region" aria-label="Favorite Space Pictures" data-orbit>
              <ul class="orbit-container" >
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                <li class="orbit-slide fondo-verde">
                  <div class=" frases">
                  <p class="text-center">"Los parques fortalecen los lazos comunitarios, transforman vidas y protegen nuestro futuro."</p>
                  </div>
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
          <div class="column medium-6" id="img-slider">
            <img src="img/planeacion-y-diseno.jpg" alt="">
          </div>
        </div>
        <div class="" id="iconos-temas">
          <div class="row align-spaced">
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Diseño y Planeación"><img src="img/planeacion-y-diseno-02.png" onmouseover="this.src='img/planeacion-y-diseno-01.png';" onmouseout="this.src='img/planeacion-y-diseno-02.png';" alt=""></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="La Ciudad"><img src="img/la-ciudad-02.png" onmouseover="this.src='img/la-ciudad-01.png';" onmouseout="this.src='img/la-ciudad-02.png';" alt=""></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Economía y Usos del Espacio Público"><img src="img/uso-del-espacio-publico-02.png" onmouseover="this.src='img/uso-del-espacio-publico-01.png';" onmouseout="this.src='img/uso-del-espacio-publico-02.png';" alt=""></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Salud y Medio Ambiente"><img src="img/salud-y-medio-ambiente-02.png" onmouseover="this.src='img/salud-y-medio-ambiente-01.png';" onmouseout="this.src='img/salud-y-medio-ambiente-02.png';" alt=""></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Servicio Público y Participación Ciudadana"><img src="img/servicio-publico-02.png" onmouseover="this.src='img/servicio-publico-01.png';" onmouseout="this.src='img/servicio-publico-02.png';" alt=""></span>
              </div>
          </div>
        </div>
      </section>

      <!-- === Eventos - talleres === -->
      <div class="row">
        <div class="column medium-offset-8">
          <h3 class="sub-2">ACTIVIDADES DESTACADAS</h3>
        </div>
      </div>
      <section id="eventos">
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
      <!--  Sección patrocinadores -->
      <section id="proveedores" data-margellan-target="proveedores">
        <div class="marcas-1">
          <div class="row">
            <div class="column medium-offset-5">
              <h3 class="sub-3">ORGANIZA</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="column ">
              <a href="http://www.anpr.org.mx/" target="_blank"><img src="img/anpr-web.png" alt=""></a>
            </div>
          </div>
        <div class="row">
          <div class="column text-center">
            <h4>PRESENTA</h4>
          </div>
        </div>
        <div class="row align-middle text-center apoyos">
          <div class="column">
            <a href="http://www.parquesdemexico.org/consultora/" target="_blank"><img src="img/patrocinadores/parques-de-mexico-logo.png" alt="" class="img-patrocinador"></a>
            <a href="http://parquesalegres.org/" target="_blank"><img src="img/patrocinadores/parques-alegres-logo.png" alt="" class="img-patrocinador"></a>
            <a href="https://www.gob.mx/sedatu" target="_blank"><img src="img/patrocinadores/sedatu-logo.png" alt="" class="img-patrocinador"></a>
            <a href="http://www.merida.gob.mx/municipio/portal/index.phpx" target="_blank"><img src="img/patrocinadores/merida-logo.jpg" alt="" class="img-patrocinador"></a>
          </div>
        </div>
      </div>
      <div class="marcas-2">
        <div class="row" id="patrocinadores">
          <div class="column text-center" >
            <h3 class=""><a href="#">DIRECTORIO PATROCINADORES</a></h3>
            <h4>CON EL APOYO DE</h4>
          </div>
        </div>
        <div class="row align-middle text-center apoyos">
          <div class="column">
            <img src="img/patrocinadores/marca-1.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-2.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-3.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-4.png" alt="" class="img-patrocinador">
            <img src="img/patrocinadores/marca-5.png" alt="" class="img-patrocinador">
          </div>
        </div>
      </div>
      </section>

      <!--  Sección contacto -->
      <div class="row">
        <div class="column medium-offset-8">
          <h3 class="sub-4">LUGAR Y CONTACTO</h3>
        </div>
      </div>
      <section id="contacto">
        <div class="row expanded">
          <div class="column medium-3 medium-offset-3 text-center">
            <div id="contenido-contacto">
              <h6>Centro Internacional de Congresos</h6>
              <h3>Mérida, Yucatán</h3>
              <div class="info-contacto">
                <i class="fi-telephone"></i> 99944060
                <i class="fi-mail"></i> info.congreso@anpr.org.mx
              </div>
              <span class="">
                Si tienes dudas o comentarios<br> ¡Contáctanos!
              </span>
              <div>
                <form id="form-contacto" action="https://formspree.io/info.congreso@anpr.org.mx" method="POST">
                  <input type="text" name="nombre" value="" placeholder="NOMBRE">
                  <input type="email" name="email" value="" placeholder="CORREO">
                  <textarea name="mensaje" rows="2" cols="80" placeholder="MENSAJE"></textarea>
                  <input type="submit" name="" value="ENVIAR" class="button small">
                </form>
              </div>
            </div>
          </div>
          <div class="column medium-6 " id="mapa">
            <div class="map" data-interchange="[assets/mapa-small.html, small], [assets/mapa.html, medium]">
            </div>
          </div>
        </div>
      </section>
      <!--  Fin sección contacto-->
      <section id="boletos-contenedor">
        <div class="row">
          <div class="column medium-offset-9">
            <h3 class="sub-5">INVERSIÓN</h3>
          </div>
        </div>
        <div class="row">
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title text-center">General</li>
                <li class="price">$3,900.00</li>
                <li class="description">* Precio hasta el 1 de Agosto</li>
                <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
                <li>Sesiones Educativas <br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-check"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">VER MÁS</a></li>
              </ul>
          </div>
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Estudiantes</li>
                <li class="price">$1,500.00</li>
                <li class="description">* Precio hasta el 1 de Febrero</li>
                <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
                <li>Sesiones Educativas <br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-x"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">VER MÁS</a></li>
              </ul>
          </div>
          <div class="column small-10 medium-4">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Expo</li>
                <li class="price">$500.00</li>
                <li class="description">* Precio para la expo durante los 3 días del evento</li>
                <li>Conferencias Magistrales <br><i class="fi-x"></i></li>
                <li>Sesiones Educativas <br><i class="fi-x"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-x"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">VER MÁS</a></li>
              </ul>
          </div>
        </div>
      </section>

      <!-- Registro Boletín -->
    <section id="registro">
      <h4 class="text-center">¡Mantente informado!</h4>
      <p class="text-center">Regístrate para obtener actualizaciones sobre descuentos para conferencias, promociones y noticias.</p>
      <form >
        <div class="row align-justify formulario-1">
          <div class="column small-12 medium-3 small-order-1">
            <input type="text" class="">
            <label for="" class="text-center">Nombre</label>
          </div>
          <div class="column small-12 medium-3 small-order-2">
            <input type="text">
            <label for="" class="text-center">Apellido</label>
          </div>
          <div class="column small-12 medium-3 small-order-3">
            <input type="text"></input>
            <label for="" class="text-center">E-mail</label>
          </div>
          <div class="column small-12 medium-3 text-center small-order-4">
            <input type="button" name="" id="registro-horizontal" class="button btn-morado" value="REGÍSTRATE">
          </div>
        </div>
      </form>
      <div class="row column">
        <span class="nota-boletin">*No compartiremos su información y usted puede cancelar su suscripción en cualquier momento</span>
      </div>
    </section>
    <!-- //Registro Boletín  -->
    <!--sección de redes sociales-->
    <section id="redes-sociales">
      <div class="row column align-center ">
        <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank"><img src="img/facebook.png" alt=""></a>
        <a href="https://twitter.com/congreso_parque" target="_blank"><img src="img/twitter.png" alt=""></a>
        <a href="https://www.instagram.com/congreso_parques/" target="_blank"><img src="img/instagram.png" alt=""></a>
        <img src="img/youtobe.png" alt="">
      </div>
    </section><!--fin redes sociales-->

<?php include'assets/footer.php'; ?>
