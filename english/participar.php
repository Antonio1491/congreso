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
    <title>WHY ATTEND?</title>
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
          <h3 class="titulos">WHY ATTEND?</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column small-12 medium-6">
        <p><span class="letra-capital">T</span>he First Congress of Urban Parks is the first edition of an event that will be held annually to gather and train professionals, public officials, decision makers, academics, students, civil society and suppliers related to the public space in the same place to boost the urban parks industry and recreation in Mexico, creating a space of three days of training, conferences, workshops and commercial exhibit.</p>
        <p>This event will help professionals in the park industry to increase in number and knowledge, to expand their businesses and develop relationships with other assistants.</p>
        <p>If you are still not convinced to attend this congress, we share some of the reasons why you should attend:</p>
        <ul>
          <li>The congress will have: 8 keynote presentations, more than 50 educational sessions and 9 workshops.</li>
          <li>You will establish lasting relationships with other national and international professionals with similar interests and ideas.</li>
          <li>You will be part of the beginning of the great social movement of the parks in Mexico.</li>
        </ul>
      </div>
      <div class="column small-12 medium-6">
        <ul>
          <li>You'll learn key topics about parks and recreation industry with the opportunity to specialize in one of our educational sessions themes.</li>
          <li>Choose which educational sessions to attend and obtain a certification validating your participation and acquired knowledge with an 80% attendance.</li>
          <li>Obtain a National Parks and Recreation Association’s annual membership included in your registration fee.</li>
          <li>Meet the wide range of public space equipment suppliers and do business with them.</li>
          <li>You will have the opportunity to know new projects related to public space, besides meeting leaders in the industry.</li>
          <li>Social events in attractive places of the city.</li>
          <li>You will know professionals who are facing similar challenges to yours.</li>
        </ul>
      </div>
    </div>
  </article>

</main>



<?php include'assets/footer.php'; ?>
