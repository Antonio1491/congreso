<?php include('../assets/contador.php') ?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"                content="http://congresoparques.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"  content="Congreso Parques 2019" />
    <meta property="og:description" content="Un evento de alcance internacional, que permitirá a profesionales de la industria de los parques,
    tener una experiencia única de aprendizaje y formación." />
    <meta property="og:image"              content="https://www.congresoparques.com/img/fb_congreso.png" />
    <title>Congreso Internacional de Parques Urbanos</title>
    <?php require("assets/head_common.php") ?>
  </head>
  <body onload="countdown('contador'), countdown('contador-small')">
      <!--=====================  Portada Paisaje  ========================================-->
    <header id="portada" class="hide-for-small-only">
      <?php include'assets/menu.php'; ?>
      <div class="contenido_portada">
        <div class="item_contenido_portada fecha">
          <div class="text-center">
            <h4 id="">14-17 MAY 2019</h4>
            <h5>MONTERREY, NUEVO LEÓN, MÉXICO</h5>
          </div>

        </div>
        <div class="item_contenido_portada">
          <!-- <h4>The city of Moutains is </h4>
          <h4>waiting for you</h4> -->
          <div class="row column align-center">
            <a href="assets/ProgramaPreliminar2019.pdf">
              <img src="img/DOWLOAD.png" class="programa-header">
            </a>
          </div>
        </div>
        <div class="item_contenido_portada">
          <a href="#" data-open="exampleModal1" title="Ver Video"><img src="../img/btn-play.png" alt="" onclick="ejecutar()"></a>
        </div>
        <div class="item_contenido_portada botones">
          <div class="contador">
            <div id='contador'></div>
          </div>

          <!-- <div class="">
            <a href="#" class="btn_verde">convertirce <span>en patrocinador</span></a>
          </div> -->
        </div>
      </div>
    </header>

  <!--   modal   -->
    <div class="small reveal" id="exampleModal1" data-reveal>
      <iframe width="100%" height="435" src="https://www.youtube.com/embed/ATSFDG4uaQc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <!-- Fin modal -->

  <!--=================   cinta patrocinadores   =======================-->
  <?php include('assets/cinta_patrocinadores.php') ?>


  <!--======  diseño pra móviles   ======-->
  <section class="movil show-for-small-only" >
    <div class="header_movil item_movil">
      <figure class="logo_movil">
        <img src="../img/logotipo/anpr.png" alt="">
      </figure>
    </div>
    <div class="item_movil icon">
      <a href="conferenciasMagistrales.php" target="_blank">
        <figure class="icon_movil">
          <img src="img/i_conf.png" alt="">
        </figure>
        <figcaption class="titulo_movil">
          <h2>Keynotes</h2>
          <!-- <h1>Magistrales</h1> -->
        </figcaption>
      </a>
    </div>
    <div class="item_movil icon">
      <a href="sesionesEducativas.php" target="_blank">
        <figure class="icon_movil">
          <img src="img/i_sesiones_m.png" alt="">
        </figure>
        <figcaption class="titulo_movil">
          <h2>Educational</h2>
          <h1>Sesions</h1>
        </figcaption>
      </a>
    </div>
    <div class="item_movil icon">
      <a href="talleres.php" target="_blank">
        <figure class="icon_movil">
          <img src="img/i_talleres_m.png" alt="">
        </figure>
        <figcaption class="titulo_movil">
          <h2>Workshops</h2>
          <!-- <h1>Vivenciales</h1> -->
        </figcaption>
      </a>
    </div>
    <div class="item_movil icon">
      <a href="expoParques.php" target="_blank">
        <figure class="icon_movil">
          <img src="img/i_expo_parques_m.png" alt="">
        </figure>
        <figcaption class="titulo_movil">
          <h2>Expo</h2>
          <h1>Parques</h1>
        </figcaption>
      </a>
    </div>
    <div class="item_movil icon">
      <a href="eventosSociales.php" target="_blank">
        <figure class="icon_movil">
          <img src="img/i_eventos.png" alt="">
        </figure>
        <figcaption class="titulo_movil">
          <h2>Eventos</h2>
          <h1>Sociales</h1>
        </figcaption>
      </a>
    </div>
    <div class="item_movil icon">
      <a href="inscripcion.php" target="_blank">
        <figure class="icon_movil">
          <img src="img/i_costos_m.png" alt="">
        </figure>
        <figcaption class="titulo_movil">
          <h2>Costo de</h2>
          <h1>Inversión</h1>
        </figcaption>
      </a>
    </div>
    <div class="item_movil footer_movil">
      <img src="img/i_fecha.png" alt="">
    </div>
    <div class="">

    </div>
    <div class="item_movil ">
      <img src="img/i_anpr_bc.png" alt="">
    </div>

  </section>
  <!-- ============= secciones  ========== -->
  <section id="secciones" class="hide-for-small-only">
    <div class="row">
      <h2>2° INTERNATIONAL CONGRESS OF URBAN PARKS</h2>
    </div>
    <div class="row">
      <p>The International Congress of Urban Parks is an event specialized in urban parks and public spaces that aims to gather and train professionals, public officials, decision makers, industry suppliers, students and non-governmental organizations in one place.
