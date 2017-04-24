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
    <title>¿Qué es y por qué participar?</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class="header header-participar">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">¿QUÉ ES Y POR QUÉ PARTICIPAR?</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-6">
        <p><span class="letra-capital">E</span>l Primer Congreso de Parques Urbanos es la primera edición de un evento que se realizará anualmente que tendrá como objetivo reunir y capacitar a profesionales, funcionarios públicos, técnicos, tomadores de decisiones, académicos, estudiantes, sociedad civil y proveedores relacionados al espacio público en un mismo lugar, para impulsar la industria de los parques urbanos y la recreación en México, creando un espacio de  tres días de capacitación, conferencias, talleres y muestra comercial.</p>
        <p>Este evento impulsará a que profesionales de la industria de parques aumenten en número y conocimientos, para que amplíen sus negocios y desarrollen relaciones con otros asistentes.</p>
        <p>Si todavía no estás convencido de asistir a este congreso compartimos algunas de las razones por las que debes asistir:</p>
        <ul>
          <li>El congreso contará con: 8 conferencias magistrales, 48 sesiones educativas y 8 talleres vivenciales.  </li>
          <li>Iniciarás relaciones duraderas con otros profesionales nacionales e internacionales con intereses e ideas similares.</li>
        </ul>
      </div>
      <div class="column medium-6">
        <ul>
          <li>Serás parte del inicio del gran movimiento social de los parques en México. </li>
          <li>Aprenderás acerca de temas clave sobre los parques y la industria de recreación, con la oportunidad de especializarte en alguno de nuestros temas de sesiones educativas.</li>
          <li>Elige a que sesiones educativas asistir y obtén una certificación validando la participación y conocimientos adquiridos con un 80% de asistencia.</li>
          <li>Obtén un año de membresía a la Asociación Nacional de Parques y Recreación incluida en tu cuota de registro. </li>
          <li>Conoce a la gran gama de proveedores de equipamiento de espacio público y haz negocios con ellos.</li>
          <li>Tendrás la oportunidad de conocer nuevos proyectos relacionados con el espacio público, además de conocer a algunos de los líderes en la industria. </li>
          <li>Eventos sociales en lugares atractivos de la ciudad. </li>
          <li>Conocerás las experiencias de otros que se enfrentan a desafíos similares a los tuyos.</li>
        </ul>
      </div>
    </div>
  </article>

</main>



<?php include'assets/footer.php'; ?>
