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
    <title>Talleres</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="">
    <div class=" header header-talleres">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">TALLERES</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <p><span class="letra-capital">L</span>os talleres vivenciales serán experiencias únicas de aprendizaje
        un día previo a que las sesiones educativas comiencen. Se visitarán
        parques y espacios icónicos de la ciudad y el estado impartidos por
        expertos en el tema y colaboradores de nuestra ciudad anfitriona. Los
        talleres son una gran oportunidad para extender nuestro conocimiento
        sobre el espacio público.</p>
    </div>
    <div class="row contenido">
      <div class="column medium-3">
        <img src="img/los-barrios-de-merida.png" alt="">
      </div>
      <div class="column medium-5 contenido-talleres ">
        <h4 class="text-center">LOS BARRIOS DE MÉRIDA</h4>
        <h6 class="text-center">UADY</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-5 medium-offset-4 contenido-talleres ">
        <h4 class="text-center">PARQUES HUNDIDOS</h4>
        <h6 class="text-center">Ayuntamiento Mérida</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
      <div class="column medium-3">
        <img src="img/parques-hundidos.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/malecon-progreso.png" alt="">
      </div>
      <div class="column medium-5 contenido-talleres ">
        <h4 class="text-center">MALECÓN DE CONGRESO</h4>
        <h6 class="text-center">Ayuntamiento Progreso</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-5 medium-offset-4 contenido-talleres ">
        <h4 class="text-center">PLACEMAKING</h4>
        <h6 class="text-center">Lugares Públicos A.C.</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
      <div class="column medium-3">
        <img src="img/parques-hundidos.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/malecon-progreso.png" alt="">
      </div>
      <div class="column medium-5 contenido-talleres ">
        <h4 class="text-center">LA PLANCHA</h4>
        <h6 class="text-center">GPLP A.C.</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-5 medium-offset-4 contenido-talleres ">
        <h4 class="text-center">PARQUES LINEALES</h4>
        <h6 class="text-center">COMEY</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
      <div class="column medium-3">
        <img src="img/parques-hundidos.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/malecon-progreso.png" alt="">
      </div>
      <div class="column medium-5 contenido-talleres ">
        <h4 class="text-center">PARQUES CON HISTORIA</h4>
        <h6 class="text-center">Ayuntamiento Mérida</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-5 medium-offset-4 contenido-talleres ">
        <h4 class="text-center">BICI-RUTA</h4>
        <h6 class="text-center">Ayuntamiento Mérida</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
      <div class="column medium-3">
        <img src="img/parques-hundidos.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/malecon-progreso.png" alt="">
      </div>
      <div class="column medium-5 contenido-talleres ">
        <h4 class="text-center">HUERTOS URBANOS</h4>
        <h6 class="text-center">Colectivo Milpa Kanankab</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue velit quis eleifend viverra. </p>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