Simultaneously Expo Parques will take place, a space of 6,000 m2 of exhibition of products and services related to the parks and recreation industry. For 4 days, the Congreso Parques offers a unique learning experience.</p>
    </div>
    <div class="secciones_icon">
      <figure>
        <a href="conferenciasMagistrales.php">
          <img src="../img/i_conferencias.png" alt="">
          <figcaption>
            <h2>Keynotes</h2>
            <!-- <h2>Magistrales</h2> -->
          </figcaption>
        </a>
      </figure>
      <figure>
        <a href="sesionesEducativas.php">
          <img src="../img/i_sesiones.png" alt="">
          <figcaption>
            <h1>Educational</h1>
            <h2>Sesions</h2>
          </figcaption>
        </a>
      </figure>
          <figure>
            <a href="talleres.php">
              <img src="../img/i_talleres.png" alt="">
              <figcaption>
                <h2>Workshops</h2>
                <!-- <h2>Vivenciales</h2> -->
              </figcaption>
            </a>
          </figure>
          <figure>
            <a href="expoParques.php">
              <img src="../img/i_expo_parques.png" alt="">
              <figcaption>
                <h1>Expo</h1>
                <h2>Parques</h2>
              </figcaption>
            </a>
          </figure>
          <figure>
            <a href="eventosSociales.php">
              <img src="../img/i_eventos_sociales.png" alt="">
              <figcaption>
                <h1>Social</h1>
                <h2>Events</h2>
              </figcaption>
            </a>
          </figure>
    </div>
    <div class="row align-center">
      <a href="congresoParques.php" class="btn_conocemas ">Learn more</a>
    </div>

    </section>
    <!-- ======================  Conferencistas magistrales ============== -->

    <section id="seccion_magistrales" class="hide-for-small-only">
      <div class="row">
        <h3 class="titulo_verde">Speakers</h3>
      </div>
      <div class="magistrales_icon">
        <figure class="contenido_conferencista">
          <a href="#">
            <img src="../img/carlos_carsolio.png" alt="">
            <figcaption>
              <h1>Carlos Carsolio</h1>
              <h2>Fundador, Carsolio Esculturas</h2>
              <h3>Ciudad de México, México</h3>
            </figcaption>
          </a>
        </figure>
        <figure class="contenido_conferencista">
          <a href="#">
            <img src="../img/macarena_rau.png" alt="">
            <figcaption>
              <h1>Macarena Rau</h1>
              <h2>Presidenta, Asociación Internacional CPTED</h2>
              <h3>Santiago, Chile</h3>
            </figcaption>
          </a>
        </figure>
        <figure class="contenido_conferencista">
          <a href="#">
            <img src="../img/robert_zarr.png" alt="">
            <figcaption>
              <h1>Dr. Robert Zarr </h1>
              <h2>Fundador y Director Médico, Park Rx America</h2>
              <h3>Washington DC, Estados Unidos </h3>
            </figcaption>
          </a>
        </figure>
        <figure class="contenido_conferencista">
          <a href="">
            <img src="../img/tatiana_bilbao.png" alt="">
            <figcaption class="contenido_conferencista">
              <h1>Tatiana Bilbao</h1>
              <h2>Directora, Tatiana Bilbao Estudio</h2>
              <h3>Ciudad de México, México</h3>
            </figcaption>
          </a>
        </figure>
      </div>
      <div class="row align-center">
        <a href="conferenciasMagistrales.php" class="btn_azul">Meet all the speakers</a>
      </div>

    </section>
    <!--========== Boletos  =============-->
    <section id="boletos-contenedor" class="hide-for-small-only">
      <div class="row">
          <h3 class="subtitulo_mb">Registration</h3>
      </div>
      <div class="row expanded boletos">
        <div class="align-center">
          <a href="inscripcion.php"><img src="img/precios_actuales.png" alt=""></a>
        </div>
        <!-- <div class="boleto">
          <div class="titulo_boleto">
            Profesional
          </div>
          <div class="precio_boleto">
            $4,500
          </div>
          <span>No Miembros</span>
          <div class="precio_boleto_miembros">
              $3,150
          </div>
          <span>Miembros</span>

          <div class="btn_boleto">
            <a href="#">Ver Más</a>
          </div>
        </div>

        <div class="boleto">
          <div class="titulo_boleto">
            Joven profesional
          </div>
          <div class="precio_boleto">
            $3,600
          </div>
          <span>No Miembros</span>
          <div class="precio_boleto_miembros">
              $2,520
          </div>
          <span>Miembros</span>

          <div class="btn_boleto">
            <a href="#">Ver Más</a>
          </div>
        </div>

        <div class="boleto">
          <div class="titulo_boleto">
            Estudiante
          </div>
          <div class="precio_boleto">
            $2,000
          </div>
          <span>No Miembros</span>
          <div class="precio_boleto_miembros">
              $1,700
          </div>
          <span>Miembros</span>

          <div class="btn_boleto">
            <a href="#">Ver Más</a>
          </div>
        </div>

        <div class="boleto">
          <div class="titulo_boleto">
            Expo
          </div>
          <div class="precio_boleto">
            $200
          </div>
          <span>No Miembros</span>
          <div class="precio_boleto_miembros">
              $200
          </div>
          <span>Miembros</span>

          <div class="btn_boleto">
            <a href="#">Ver Más</a>
          </div>
        </div>

        <div class="boleto">
          <div class="titulo_boleto">
            Acompañante
          </div>
          <div class="precio_boleto">
            $3,150
          </div>
          <span>No Miembros</span>
          <div class="precio_boleto_miembros">
              $2,363
          </div>
          <span>Miembros</span>

          <div class="btn_boleto">
            <a href="#">Ver Más</a>
          </div>
        </div>-->
      </div>

    </section>

    <section id="seccion_mapa" class="hide-for-small-only">
      <div class="row expanded">
        <div class="column medium-4 contenido_mapa">
          <div class="item_contenido_mapa">
            <h3 class="titulo_verde">Location</h3>

              <span>CINTERMEX</span><br>
              <p>CONVENTION CENTER<br>
              Parque Fundidora
            </p>
          </div>
          <div class="item_contenido_mapa">
            <img src="../img/cintermex_logo.png" alt="">
            <img src="../img/fundidora_logo.png" alt="">
          </div>
        </div>
        <div class="column medium-8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7191.507337009546!2d-100.28561921134552!3d25.679459210524172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662942a8d42b18f%3A0x1eee54a9dfbc9332!2sCintermex!5e0!3m2!1ses!2smx!4v1528396562531" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <!--====== Registro Boletín =====-->
    <section id="registro" class="hide-for-small-only">
      <h4 class="text-center">Stay Informed!</h4>
      <p class="text-center">Sign up to get updates on discounts for the congress, promotions and news.</p>
      <form action="https://formspree.io/soporte@anpr.org.mx" method="POST">
        <fieldset>
          <div class="row align-justify formulario-1">
            <div class="column small-12 medium-3 small-order-1">
              <input type="text" name="Nombre" class="">
              <label for="" class="text-center">Name</label>
            </div>
            <div class="column small-12 medium-3 small-order-2">
              <input type="text" name="Apellido">
              <label for="" class="text-center">Lastname</label>
            </div>
            <div class="column small-12 medium-3 small-order-3">
              <input type="text" name="Email"></input>
              <label for="" class="text-center">E-mail</label>
            </div>
            <div class="column small-12 medium-3 text-center small-order-4">
              <input type="submit" name="" id="registro-horizontal" class="button btn_verde_registro" value="Sing Up">
            </div>
          </div>
        </fieldset>
      </form>
      <div class="row column">
        <span class="nota-boletin">*We will not share your information and you can cancel your subscription at any time.</span>
      </div>
    </section>
    <section id="paisaje" class="hide-for-small-only">

    </section>


    <div class="hide-for-small-only">
      <?php include'assets/footer.php'; ?>

    </div>
