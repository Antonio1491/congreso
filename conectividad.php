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
    <title>Conectividad</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="conectividad">
    <div class=" header header-1">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">CONECTIVIDAD</h3>
        </div>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column">
        <p><strong class="letra-capital">E</strong>l aeropuerto internacional de Mérida (MID) está ubicado a
          unos 15 minutos del centro de la ciudad. Otras alternativas son; llegar al aeropuerto internacional
          de Cancún (CUN) y tomar un autobús a Mérida (el tiempo de traslado es de cuatro horas aproximadamente)
          o hacer una escala en el aeropuerto internacional de la Ciudad de México (MEX) llegando a Mérida en un
          vuelo con duración de una hora y media aproximadamente.</p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column">
        <h4 class="text-center">CONEXIONES NACIONALES</h4>
      </div>
    </div>
    <div class="row">
      <div class="column medium-12">
        <figure class="carga">
          <img data-src="img/vuelos-1.jpg" alt="Vuelos Nacionales" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <br>
    </div>
    <div class="row fila-espacio">
      <div class="column">
        <h4 class="text-center">CONEXIONES INTERNACIONALES</h4>
      </div>
    </div>
    <div class="row">
      <div class="column medium-12">
          <figure class="carga">
            <img data-src="img/vuelos-2.jpg" alt="Vuelos Internacionales" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
          </figure>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
