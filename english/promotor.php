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
    <title>¿Quieres ser promotor?</title>
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
    <div class="header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">DO YOU WANT TO BE A PROMOTER?</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column small-12 medium-12">
        <p><span class="letra-capital">B</span>e a promoter of the First International Congress of Urban Parks and win rewards encouraging the participation and registration at this important event.</p>
        <h5>Why participate?</h5>
        <p class="fila-espacio">Are you interested in urban parks and public spaces in Mexico and Latin America? You can be a promoter of the First International Congress of Urban Parks in Mexico and participate in our program of goals and rewards where you can win:</p>
        <ol type=a>
          <li>Complete registration for two days of the conference.</li>
          <li>Transportation from your city to Mérida</li>
          <li>Free lodging during the days of the event.</li>
          <li>Entrance to the VIP cocktail where you will meet our keynote and educational session’s speakers.</li>
          <li>Economic incentives for achieving goals. </li>
        </ol>
        <h5>How to participate?</h5>
        <p>Fill out the form on this page, an e-mail with an explanatory presentation of the process, the bases and the conditions will be sent. A representative of the conference will contact you to resolve any doubts and give you all of the necessary tools to achieve a successful promotion program.</p>
          <p>Material such as the following will be available:</p>
        <ol type="a">
          <li>Sales presentation.</li>
          <li>Promotional video.</li>
          <li>Preliminary programs.</li>
          <li>Posters and Flyers.</li>
          <li>Relevant contacts within your community related to parks and public space will be provided.</li>
          <li>Training sessions.</li>
        </ol>
        <p class="text-center"><strong>Participate in the project that will gather all those interested in urban parks and public spaces in Mexico and Latin America!</strong></p>
      </div>
    </div>
  </article>

</main>



<?php include'assets/footer.php'; ?>
