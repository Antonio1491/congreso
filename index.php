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
       <script type="text/javascript" src="contador/js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="contador/js/jquery-ui-1.8.14.custom.min.js"></script>
        <script type="text/javascript" src="contador/js/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="contador/js/jquery.ui.datepicker-es.js"></script>

<script type="text/javascript">

        $(function(){
            $('#datepicker').datetimepicker();
        });

        function countdown(id){
            var fecha=new Date('<?=$_SESSION['ano']?>','<?=$_SESSION['mes']?>','<?=$_SESSION['dia']?>','<?=$_SESSION['hora']?>','<?=$_SESSION['minuto']?>','<?=$_SESSION['segundo']?>')
            var hoy=new Date()
            var dias=0
            var horas=0
            var minutos=0
            var segundos=0

            if (fecha>hoy){
                    var diferencia=(fecha.getTime()-hoy.getTime())/1000
                    dias=Math.floor(diferencia/86400)
                    diferencia=diferencia-(86400*dias)
                    horas=Math.floor(diferencia/3600)
                    diferencia=diferencia-(3600*horas)
                    minutos=Math.floor(diferencia/60)
                    diferencia=diferencia-(60*minutos)
                    segundos=Math.floor(diferencia)

                    document.getElementById(id).innerHTML='<h5>Faltan ' + dias + ' D&iacute;as </h5>' + horas + ' Horas | ' + minutos + ' Minutos | ' + segundos + ' Segundos' +''

                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }
        </script>

  </head>
  <body onload="countdown('contador')">
<!-- menú canvas para dispositivos moviles -->
<div class="off-canvas-wrapper">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <div id="off-canvas" class="off-canvas position-left" data-off-canvas>
      <nav data-magellan>
        <ul class="vertical menu" data-drilldown>
          <li><a href="#">conferencia</a>
            <ul class=" vertical menu sub-menu-central">
              <li><a href="">Programa a la vista</a></li>
              <li><a href="">Programa Completo</a></li>
              <li><a href="">Talleres</a></li>
              <li><a href="">Patrocinadores y socios</a></li>
              <li><a href="">Expositores</a></li>
              <li><a href="">Congreso 2019</a></li>
            </ul>
          </li>
          <li><a href="#">mérida yucatán</a>
            <ul class="vertical menu  sub-menu-central">
              <li><a href="">La ciudad Blanca</a></li>
              <li><a href="#eventos">Actividades locales</a></li>
              <li><a href="">Hotel sede</a></li>
              <li><a href="">Trasnsportación</a></li>
              <li><a href="">Turismo en Mérida</a></li>
            </ul>
          </li>
          <li><a href="#">registro</a>
            <ul class=" vertical menu  sub-menu-central">
              <li><a href="">Tipos de Registro</a></li>
              <li><a href="">Precios</a></li>
        </ul>
      </nav>
    </div>

    <div class="off-canvas-content" data-off-canvas-content>

      <header>
      <!--  informacion de contacto -->
      <section id="encabezado">
      <div class="row align-justify">
        <div class="colum">
          <img src="img/congreso-parques-urbanos-logo.png" alt="">
        </div>
        <div class="colum">
          <div class="contador">
            <h5>ABRIL 25-27</h5>
            <h5>MÉRIDA YUCATÁN</h5>
            <div id='contador'></div>
          </div>
          <div id="redes-header" class="text-center">
            <img src="img/facebook.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/instagram.png" alt="">
            <img src="img/youtobe.png" alt="">
          </div>
        </div>
      </div>
      </section>
      <!--  /Informacion de contacto  -->
      <!-- Menu header-->

        <!-- Mega menu -->
        <section id="menu-sticky" class="sticky-container " data-sticky-container>
          <div class="data-sticky" data-sticky data-options="marginTop:0;" data-sticky-on="small"
          data-top-anchor="menu-sticky">
            <nav id="menu-central" class="row">
              <ul class="menu align-spaced show-for-small-only">
                <li><a href="#" data-toggle="off-canvas">Menu</a></li>
              </ul>
              <ul class="menu align-spaced dropdown show-for-medium" id="" data-dropdown-menu>
                <li><a href="#">conferencia</a>
                  <ul class="menu sub-menu-central">
                    <li><a href="">Programa a la vista</a></li>
                    <li><a href="">Programa Completo</a></li>
                    <li><a href="">Talleres</a></li>
                    <li><a href="">Patrocinadores y socios</a></li>
                    <li><a href="">Expositores</a></li>
                    <li><a href="">Congreso 2019</a></li>
                  </ul>
                </li>
                <li><a href="#">mérida yucatán</a>
                  <ul class="menu  sub-menu-central">
                    <li><a href="">La ciudad Blanca</a></li>
                    <li><a href="">Actividades locales</a></li>
                    <li><a href="">Hotel sede</a></li>
                    <li><a href="">Trasnsportación</a></li>
                    <li><a href="">Turismo en Mérida</a></li>
                  </ul>
                </li>
                <li><a href="#">registro</a>
                  <ul class="menu  sub-menu-central">
                    <li><a href="">Tipos de Registro</a></li>
                    <li><a href="">Precios</a></li>
                  </ul>
                </li>
              </ul>
            </nav>

          </div>
        </section>
        <!--   /Mega menu -->
      </header>
      <!--   /Menu header -->
      <!--   slider  -->
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <ul class="orbit-container" style="max-height:70vh">
          <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
          <li class="is-active orbit-slide">
            <img class="orbit-image" src="img/slider.jpg" alt="Space">
          </li>
          <li class="orbit-slide">
            <img class="orbit-image" src="img/slider.jpg" alt="Space">
          </li>
        </ul>
        <!--<nav class="orbit-bullets">
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
          <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>-->
      </div>
      <!--   /slider  -->
      <div class="row expanded align-middle align-justify">
        <div class="colum medium-6">
          <img src="img/barra.png" alt="">
        </div>
        <div class="colum medium-6 ">
          <h3 class="temas">TEMAS</h3>
        </div>
      </div>


      <!-- Eventos - talleres -->
      <section id="eventos">
        <div class="row collapse">
          <div class="small-12 medium-6 column">
            <div div class=“orbit” data-orbit>
              <div class="orbit-container">
                <div class="orbit-slide">
                  <img class="orbit-image" src="img/conferencias-magistrales-congreso.jpg" data-src="" alt="Space">
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
                    <h3>Visitas</h3>
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
            <div div class=“orbit” data-orbit>
              <div class="orbit-container">
                <div class="orbit-slide">
                  <img class="orbit-image" src="img/eventos-sociales.jpg" alt="Space">
                  <figcaption class="text-inf">
                    <p class="subtitulo">Expertos en los espacios públicos</p>
                    <h3>Actividades</h3>
                    <p>Descripción</p>
                   </figcaption>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- /Eventos - talleres -->

      <!--  Sección patrocinadores -->
      <section id="proveedores" data-margellan-target="proveedores">
        <div class="marcas-1">
          <div class="row text-center">
            <div class="column ">
              <h3 class="">PRESENTADO POR</h3>
            </div>
          </div>
          <div class="row text-center">
            <div class="column ">
              <img src="img/anpr-web.png" alt="">
            </div>
          </div>
        <div class="row">
          <div class="column text-center">
            <h4>CON EL APOYO DE</h4>
          </div>
        </div>
        <div class="row align-middle text-center apoyos">
          <div class="column">
            <img src="img/parques-de-mexico-logo.png" alt="" class="img-patrocinador">
            <img src="img/parques-alegres-logo.png" alt="" class="img-patrocinador">
            <img src="img/sedatu-logo.png" alt="" class="img-patrocinador">
            <img src="img/merida-logo.jpg" alt="" class="img-patrocinador">
          </div>
        </div>
      </div>
      <div class="marcas-2">
        <div class="row" id="patrocinadores">
          <div class="column text-center" >
            <h3 class="">¿INTERESADO EN SER PATROCINADOR/EXPOSITOR?</h3>
            <h4>PATROCINADORES</h4>
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
      <!--  //Sección patrocinadores -->
      <section id="contacto">
        <div class="row expanded">
          <div class="column medium-3 medium-offset-3 text-center">
            <div id="contenido-contacto">
              <h6>Centro Internacional de Congresos</h6>
              <h3>Mérida, Yucatán</h3>
              <div class="info-contacto">
                <i class="fi-telephone"></i> 99944060
                <i class="fi-mail"></i> info@anpr.org.mx
              </div>
              <span class="">
                Si tienes dudas o comentarios ¡Contáctanos!
              </span>
              <div>
                <form id="form-contacto" action="" method="post">
                  <input type="text" name="nombre" value="" placeholder="NOMBRE">
                  <input type="email" name="email" value="" placeholder="CORREO">
                  <textarea name="mensaje" rows="2" cols="80" placeholder="MENSAJE"></textarea>
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
      <!-- Registro Boletín -->
    <section id="registro">
      <h4 class="text-center">¡Mantente informado!</h4>
      <h6 class="text-center">Regístrate para obtener actualizaciones sobre descuentos para conferencias, promociones y noticias.</h6>
      <form action="" method="">
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
            <input type="button" name="" id="registro-horizontal" class="button btn-morado" value="REGISTRATE">
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
          <img src="img/facebook.png" alt="">
          <img src="img/twitter.png" alt="">
          <img src="img/instagram.png" alt="">
          <img src="img/youtobe.png" alt="">
        </div>
      </section>
      <!--fin redes sociales-->
      <!--   footer  -->
      <footer>
        <div class="row align-justify text-center">
          <div class="column small-6 medium-3 small-order-1 medium-order-1">
            <img src="img/congreso-parques-logo-gris.png" alt="">
          </div>
          <div class="column small-12 medium-6 small-order-3 medium-order-2">
            <h5>CONFERENCIA INTERNACIONAL DE PARQUES URBANOS</h5>
            <h4>25 AL 27 DE ABRIL 2018 - MÉRIDA, YUCATÁN, MÉXICO</h4>
            <h6>Presentado por La Asociación Nacional de Parques y Recreación México.</h6>
          </div>
          <div class="column small-6 medium-3 small-order-2 medium-order-3">
            <img src="img/parques-urbanos-logo-anpr.png" alt="">
          </div>
        </div>
        <!-- Ménu footer -->
        <div class="row" id="menu-footer">
          <div class="column">
            <ul class="menu vertical ">
              <li class="menu-text">contáctenos</a></li>
              <li><a href="#">términos de uso</a></li>
              <li><a href="#">política de privacidad</a></li>
              <li><a href="#">siga a ANPR</a></li>

              <li><a href="#">#CONGRESOPARQUES</a></li>
            </ul>
          </div>
          <div class="column ">
            <ul class="menu vertical">
              <li class="menu-text">conferencia</a></li>
              <li><a href="">programa a la vista</a></li>
              <li><a href="">programa completo</a></li>
              <li><a href="">talleres</a></li>
              <li><a href="">patrocinadores y socios</a></li>
              <li><a href="">expositores</a></li>
              <li><a href="">congreso 2019</a></li>
            </ul>
          </div>
          <div class="column">
            <ul class="menu vertical">
              <li class="menu-text">Mérida</li>
              <li><a href="">La ciudad Blanca</a></li>
              <li><a href="">actividades locales</a></li>
              <li><a href="">Hotel sede</a></li>
              <li><a href="">Transportación</a></li>
              <li><a href="">Turismo en mérida</a></li>
            </ul>
          </div>
          <div class="column">
            <ul class="menu vertical">
              <li class="menu-text">Registro</a></li>
              <li><a href="">Tipos de registro</a></li>
              <li><a href="">Precios</a></li>
            </ul>
          </div>
          <div class="column">
            <ul class="menu vertical">
              <li class="menu-text">Acerca de</a></li>
              <li><a href="">ANPR</a></li>
              <li><a href="">¿Por qué participar?</a></li>
              <li><a href="">Parques de México</a></li>
              <li><a href="">Parques Alegres</a></li>
              <li><a href="">Preguntas Frecuentes</a></li>
            </ul>
          </div>
        </div>
          <!-- //Ménu footer -->
      </footer>
      <div class="row column expanded align-center" id="pie">
        <p>© 2017 Asociación Nacional de Parques y Recreación</p>
      </div>
    </div>

  </div>
</div>


  <!--   /footer  -->
    <!-- cdn de belazy para la carga de imagenes-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
    var bLazy = new Blazy({
      selector:'img'
      });
      </script>
  </body>
</html>
