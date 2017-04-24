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
        <div class="colum medium-6">
          <img src="img/barra.png" alt="">
        </div>
        <div class="colum medium-4 offset-2 ">
          <h3 class="sub-1">TEMAS</h3>
        </div>
      </div>
      <!--===== Temas del congreso ==== -->
      <section id="tematicas">
        <div class="row expanded" id="temas-slider">
          <div class="column medium-6 " id="mensajes">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
              <ul class="orbit-container">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                <li class="orbit-slide">
                  <div class="fondo-verde">
                    <h4 class="text-center">2: You can also throw some text in here!</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
                  </div>
                </li>
                <li class="orbit-slide">
                  <div class="fondo-acuamarina">
                    <h4 class="text-center">2: You can also throw some text in here!</h4>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
                  </div>
                </li>
                <li class="orbit-slide">
                  <div class="fondo-azul">
                    <h4 class="text-center">2: You can also throw some text in here!</h4>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
                  </div>
                </li>
                <li class="orbit-slide">
                  <div class="fondo-azulmarino">
                    <h4 class="text-center">2: You can also throw some text in here!</h4>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
                  </div>
                </li>
                <li class="orbit-slide">
                  <div class="fondo-rosado">
                    <h4 class="text-center">2: You can also throw some text in here!</h4>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="column medium-6" id="img-slider">
            <img src="img/planeacion-y-diseno.jpg" alt="">
          </div>
        </div>
        <div class="" id="iconos-temas">
          <div class="row align-spaced">
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Diseño y Planeación"><a href="#"><img src="img/planeacion-y-diseno-02.png" onmouseover="this.src='img/planeacion-y-diseno-01.png';" onmouseout="this.src='img/planeacion-y-diseno-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="La Ciudad"><a href="#"><img src="img/la-ciudad-02.png" onmouseover="this.src='img/la-ciudad-01.png';" onmouseout="this.src='img/la-ciudad-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Economía y Usos del Espacio Público"><a href="#"><img src="img/uso-del-espacio-publico-02.png" onmouseover="this.src='img/uso-del-espacio-publico-01.png';" onmouseout="this.src='img/uso-del-espacio-publico-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Salud y Medio Ambiente"><a href="#"><img src="img/salud-y-medio-ambiente-02.png" onmouseover="this.src='img/salud-y-medio-ambiente-01.png';" onmouseout="this.src='img/salud-y-medio-ambiente-02.png';" alt=""></a></span>
              </div>
              <div class="column">
                <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="2" title="Servicio Público y Participación Ciudadana"><a href="#"><img src="img/servicio-publico-02.png" onmouseover="this.src='img/servicio-publico-01.png';" onmouseout="this.src='img/servicio-publico-02.png';" alt=""></a>
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
        <div class="row collapse">
          <div class="small-12 medium-6 column">
            <div div class=“orbit” data-orbit>
              <div class="orbit-container">
                <div class="orbit-slide">

                  <img class="orbit-image" src="img/conferencias-magistrales.jpg" onmouseover="this.src='img/conferencias-magistrales-2.png';" onmouseout="this.src='img/conferencias-magistrales.jpg';" data-src="" alt="Space">
                    <figcaption class="text-inf">
                    <p class="subtitulo">Expertos en los espacios públicos</p>
                    <h3>Conferencias</h3>
                    <p>Descripción</p>
                   </figcaption>
                </div>
            </div>
            </div>
          </div>
          <div class="small-12 medium-6 column">
            <div div class=“orbit” data-orbit>
              <div class="orbit-container">
                <div class="orbit-slide">
                  <img class="orbit-image" src="img/conferencias-educativas.jpg" alt="Space">
                  <figcaption class="text-inf">
                    <p class="subtitulo">Expertos en los espacios públicos</p>
                    <h3>Sesiones educativas</h3>
                    <p>Descripción</p>
                   </figcaption>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row collapse">
          <div class="small-12 medium-6 column">
            <div div class=“orbit” data-orbit>
              <div class="orbit-container">
                <div class="orbit-slide">
                  <img class="orbit-image" src="img/talleres-vivenciales.jpg" alt="Space">
                  <figcaption class="text-inf">
                    <p class="subtitulo">Expertos en los espacios públicos</p>
                    <h3>Talleres</h3>
                    <p>Descripción</p>
                   </figcaption>
                </div>
              </div>
            </div>
          </div>
          <div class="small-12 medium-6 column">
            <div div class="orbit" data-orbit>
              <div class="orbit-container">
                <div class="orbit-slide">
                  <img class="orbit-image" src="img/eventos-sociales.jpg" alt="Space">
                  <figcaption class="text-inf">
                    <p class="subtitulo">Expertos en los espacios públicos</p>
                    <h3>Eventos Sociales</h3>
                    <p>Descripción</p>
                   </figcaption>
                </div>
              </div>
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
            <a href="" target="_blank"><img src="img/parques-de-mexico-logo.png" alt="" class="img-patrocinador"></a>
            <a href="" target="_blank"><img src="img/parques-alegres-logo.png" alt="" class="img-patrocinador"></a>
            <a href="" target="_blank"><img src="img/sedatu-logo.png" alt="" class="img-patrocinador"></a>
            <a href="" target="_blank"><img src="img/merida-logo.jpg" alt="" class="img-patrocinador"></a>
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
            <img src="img/marca-1.png" alt="" class="img-patrocinador">
            <img src="img/marca-2.png" alt="" class="img-patrocinador">
            <img src="img/marca-3.png" alt="" class="img-patrocinador">
            <img src="img/marca-4.png" alt="" class="img-patrocinador">
            <img src="img/marca-5.png" alt="" class="img-patrocinador">
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
                <li class="title">General</li>
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
      <h6 class="text-center">Regístrate para obtener actualizaciones sobre descuentos para conferencias, promociones y noticias.</h6>
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
