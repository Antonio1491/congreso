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
    <title>Precios | Congreso Internacional de Parques Urbanos</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <div class="header header-2">
    <div class="row align-middle">
      <div class="column text-center">
        <h1 class="titulos">Precios</h1>
      </div>
    </div>
  </div>
  <section class="contenido inscripcion">
    <div class="row">
      <article class="inscripcion-precio">
        <h2>Ponentes con contribución aceptada por el Comité de Contenido</h2>
        <ul>
          <li>El ponente o el quipo aceptado para ser parte de las Sesiones Educativas tienen el acceso al Congreso con costo $0.</li>
          <li>Es importante solicitar el pase de entrada al comité de Contenido: <a href="mailto:contenido@anpr.org.mx" class="link">contenido@anpr.org.mx</a>.</li>
        </ul>
      </article>
      <article class="inscripcion-precio">
        <h2>Público en general</h2>
        <ul>
          <li>Vigencia antes del 31 de Diciembre | $4,290 pesos mexicanos MXN |  $238 dólares US.</li>
          <li>Vigencia antes del 31 de Marzo | $4,950 pesos mexicanos MXN | $275 dólares US.</li>
          <li>Vigencia A partir del 1 de Abril | $5,390 pesos mexicanos MXN | $299 dólares US.</li>
        </ul>
      </article>
      <article class="inscripcion-precio">
        <h2>Estudiantes</h2>
        <ul>
          <li>Vigencia antes del 31 de Diciembre | $2,145 pesos mexicanos MXN |  $119 dólares US.</li>
          <li>Vigencia antes del 31 de Marzo | $2,475 pesos mexicanos MXN | $138 dólares US.</li>
          <li>Vigencia A partir del 1 de Abril | $2,695 pesos mexicanos MXN | $150 dólares US.</li>
        </ul>
      </article>
      <article class="inscripcion-precio">
        <h2>Descuentos por grupo de una misma institución</h2>
        <p>Únicamente para boleto de tipo general.</p>
        <ul>
            <li>De 3 a 5 personas: 20% descuento sobre el precio vigente.</li>
            <li>De 6 a 10 personas: 30% descuento sobre el precio vigente.</li>
            <li>Más de 10 personas: 40% descuento sobre el precio vigente</li>
        </ul>
      </article>
    </div>
    <div class="row">
      <article class="inscripcion-precio">
        <h2>¿Qué incluye el precio de inscripción?</h2>
        <ul>
          <li>Acceso a Conferencias Magistrales.</li>
          <li>Acceso a más de 100 Sesiones Educativas.</li>
          <li>Acceso a Expo Comercial Parques Urbanos.</li>
          <li>Eventos Sociales.</li>
        </ul>
      </article>
    </div>
  </section>

</main>

<?php include'assets/footer.php'; ?>
