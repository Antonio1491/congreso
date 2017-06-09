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
    <title>Expo Comercial Parques Urbanos</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-2">
      <div class="row">
        <div class="column text-center">
          <h3 class="titulos">EXPO PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido expo">
      <div class="column">
        <p><span class="letra-capital">P</span>articipa en la Exposición Comercial más especializada de la industria de los Parques Urbanos
          y Espacios Públicos en México y Latinoamérica.</p>
          <ul>
            <li>Explore el mercado y observe las últimas tendencias.</li>
             <li>Intercambie  experiencias con proveedores y congresistas expertos.</li>
             <li>Recopile información.</li>
            <li>Manténganse al tanto de las innovaciones de los producto y la industria.</li>
             <li>Conozca qué hacen los competidores.</li>
             <li>Aprenda las últimas técnicas de ventas y promoción. </li>
            <li>Compare la calidad, el precio y el rendimiento de la mezcla de marketing.</li>
             <li>Asista a las conferencias magistrales, sesiones educativas y talleres vivenciales.</li>
             <li>Visite la industria y los parques locales.</li>
             <li>Disfrute del esplendido turismo de Mérida.</li>
          </ul>
        <strong>Durante 2 días tendrás acceso a:</strong>
        <ul>
          <li>Más de 6,000 m<sup>2</sup> de exposición</li>
          <li>Más de 100 Expositores</li>
          <li>Área de negocios</li>
        </ul>
        <p>Conoce a los mejores fabricantes de México y Estados Unidos de:</p>
      </div>
    </div>
    <div class="row">
      <div class="column medium-3">
        <ul>
          <li>Juegos Infantiles</li>
          <li>Mobiliario Urbano</li>
          <li>Parques Caninos</li>
          <li>Superficies</li>
          <li>Sombras y Velarias</li>
          <li>Iluminación</li>
          <li>Equipamiento Deportivo</li>
          <li>Juegos de Agua</li>
        </ul>
      </div>
      <div class="column medium-3">
        <ul>
          <li>Parques para patinetas y bicicletas</li>
          <li>Software especializado</li>
          <li>Productos de Recreación</li>
          <li>Despachos de Diseño</li>
          <li>Parques Nacionales</li>
          <li>Equipo de Mantenimiento</li>
          <li>Y mucho más…</li>
        </ul>
      </div>
      <div class="column medium-6">
        <div id="galeria-expo" class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
              <img class="orbit-image" src="img/galeria/01.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/02.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/03.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/04.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/05.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/06.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/07.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/08.jpg" alt="Space">
            </li>
            <li class="orbit-slide">
              <img class="orbit-image" src="img/galeria/09.jpg" alt="Space">
            </li>
          </ul>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="4"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="5"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="6"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="7"><span class="show-for-sr">Fourth slide details.</span></button>
            <button data-slide="8"><span class="show-for-sr">Fourth slide details.</span></button>
          </nav>
        </div>
      </div>
    </div>
      <div class="row text-center fila-espacio">
        <div class="column">
          <h5>PLANO DE LA "EXPO PARQUES URBANOS"</h5>
        </div>
      </div>
      <div class="row">
        <figure class="carga">
          <img data-src="img/croquis.png" alt="Croquis del recinto" class="croquis" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
