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
    <title>Bases del Concurso</title>
    <?php require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="aviso">
    <div class=" header header-6">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">"Términos y condiciones de la promoción "</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <header>
        <h4>"Ven al congreso con un amigo"</h4>
      </header>
    </div>
    <div class="row column">
      <p><em>Te agradecemos haber estado en contacto con nosotros al suscribirte a nuestro boletín de noticias y te ofrecemos un 2x1 en entradas generales y para estudiantes.</em></br>
      <em>Aprovecha el descuento y los precios de preventa que vencen el 1ero de Marzo, en boletos de tipo general.</em></p>
      <p>Vigencia dell 22 al 28 de Febrero</p>
    </div>

    <div class="row column">

      <ul>
        <li>Mécanica:</li>
        <li>Inscribete en el siguiente link: <a href="https://www.ticketopolis.com/congresoparques/tickets.aspx" target="_blank">www.congresoparques/registro.com</a></li>
        <li>Realiza tu pago, el sistema te proporcionará un "Folio" de inscripción de manera automática.</li>
        <li>Envíanos el folio de tu inscripción al correo info@congresoparques.com</li>
        <li>Recibirás de vuelta un código de promoción con costo $0 para inscribir a otra persona.</li>
        <li>Nota: el segundo boleto sera equivalente al boleto adquirido (general o estudiante).</li>
        <li>*No aplica con otros descuentos o promociones.</li>

      </ul>
    </div>
    <div class="row column align-center">
      <a href="https://www.ticketopolis.com/congresoparques/tickets.aspx" class="button">ADQUIRIR BOLETO</a>
    </div>
  </article>
</main>
<?php include'assets/footer.php'; ?>
