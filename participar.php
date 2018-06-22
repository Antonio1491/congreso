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
    <meta name="description" content="El 1er. Congreso de Parques Urbanos es un evento que tiene como objetivo reunir y capacitar a profesionales del espacio público, los parques y la recreación.">
    <title>¿Por qué participar en el 1er. Congreso Internacional de Parques Urbanos</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="" id="beneficios">
    <div class="header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">¿Por qué participar en el 1er. Congreso de Parques Urbanos?</h1>
        </div>
      </div>
    </div>
    <div class="row contenido beneficios">
      <div class="column medium-3">
        <img src="img/tips.png" alt="">
      </div>
      <div class="column medium-9">
        <h4>BENEFICIOS DE ASISTIR AL CONGRESO</h4>
        <ol type="A">
          <li>Conocer más sobre los parques y espacios públicos aprendiendo de los mejores conferencistas y talleristas del mundo.</li>
          <li>Ampliar mi base de datos de contactos y relaciones públicas</li>
          <li>Conocer a los proveedores de la industria más importantes de México y Estados Unidos, las tendencias del mercado, nuevos productos, precios, calidades y oportunidades.</li>
          <li>Aprender de historias de éxito sobre los parques y espacios públicos que están sucediendo en México y Latinoamérica.</li>
          <li>Llevar a mi organización nuevas ideas para el desarrollo de proyectos.</li>
          <li>Obtener un certificado profesional otorgado por la Asociación Nacional de Parques y Recreación de México.</li>
          <li>Obtener una membresía anual, ya incluida en tu inscripción, de la Asociación Nacional de Parques y Recreación de México.</li>
          <li>Poder descargar todo el material de todas las conferencias al finalizar el Congreso.</li>
          <li>Visitar los parques y espacios públicos más emblemáticos de Mérida aprendiendo como los ciudadanos y el gobierno resolvieron las problemáticas y retos.</li>
          <li>Colaborar con la comunidad mexicana dedicada al cuidado, mantenimiento, administración y gestión de los parques urbanos para elevar la discusión del tema en México y Latinoamérica y con esto ayudar a mejorar el tejido social de las ciudades.</li>
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
          <li>Antes de poder discutir con tu jefe tu posible participación al Congreso, es importante que conozcas a fondo la estructura del mismo, fechas, horarios, logística, tipos de conferencias, conferencistas y precios.</li>
          <li>A través de conocer toda esta información establece metas a corto y largo plazo que te ayuden a cumplir mejor tu trabajo. Estas metas deben de ser apoyadas por la idea de asistir al evento.</li>
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
          <li>Alinea tus objetivos laborales y los de tu organización con los objetivos de las conferencias y talleres a los que te gustaría asistir. La mejor forma de justificar tu asistencia al Congreso es que lo que vas a prender te ayude a poder hacer mejor tu trabajo.</li>
          <li> Establece una agenda de contactos y planea un posible acercamiento con algún conferencista con el cual le llegue interesar a tu organización hacer relación.</li>
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
          <li>Conocer más sobre los parques y espacios públicos aprendiendo de los mejores conferencistas y talleristas del mundo.</li>
          <li>Ampliar mi base de datos de contactos y relaciones públicas.</li>
          <li>Conocer a los proveedores de la industria más importantes de México y Estados Unidos, las tendencias del mercado, nuevos productos, precios, calidades y oportunidades.</li>
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
