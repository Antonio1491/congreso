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

<body onload="countdown('contador')">
  <header class="header_paginas header_expo">
    <div class="hide-for-small-only">
      <?php include'assets/menu.php'; ?>
    </div>
    <div class="figure_header">
      <figure class="expo_logo">
        <img src="img/expo_parques_logo.png" alt="">
      </figure>
    </div>
  </header>
  <main>
    <div class="row ">
      <div class="column text-center">
        <p class="descripcion_principal subtitulo">Expo Parques es el foro de negocios que reunirá a más de 80 empresas líderes en el mercado, con la finalidad de brindarles a nuestros visitantes los mejores productos y servicios para el diseño, la construcción y equipamiento del espacio público. </p>
        <p>Participa e invierte en la exposición comercial más especializada de la industria de los parques urbanos y espacios públicos en México y Latinoamérica donde encontrarás a los principales tomadores de decisiones además de las tendencias en equipamiento de espacio público. </p>
      </div>
    </div>
    <div class="row">
      <div class="column small-12 medium-6">
        <ul class="lista_vineta">
          <li><span>Explora el mercado.</span></li>
           <li><span>Conoce proveedores.</span></li>
           <li><span>Intercambia experiencias.</span></li>
          <li><span>Conoce las tendencias y productos innovadores.</span></li>
           <li><span>Compara calidad, precio y rendimiento.</span></li>
         </ul>
      </div>
      <div class="column hide-for-small-only medium-6">
          Durante dos días podrás tener acceso a:
        <ul class="lista_vineta">
          <li><span>Más de más de 6,000 m2 de exposición.</span></li>
           <li><span>Área de negocios.</span></li>
           <li><span>Muestras comerciales.</span></li>
           <li><span>Glass room.</span></li>
           <li><span>Agenda de negocios.</span></li>
        </ul>
      </div>
    </div>
    <div class="row column align-center">
        <h5 class="subtitulo">Conoce a los mejores fabricantes de México y el mundo de:</h5>
    </div>
    <hr>
    <div class="row hide-for-small-only" >
        <div  id="cotizar">
          <div class="container_cotizar">
            <div class="item_expo">
              <ul >
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
                <li>Y mucho más...</li>
              </ul>
            </div>

            <div class="item_expo">
              <a href="https://preregistrate.mx/congresoparques/2019/plano/" target="
              "><img src="img/btn_cotizar_stand.png" alt="" class="btn_cotizar"></a>
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


    <!--<div class="row column">
      <h4 class="subtitulo">Sé expositor</h4>
    </div>
     <div class="row">
      <div class="column hide-for-small-only medium-4">
        <figure>
          <img src="img/plano_expo.png" alt="">
        </figure>
      </div>
      <div class="column medium-8">
        <figure>
          <img src="img/tabla_precio_expo.png" alt="">
        </figure>
        <p>Aparta tu espacio con el 30%.</p>
        <p>Si liquidas antes del 31 de diciembre de 2018 15% de descuento. </p>
        <p>*Precios en pesos (moneda nacional mexicana) por m² más IVA. </p>

      </div>
    </div> -->
    <div class="cinta_azul">
      <div class="row">
        <div class="column small-12 medium-4 text-center">
          <h4 class="subtitulo_bc">Agenda de negocios</h4>
          <figure>
            <img src="img/agenda_negocios.png" alt="" class="actividades_expo">
          </figure>

        </div>
        <div class="column small-12 medium-8">
          <p>Adquiere un stand de 36 m² o mayor y te programaremos una agenda de entrevistas con los parques y compradores más importantes de México.</p>
          <ul class="color_white">
            <li>2 días de encuentros comerciales.</li>
            <li>3 horas de trabajo.</li>
            <li>15 minutos por comprador.</li>
          </ul>

        </p>
            <p>Acércate, vende y convence.<br>
            Informes y ventas: comercial@anpr.org.mx
            </p>
        </div>
      </div>
      </div>

      <div class="class_room">
        <div class="row">
          <div class="column small-12 medium-4 text-center">
            <h4 class="subtitulo">Glass room</h4>
            <figure>
              <img src="img/i_glass_room.png" alt="" class="actividades_expo">
            </figure>
            <br>
            Costo por sesión comercial: <br>
            $20,000 pesos más IVA <br>

          </div>
          <div class="column small-12 medium-8">
            <div class="row column">
              <p><span class="negritas">¡Un gran salón transparente te espera dentro de Expo Parques!</span></p>
              <p>En él podrás encontrar desde sesiones educativas con las que cuenta el programa del congreso y sesiones comerciales. En esta convivencia comercial, la industria tendrá la oportunidad de compartir la relevancia de sus productos y servicios; la oportunidad ideal para conocer de cerca de los fabricantes y distribuidores más especializados.
              </p>
            </div>
                <p>Superficie total: 132 m²<br>
                Capacidad: 90 personas<br>
                Duración de la ponencia: 25 minutos ideal para: <br>
                <ul>
                  <li>Presentación de productos.</li>
                  <li>Nuevos proyectos.</li>
                  <li>Demostración de maquinaria</li>
                  <li>Presentación corporativa</li>
                  <li>Oportunidades de distribución</li>
                </ul>
              </p>
              *Precios en pesos (moneda nacional mexicana) por m² más IVA. <br>
              Informes y ventas: comercial@anpr.org.mx
          </div>
        </div>
      </div>

      <div class="cinta_azul">
        <div class="row">
          <div class="column small-12 medium-4 text-center">
            <h4 class="subtitulo_bc">Zona de recreación</h4>
            <figure>
              <img src="img/area_juegos.png" alt="" class="actividades_expo">
            </figure>

          </div>
          <div class="column medium-8">
            <p><span class="bc">¡No podíamos dejarte sin un área de recreación!</span></p>
            <p>Dentro de Expo Parques, encontrarás un área especial donde se llevarán a cabo diversas actividades de convivencia, pero sobre todo, ¡mucha diversión y entretenimiento! Contaremos con golfito, mesas de ping pong, mesas de futbolitos, badmintón y más.  También contaremos con salas launge para pláticas de negocios entre participantes y expositores. </p>
          </div>
        </div>
        </div>

        <div class="beer_party">
          <div class="row">
            <div class="column small-12 medium-4 text-center">
              <h4 class="subtitulo">Beer Party </h4>
              <figure>
                <img src="img/beer_party.png" alt="" class="actividades_expo">
              </figure>
            </div>
            <div class="column small-12 medium-8 vertical_contenido">
              <div class="row column"><br>
                <p>Dentro del área de Expo Parques podrás acceder a la Beer Party, evento que no debes perderte en compañía de profesionales de la industria ¡Queremos verte ahí! Te esperamos.</p>
                <p>Jueves 17 de mayo a las 19:00 horas
                  <br>Duración: 1 hora y media.
                  </p>
                <p>*Evento exclusivo para participantes de Congreso Parques* </p>
            </div>
          </div>
        </div>
      </div>


  </section>

</main>


<?php include'assets/footer.php'; ?>
