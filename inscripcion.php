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
    <title>Inscripciones</title>
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
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">INSCRIPCIONES</h3>
        </div>
      </div>
    </div>
    <section >
      <div class="row inscripciones align-center">
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title text-center">General</li>
              <li class="price">$3,900.00</li>
              <li class="fecha-precio">* Precio hasta el 1 de Agosto</li>
              <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
              <li>Sesiones Educativas <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-check"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">general</li>
              <li class="price">$4,500.00</li>
              <li class="fecha-precio">* Precio hasta el 1 de Febrero</li>
              <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
              <li>Sesiones Educativas <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-check"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">general</li>
              <li class="price">$4,900.00</li>
              <li class="fecha-precio">* Precio apartir del 2 de Febrero</li>
              <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
              <li>Sesiones Educativas <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-check"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
        </div>
      </div>
      <div class="row fila-espacio align-center">
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
            <li class="title">Estudiantes</li>
            <li class="price">$1,500.00</li>
            <li class="fecha-precio">* Precio hasta el 1 de Febrero</li>
            <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
            <li>Sesiones Educativas <br><i class="fi-check"></i></li>
            <li>Expo <br><i class="fi-check"></i></li>
            <li>Eventos Sociales <br><i class="fi-x"></i></li>
            <li>Talleres <br><i class="fi-x"></i></li>
            <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">Estudiantes</li>
              <li class="price">$1,900.00</li>
              <li class="fecha-precio">* Precio apartir del 2 de Febrero</li>
              <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
              <li>Sesiones Educativas <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-x"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">Expo</li>
              <li class="price">$500.00</li>
              <li class="fecha-precio">* Precio fijo</li>
              <li>Conferencias Magistrales <br><i class="fi-x"></i></li>
              <li>Sesiones Educativas <br><i class="fi-x"></i></li>
              <li>Expo Comercial Parques Urbanos<br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-x"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>
        </div>
      </div>
    </section>
  </article>
</main>

<?php include'assets/footer.php'; ?>
