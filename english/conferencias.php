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
    <title>KEYNOTE SPEAKERS</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-2">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">KEYNOTE SPEAKERS</h3>
        </div>
      </div>
    </div>
    <div class="contenido">
      <div class="row">
        <div class="column">
          <p><span class="letra-capital">T</span>he Keynote presentations will be the moment in which all the attendees to the congress will meet in the same room to hear the experts talk about urban parks and subjects of common interest for our cities. </p>
        </div>
      </div>
      <div class="row align-center fila-espacio fila-espacio2">
      <div class="columns small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/martha-fajardo.png" alt="Martha Fajardo">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales">
        <div class="titulo-conferencia ">
          <h6 class="text-center">CITY AND PARKS FOR LIFE</h6>
        </div>
        <h5 class="text-center">Martha Fajardo</h5>
        <h6 class="text-center">Grupo Verde - Colombia</h6>
      </div>
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/mario-shejtan.png" alt="Mario Shejtan">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">GREAT PARKS AND GREAT CITIES</h6>
        </div>
        <h5 class="text-center">Mario Schjetnan</h5>
        <h6 class="text-center">Grupo de Diseño Urbano - México</h6>
      </div>

    </div>
    <div class="row align-center fila-espacio2">
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/robert-hammond.png" alt="Robert Hammond">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">BUILDING A PARK IN THE SKY</h6>
        </div>
        <h5 class="text-center">Robert Hammond</h5>
        <h6 class="text-center">Executive Director, Friends of the High Line</h6>
      </div>
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/barbara-tulipane.png" alt="Barbara Tulipane">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">Empowering Parks for the Future </h6>
        </div>
        <h5 class="text-center">Barbara Tulipane</h5>
        <h6 class="text-center">Directora Ejecutiva, NRPA - E.E.U.U.</h6>
      </div>
    </div>
    <div class="row align-center fila-espacio2">
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/peter.png" alt="Peter Harnik">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">INNOVATIVE PARKS FOR EMERGING CITIES</h6>
        </div>
        <h5 class="text-center">Peter Harnik</h5>
        <h6 class="text-center">Centro de Excelencia de Parques - E.E.U.U.</h6>
      </div>
      <div class="column small-9 medium-3 large-2">
        <!--<figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/jorge-perez.png" alt="Jorge Pérez Jaramillo">
        </figure>-->
      </div>
    <!--  <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <h4 class="text-center">MEDELLIN DESDE LOS ESPACIOS PÚBLICOS</h4>
        <h5 class="text-center">Jorge Pérez Jaramillo</h5>
        <h6 class="text-center">Ex Director del Dpto. Administrativo de Planeación de Medallín - Colombia </h6>
      </div>-->
    </div>
    <div class="row align-center fila-espacio">
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/tom.png" alt="Tom O-Rourke">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">PARKS AND RECREATION, HOW TO BE RELEVANT IN THE PRESENT?</h6>
        </div>
        <h5 class="text-center">Tom O'Rourke</h5>
        <h6 class="text-center">Director de la escuela de directores de la NRPA</h6>
      </div>
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/inaki-echeverria.png" alt="Marinela Servitje">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">THE PUBLIC SPACE AND THE PARKS AS A MULTIFUNCTIONAL METROPOLITAN INFRASTRUCTURE</h6>
        </div>
        <h5 class="text-center">Iñaki Echeverria</h5>
        <h6 class="text-center">Director General Iñaki Echeverria México</h6>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
