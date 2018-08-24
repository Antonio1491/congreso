<?php include('assets/contador.php') ?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La única exposición mexicana especializada en la industria de los parques
    urbanos y la recreación reunirá a más de 100 empresas líderes en el mercado.">
    <title>Expo Parques Urbanos | Congreso Internacional de Parques Urbanos</title>
    <?php  require("assets/head_common.php");
      // include("datos_conexion.php")
    ?>

    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">

    <div class="row  expanded header_expo">
        <div class="content_header_expo">
          <!-- <h1 class="titulos">Expo Parques Urbanos 2019</h1> -->
          <figure class="expo_logo">
            <img src="img/expo_parques_logo.png" alt="">
          </figure>
        </div>
    </div>
    <div class="row contenido expo ">
      <div class="column text-center">
        <h5>La única exposición mexicana especializada de la industria reunirá a más de
          <span style="font-size:1.4em;">50</span> empresas líderes en el mercado.</h5>
        <p>Invierte en el foro de negocios en donde los principales tomadores de
          decisiones en México se reunirán en torno a la industria de los parques
          urbanos y la recreación. </p>
      </div>
    </div>
    <div class="row column">
      <p><span class="letra-capital">P</span>articipa en la exposición comercial más especializada
        de la industria de los parques urbanos y espacios públicos en México y Latinoamérica.</p>
    </div>
    <div class="row">
      <div class="column medium-6">
        <ul>
          <li>Explora el mercado y observe las últimas tendencias.</li>
           <li>Intercambia experiencias con proveedores y congresistas expertos.</li>
           <li>Recopila información.</li>
          <li>Manténganse al tanto de las innovaciones de los producto y la industria.</li>
           <li>Conoce los productos más innovadores de la industria.</li>
           <li>Conoce qué hacen los competidores.</li>
         </ul>
      </div>
      <div class="column medium-6">
        <ul>
          <li>Aprende las últimas técnicas de ventas y promoción.</li>
           <li>Compara la calidad, el precio y el rendimiento de la mezcla de marketing.</li>
           <li>Asiste a las conferencias magistrales, sesiones educativas y talleres vivenciales.</li>
           <li>Visita parques locales.</li>
           <li>Disfruta del espléndido turismo de Mérida.</li>
        </ul>
      </div>
    </div>
    <div class="row column align-center">
        <h5>Conoce a los mejores fabricantes de México y Estados Unidos de:</h5>
    </div>
    <hr>
    <div class="row" >
        <div  id="cotizar" >
          <div class="container_cotizar">
            <div class="item_expo">
              <ul>
                <li>Juegos Infantiles</li>
                <li>Mobiliario Urbano</li>
                <li>Parques Caninos</li>
                <li>Superficies</li>
                <li>Sombras y Velarias</li>
                <li>Iluminación</li>
                <li>Equipamiento Deportivo</li>
                <li>Juegos de Agua</li>
                <li>Parques para patinetas y bicicletas</li>
                <li>Software especializado</li>
                <li>Productos de Recreación</li>
                <li>Despachos de Diseño</li>
                <li>Parques Nacionales</li>
                <li>Equipo de Mantenimiento</li>
                <li>Y mucho más..</li>
              </ul>
            </div>

            <div class="item_expo">
              <a href=""><img src="img/btn_cotizar_stand.png" alt="" class="btn_cotizar"></a>
            </div>
          </div>

        </div>

        <div id="galeria-expo" class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-1.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-2.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-3.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-4.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-5.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-6.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-7.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/expo-8.jpg" alt="Space">
            </li>

          </ul>
          <!-- <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="4"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="5"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="6"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="7"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="8"><span class="show-for-sr">Fourth slide details.</span></button>
          </nav> -->
        </div>
      <!-- </div> -->

    </div>

      <!-- <div class="column small-12 medium-5">

          <div class="card-info-content">
            <ul class="pricing-table no-bullet text-center">
                <li class="title">Expo</li>
                <li class="price">$100.00  <span class="pesos">MXN</span></li>
                <li class="fecha-precio">* Precio fijo</li>
                <li>Conferencias Magistrales <br><i class="fi-x"></i></li>
                <li>Sesiones Educativas <br><i class="fi-x"></i></li>
                <li>Expo Comercial Parques Urbanos<br><i class="fi-check"></i></li>
                <li>Eventos Sociales <br><i class="fi-x"></i></li>
                <li>Talleres <br><i class="fi-x"></i></li>
                <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
          </div>

      </div> -->
    </div>
    <div class="row">
      <div class="column hide-for-small-only medium-6">

      </div>
    </div>


  <!-- <?php
      // $sql = "SELECT * FROM expositores";
      // $datosExpositor = $conexion->desplegarExpositores($sql);
   ?>
  <section id="directorio_expositores" class="row align-middle">
    <div class="column small-12 medium-12">
      <?php  foreach ($datosExpositor as $dato) {

        ?>
      <article class="expositor">
        <div class="logotipo">
          <?php echo " <img src='img/expositores/".$dato['logotipo']."'>"; ?>
        </div>
        <div class="contenido_expositor">
            <header>
              <div class="datos_expositor">
                <h4><?php echo $dato['nombre_expositor']; ?></h4>
                <h5>Stand <?php echo $dato['n_stand']; ?></h5>
                <p><?php echo $dato['direccion']; ?></p>
              </div>
              <div class="contacto_expositor">
                <p><?php echo $dato['contacto']; ?></p>
              </div>
            </header>

          <section>
            <p><?php echo $dato['descripcion']; ?></p>
          </section>

        </div>

      </article>
      <?php
        }
       ?> -->
    </div>
  </section>

</main>


<?php include'assets/footer.php'; ?>
