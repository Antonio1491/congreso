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
    <title>REGISTRATION</title>
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
          <h3 class="titulos">REGISTRATION</h3>
        </div>
      </div>
    </div>
    <section >
      <div class="row column contenido align-center">
        Take advantage of our promotion to months without interest with participants.<img src="img/tarjestas-admitidas.png" alt="" class="tarjetas">
      </div>
      <div class="row contenido text-center">
        <div class="column nota">
          <p><strong>Note:</strong> You can register to the workshops and social events through the buying process of a general or student ticket to the congress. Enter the option BUY in the ticket you want and these options will appear!.</p>
        </div>
      </div>
      <div class="row inscripciones align-center">
        <div class="column small-10 medium-4">
          <div class="card-info-content">
            <ul class="pricing-table no-bullet text-center">
              <li class="title">students</li>
              <li class="price"><span class="desc">$95 USD</span></li>
              <!-- <li class="price desc">$75  <span class="pesos">USD</span></li> -->
              <!-- <li class="fecha-precio">* Price until February 1st </li> -->
              <li>Keynote Presentations<br><i class="fi-check"></i></li>
              <li>Educational Sessions<br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Social Events <br><i class="fi-x"></i></li>
              <li>Workshops <br><i class="fi-x"></i></li>
              <li>Annual Membership ANPR México<br><i class="fi-check"></i></li>
              <li><a class="button" href="https://www.ticketopolis.com/congresoparqueseng/tickets.aspx" target="_blank">BUY</a></li>
              </ul>
            <!-- <ul class="pricing-table no-bullet text-center">
                <li class="title text-center">General</li>
                <li class="price">$195 <span class="pesos">USD</span></li>
                <li class="fecha-precio">* Price until December 31st </li>
                <li>Keynote Presentations <br><i class="fi-check"></i></li>
                <li>Educational Sessions<br><i class="fi-check"></i></li>
                <li>Expo <br><i class="fi-check"></i></li>
                <li>Social Events <br><i class="fi-check"></i></li>
                <li>Workshops<br><i class="fi-x"></i></li>
                <li>Annual Membership ANPR México<br><i class="fi-check"></i></li>
                <li><a class="button" href="#" target="_blank" disabled>BUY</a></li>
              </ul> -->
            </div>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">General</li>
              <!-- <li class="price"><span class="precio-antes">$245 USD</span></li> -->
              <li class="price ">$245  <span class="pesos">USD</span></li>

              <!-- <li class="fecha-precio">* Price from January 1st until March 1st </li> -->
              <li>Keynote Presentations <br><i class="fi-check"></i></li>
              <li>Educational Sessions <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Social Events <br><i class="fi-check"></i></li>
              <li>Workshops <br><i class="fi-x"></i></li>
              <li>Annual Membership ANPR México<br><i class="fi-check"></i></li>
              <li><a class="button" href="https://www.ticketopolis.com/congresoparqueseng/tickets.aspx" target="_blank" >BUY</a></li>
            </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">Expo</li>
              <li class="price">$25 <span class="pesos">USD</span></li>
              <!-- <li class="fecha-precio">* Permanent price for both days</li> -->
              <li>Keynote Presentations <br><i class="fi-x"></i></li>
              <li>Educational Sessions <br><i class="fi-x"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>ESocial Events <br><i class="fi-x"></i></li>
              <li>Workshops<br><i class="fi-x"></i></li>
              <li>Annual Membership ANPR México<br><i class="fi-x"></i></li>
              <li><a class="button" href="https://www.ticketopolis.com/congresoparqueseng/tickets.aspx" target="_blank">BUY</a></li>
            </ul>
          <!-- <ul class="pricing-table no-bullet text-center">
              <li class="title">General</li>
              <li class="price">$245<span class="pesos"> USD</span></li>
              <li class="fecha-precio">* Price from March 2nd until April 27th</li>
              <li>Keynote Presentations <br><i class="fi-check"></i></li>
              <li>Educational Sessions <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Social Events <br><i class="fi-check"></i></li>
              <li>Workshops <br><i class="fi-x"></i></li>
              <li>Annual Membership ANPR México<br><i class="fi-check"></i></li>
              <li><a class="button" href="#" target="_blank" disabled>BUY</a></li>
            </ul> -->
        </div>
      </div>

    </section>
  </article>
</main>

<?php include'assets/footer.php'; ?>
