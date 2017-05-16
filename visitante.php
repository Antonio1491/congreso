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
    <div class=" header header-expo">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EXPO COMERCIAL PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido expo">
      <div class="column">
        <p><span class="letra-capital">P</span>articipa en la Exposición Comercial más especializada de la industria de los Parques Urbanos
          y Espacios Públicos en México y Latinoamérica.</p>
        <strong>Durante 2 días tendrás acceso a:</strong>
        <ul>
          <li>Más de 6,000 m<sup>2</sup> de exposición</li>
          <li>Más de 80 Expositores</li>
          <li>Área de negocios</li>
        </ul>
        <p>Conoce a los mejores proveedores de México y Estados Unidos de:</p>
        <ul>
          <li>Juegos Infantiles</li>
          <li>Mobiliario Urbano</li>
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
          <li>Y mucho más…</li>
        </ul>
      </div>
    </div>
      <div class="row text-center">
        <div class="column">
          <h5>PLANO DE LA "EXPO COMERCIAL PARQUES URBANOS"</h5>
        </div>
      </div>
      <div class="row">
        <img src="img/croquis.jpg" alt="" class="croquis">
      </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
