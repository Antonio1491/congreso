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
<main class="">
  <article class="">
    <div class=" header header-expo">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EXPO COMERCIAL PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <div class="action-2 text-center">
      <div class="row align-spaced">
        <div class="column">
          <a href="visitante.php" class="button large">Visitante</a>
        </div>
        <div class="column">
          <a href="expositor.php" class="button large">Expositor</a>
        </div>
      </div>
    </div>
    <div class="row contenido expo ">
      <div class="column text-center">
        <h5>La única exposición mexicana especializada de la industria reunirá a más de
          <span style="font-size:1.4em;">150</span> empresas líderes en el mercado.</h5>
        <p>Invierte en el foro de negocios en donde los principales tomadores de
          decisiones en México se reunirán en torno a la industria de los parques
          urbanos y la recreación. </p>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
