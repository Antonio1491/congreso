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
        <div class="text-center">
          <img src="img/promotores-congreso.jpg" alt="" id="img-promotor" class="img-promotores">
        </div>
        <p><span class="letra-capital">B</span>e a promoter of the First International Congress of Urban Parks and win rewards encouraging the participation and registration at this important event.</p>
        <h5>Why participate?</h5>
        <p class="fila-espacio">Are you interested in urban parks and public spaces in Mexico and Latin America? You can be a promoter of the First International Congress of Urban Parks in Mexico and participate in our program of goals and rewards where you can win:</p>
        <ol type=a>
          <li>Complete registration for two days of the conference.</li>
          <li>Transportation from your city to Mérida</li>
          <li>Free lodging during the days of the event.</li>
          <li>Entrance to the VIP cocktail where you will meet our keynote and educational session’s speakers.</li>
          <li>Economic incentives for achieving goals. </li>
        </ol></br>
        <div class="text-center">
          <img src="img/beneficios-promotores.jpg" alt="" class="img-promotores">
          <img src="img/beneficios-promotores-2.jpg" alt="" class="img-promotores">
          <img src="img/beneficios-promotores-3.jpg" alt="" class="img-promotores">
        </div></br>
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
    <form class="" action="registro-promotor.php" method="post">
    <div class="row fila-espacio">
        <div class="column small-12 medium-4">
          <label for="">Name</label>
          <input type="text" name="nombre" value="" required>
        </div>
        <div class="column small-12 medium-3">
          <label for="">E-mail:</label>
          <input type="email" name="email" value="" required>
        </div>
        <div class="column small-12 medium-2">
          <label for="">Telephone: </label>
          <input type="tel" name="tel" value="" required>
        </div>
        <div class="column small-12 medium-3">
          <label for="">City:</label>
          <input type="text" name="ciudad" value="" required>
        </div>
    </div>
    <div class="row column">
        <input type="submit" name="" value="Send" class="button enviar-datos">
    </div>
  </form>
  <div class="row column">
    <h5>General conditions of the promoter</h5>
    <ul>
      <li>A reference code will be given to the promoter to monitor its benefits.</li>
      <li>The discount for the total number of registrations made with the promoter's code will be applied in the registration module on the days of the Congress on the general price of $ 3,900.</li>
      <li>The lodging and air transportation benefits will be paid in cash ONLY on the days of the Congress presenting the receipt or reservation of your plane ticket, bus or other means of transportation as well as your hotel.</li>
      <li>Benefits for transportation and lodging: The maximum fee that the organizing committee of the congress is responsible to cover under these two concepts (transportation and lodging) is $ 4,500 MXN for each concept. If the price of any of these two concepts is higher than this amount, it must be covered by the promoter. If the cost to cover under these two concepts is less than $ 4,500 the organizing committee will not pay the difference in cash.</li>
    </ul>
    <h5>Other conditions</h5>
      <ul>
        <li>Each person who registers using the promoter's code will have a 10% direct discount on the registration price.</li>
        <li>The price of the general registration to the congress applies on the dates published in our website and the preliminary program.</li>
        <li>Prices of registrations already include VAT.</li>
      </ul>
  </div>

  </article>

</main>



<?php include'assets/footer.php'; ?>
