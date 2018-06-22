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
    <div class="row contenido beneficios">
      <div class="column medium-3">
        <img src="img/tips.png" alt="">
      </div>
      <div class="column medium-9">
        <h4>BENEFITS OF ATTENDING THE CONGRESS</h4>
        <ol type="A">
          <li>Learn more about parks and public spaces from the best speakers in the world.</li>
          <li>Grow your PR databases.</li>
          <li>Meet the most important industry suppliers in Mexico and the United States, market trends, new products, prices, qualities and opportunities.</li>
          <li>Learn from success stories about parks and public spaces happening in Mexico and Latin America.</li>
          <li>Bring to your organization new ideas for the development of projects.</li>
          <li>Obtain a professional certificate granted by the National Recreation and Park Association of Mexico.</li>
          <li>Obtain an annual membership to the National Recreation and Park Association of Mexico, already included in your registration.</li>
          <li>Your will be able to download the material from all educational sessions at the end of the Congress.</li>
          <li>Visit the most emblematic parks and public spaces in Merida learning how the citizens and the government solved problems and challenges working together.</li>
          <li>To collaborate with the Mexican community dedicated to the maintenance, administration and management of the urban parks to put them in the Mexican and Latinamerican agenda in order to improve the social fabric of our cities.</li>
        </ol>
      </div>
    </div>

    <div class="row ">
      <div class="column text-center">
        <figure>
          <img src="img/convencer-a-mi-jefe.png" alt="">
        </figure>
      </div>
    </div>
    <div class="row">
      <div class="column medium-8">
        <img src="img/programa.png" alt="">
      </div>
      <div class="column-4">
        <a href="assets/PROGRAMA-PRELIMINAR.pdf" target="_blank">
          <img src="img/btn-descarga-programa.png" alt="">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4">
        <img src="img/conoce.png" alt="">
      </div>
      <div class="column medium-8">
        <ol type="A">
          <li>Before you can talk with your boss about your possible participation in the Congress, it is important that you thoroughly know the structure of it; the dates, schedule, logistics, types of educational sessions, speakers and investment to be made.</li>
          <li>Through knowing all this information, set short and long term goals that can help you improve your daily work. Telling your boss these improvements could be supported by the congress is really important. </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="column medium-8">
        <img src="img/agenda.png" alt="">
      </div>
      <div class="column-4">
        <a href="sesiones.php">
          <img src="img/btn-consultar.png" alt="">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4">
        <img src="img/planea-sesiones.png" alt="">
      </div>
      <div class="column medium-8">
        <ol type="A">
          <li>Align your work goals and those of your organization with the objectives of the conferences and workshops you would like to attend. The best way to justify your attendance at the Congress is that what you are going to learn will help you to do your job better.</li>
          <li>Establish an agenda of contacts and plan what speaker or company you could approach. Plan for these approaches to be of interest for your organization to establish a relationship with.</li>
        </ol>
      </div>
    </div>

    <div class="row">
      <div class="column medium-8">
        <img src="img/razones.png" alt="">
      </div>
      <div class="column-4">
        <a href="#beneficios">
          <img src="img/btn-subir.png" alt="">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="column medium-4">
        <img src="img/razones-2.png" alt="">
      </div>
      <div class="column medium-8">
        <ol type="A">
          <li>The benefits listed above of this section, could help you to make that list.</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="column medium-8">
        <img src="img/titulo-carta.png" alt="">
      </div>
      <div class="column-4">
        <a href="assets/Carta.docx"><img src="img/btn-carta.png" alt=""></a>
      </div>
    </div>

      <div class="column text-center">
        <img src="img/carta.png" alt="">
      </div>
    </div>
  </article>
</main>



<?php include'assets/footer.php'; ?>
