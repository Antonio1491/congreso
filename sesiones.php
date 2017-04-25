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
    <title>Sesiones Educativas</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-talleres">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">SESIONES EDUCATIVAS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-6 planeacion-diseno">
        <h4>Diseño y Planeación</h4>
        <ul>
          <li>Tema 1</li>
          <li>Tema 2</li>
          <li>Tema 3</li>
          <li>Tema 4</li>
          <li>Tema 5</li>
        </ul>
      </div>
      <div class="column medium-6 la-ciudad">
        <h4>La Ciudad</h4>
        <ul>
          <li>Tema 1</li>
          <li>Tema 2</li>
          <li>Tema 3</li>
          <li>Tema 4</li>
          <li>Tema 5</li>
        </ul>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-6 economia">
        <h4>Economía y Usos del Espacio Público</h4>
        <ul>
          <li>Tema 1</li>
          <li>Tema 2</li>
          <li>Tema 3</li>
          <li>Tema 4</li>
          <li>Tema 5</li>
        </ul>
      </div>
      <div class="column medium-6 salud">
        <h4>Salud y Medio Ambiente</h4>
        <ul>
          <li>Tema 1</li>
          <li>Tema 2</li>
          <li>Tema 3</li>
          <li>Tema 4</li>
          <li>Tema 5</li>
        </ul>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-6 servicio-publico">
        <h4>Servicio Público y Participación Ciudadana</h4>
        <ul>
          <li>Tema 1</li>
          <li>Tema 2</li>
          <li>Tema 3</li>
          <li>Tema 4</li>
          <li>Tema 5</li>
        </ul>
      </div>
      <div class="column medium-6 ">

      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
