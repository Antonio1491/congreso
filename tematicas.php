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
    <title>Temáticas</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-tematicas">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">TEMÁTICAS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido tematicas">
      <div class="row">
        <div class="column medium-6">
          <img src="img/diseno-planeacion.png" alt="">
        </div>
        <div class="column medium-6 planeacion-diseno">
          <h4>Diseño y Planeación</h4>
          <p>El objetivo de esta temática es hablar sobre principios y
            procesos de diseño para parques; ahondando en temas específicos
            como: áreas infantiles, juegos de agua, entre otros. Se
            brindará información sobre los procesos intelectuales y
            creativos de diseño y la importancia de la crrecta planeación
            de estos espacios para su éxito. </p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column medium-6">
          <img src="img/la-ciudad.png" alt="">
        </div>
        <div class="column medium-6 la-ciudad">
          <h4>La Ciudad</h4>
          <p>En esta temática se hablará sobre cómo los parques impactan
            de forma positiva a una ciudad y de cómo la sociedad civil
            organizada la transforma y le da identidad a través de sus
            iniciativas y proyectos. Los espacios públicos son el lugar
            en dónde se vive la ciudad </p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column medium-6">
          <img src="img/economia.png" alt="">
        </div>
        <div class="column medium-6 economia">
          <h4>Economía y Usos del Espacio Público</h4>
          <p>Además de ser espacios para la recreación, los parques
            impulsan la economía y generan ingresos. Se presentarán modelos
            exitosos de administración, fomento económico y procuración de
            fondos mostrando la gran variedad de formas en la que un parque
            puede ser sostenible en el tiempo. </p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column medium-6">
          <img src="img/salud-medio-ambiente.png" alt="">
        </div>
        <div class="column medium-6 salud">
          <h4>Salud y Medio Ambiente</h4>
          <p>Los parques traen infinidad de beneficios a la salud ya que,
            además de invitarnos a la activación física, son el lugar en
            donde nos encontramos con la naturaleza. Las áreas verdes
            disminuyen los índices de depresión, ansiedad y estrés laboral;
            limpian el aire, mejoran las circulaciones del viento y regulan
            los patrones de precipitaciones anuales.</p>
        </div>
      </div>
      <div class="row fila-espacio">
        <div class="column medium-6">
          <img src="img/participacion-ciudadana.png" alt="">
        </div>
        <div class="column medium-6 servicio-publico">
          <h4>Servicio Público y Participación Ciudadana</h4>
          <p>Los parques necesitan servidores públicos comprometidos con
            el espacio público, con las mejores prácticas para su
            implementación y sostenimiento en conjunto con la ciudadanía,
            fomentando la participación ciudadana. En esta temática se
            presentaran modelos para fomentar la participación ciudadana
            y estructuras que mejoren el servicio público enfocado a los
            parques.</p>
        </div>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
