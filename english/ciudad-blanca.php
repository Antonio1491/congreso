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
    <title>THE WHITE CITY</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="">
    <div class=" header header-4">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">THE WHITE CITY</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column">
        <p><span class="letra-capital">T</span>he City of Merida, Yucatan was founded on January 6, 1542 by Francisco de Montejo y León "El Mozo", where the ancient Mayan City T'hó was located.</p>
        <p>Merida is positioned as a city of culture and traditions with charming people who welcomes everyone who visits. All its streets and corners are full of stories and are witnesses of the passage of time and its architecture as a sample of our colonial past.</p>
          <p>Forbes has named Mérida one of the three most livable cities in Mexico, and the best choice for investment and business. </p>
          <p>The leading newspaper El País selected Merida as one of 2017´s top 10 cities.</p>
          <p>Lonely planet, a leading international travel publication, named Merida one of the world´s most attractive cities.</p>
      </div>
    </div>
    <div class="row">
      <div class="video">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/w4kxTTyH7yw" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
