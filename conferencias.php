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
    <title>Conferencias Magistrales</title>
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
          <h3 class="titulos">CONFERENCIAS MAGISTRALES</h3>
        </div>
      </div>
    </div>
    <div class="contenido">
      <div class="row">
        <div class="column">
          <p><span class="letra-capital">L</span>as Conferencias Magistrales serán el momento en el que todos los
            asistentes al congreso se reunirán en una misma sala para escuchar
            hablar a los expertos sobre los parques urbanos y temas de interés
            común para nuestras ciudades. </p>
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
          <h6 class="text-center">CIUDAD Y PARQUES PARA LA VIDA</h6>
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
          <h6 class="text-center ">GRANDES PARQUES Y GRANDES CIUDADES</h6>
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
          <h6 class="text-center ">CONSTRUYENDO UN PARQUE EN EL CIELO</h6>
        </div>
        <h5 class="text-center">Robert Hammond</h5>
        <h6 class="text-center">High Line - E.E.U.U.</h6>
      </div>
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/barbara-tulipane.png" alt="Barbara Tulipane">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">COMO TRANSFORMAR UN PAÍS A TRAVÉS DE SUS PARQUES URBANOS</h6>
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
          <h6 class="text-center ">PARQUES INNOVADORES PARA CIUDADES EMERGENTES</h6>
        </div>
        <h5 class="text-center">Peter Harnik</h5>
        <h6 class="text-center">The Trust for Public Land - E.E.U.U.</h6>
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
          <h6 class="text-center ">PARQUES Y RECREACIÓN, ¿CÓMO SER RELEVANTES EN EL PRESENTE?</h6>
        </div>
        <h5 class="text-center">Tom O'Rourke</h5>
        <h6 class="text-center">Director Ejecutivo Charleston Country Park - E.E.U.U</h6>
      </div>
      <div class="column small-9 medium-3 large-2">
        <figure class="carga">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="img/conferencistas/inaki-echeverria.png" alt="Marinela Servitje">
        </figure>
      </div>
      <div class="column small-10 medium-3 large-4 contenido-magistrales ">
        <div class="titulo-conferencia">
          <h6 class="text-center ">EL ESPACIO PÚBLIC Y LOS PARQUES COMO INFRAESTRUCTURA METROPOLITANA MULTIFUNCIONAL</h6>
        </div>
        <h5 class="text-center">Iñaki Echeverria</h5>
        <h6 class="text-center">Director General Iñaki Echeverria México</h6>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
