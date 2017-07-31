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
    <title>URBAN PARKS EXPO</title>
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
          <h3 class="titulos">URBAN PARKS EXPO</h3>
        </div>
      </div>
    </div>
    <div class="row contenido expo">
      <div class="column">
        <p><span class="letra-capital">P</span>articipate in the most specialized commercial exhibition of the industry of urban parks and public space in Mexico and Latin America.</p>
          <ul>
            <li>Explore the market and observe the latest trends.</li>
             <li>Exchange experiences with expert providers and conference speakers.</li>
             <li>Collect information.</li>
            <li>Know what your competitors are doing.</li>
             <li>Learn the latest sales and promotion techniques.</li>
             <li>Compare the quality, price and performance of the marketing mix.</li>
             <li>Attend keynote presentations, educational sessions and workshops.</li>
             <li>Visit local parks.</li>
             <li>Enjoy the splendid tourism of Merida.</li>
          </ul>
        <strong>For 2 days you will have access to:</strong>
        <ul>
          <li>More than 6,000 m<sup>2</sup> of exhibition</li>
          <li>More than 100 exhibitors</li>
          <li>Business area</li>
        </ul>
        <p>Meet the best manufacturers in Mexico and the United States of:</p>
      </div>
    </div>
    <div class="row">
      <div class="column medium-3">
        <ul>
          <li>Playground equipment</li>
          <li>Facility materials </li>
          <li>Dog Parks</li>
          <li>Surfacing</li>
          <li>Lighting </li>
          <li>Sports equipment</li>
          <li>Water games</li>
          <li>Skateboards and bicycles</li>
        </ul>
      </div>
      <div class="column medium-3">
        <ul>
          <li>Software</li>
          <li>Sports equipment</li>
          <li>Architects</li>
          <li>National and state parks</li>
          <li>Maintenance products</li>
          <li>And much more.</li>
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
          <h5>MAP OF “URBAN PARKS EXPO”</h5>
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
