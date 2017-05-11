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
    <title>Sesiones Educativas</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2 sesiones">
  <article class="">
    <div class=" header header-talleres">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">SESIONES EDUCATIVAS</h3>
        </div>
      </div>
    </div>
    <div class="action text-center">
      <a href="convocatoria-sesiones.php" class="button">CONVOCATORIA</a>
    </div>
    <div class="row contenido">
      <div class="column medium-6 planeacion-diseno">
        <h4 class="text-center">Diseño y Planeación</h4>
        <div class="text-center">
            <img src="img/planeacion-y-diseno-02.png" alt="" class="isesiones">
        </div>
        <ul class="lista-sesiones">
          <li>El Parque infantil ideal.</li>
          <li>Juegos de agua, soluciones recreativas para climas calurosos.</li>
          <li>Jardines botánicos y  contemplativos como espacios públicos para todos.</li>
          <li>Los Parques lineales, alternativas para espacios públicos residuales.</li>
          <li>Al interior con:</li>
          <li>¿Por qué es importante un plan maestro para los parques urbanos?</li>
          <li>Las mujeres en la arquitectura de paisaje.</li>
        </ul>
      </div>
      <div class="column medium-6 la-ciudad">
        <h4 class="text-center">La Ciudad</h4>
        <div class="text-center">
            <img src="img/la-ciudad-02.png" alt="" class="isesiones">
        </div>
        <ul class="lista-sesiones">
          <li>¿De quién es el parque?</li>
          <li>Viviendo la cultura en los parques.</li>
          <li>Las desarrolladoras inmobiliarias y el parque. ¿Matrimonio por conveniencia? </li>
          <li>El poder de los grupos organizados como agente de cambio en la ciudad. </li>
          <li>Design Trust for Public Space: ¿Cómo y por qué?</li>
          <li>Minneapolis, el mejor sistema de parques de los Estado Unidos</li>
        </ul>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-6 economia">
        <h4 class="text-center">Economía y Usos del Espacio Público</h4>
        <div class="text-center">
            <img src="img/uso-del-espacio-publico-02.png" alt="" class="isesiones">
        </div>
        <ul class="lista-sesiones">
          <li>Concesiones comerciales en parques urbanos ¿Un tema tabú?</li>
          <li>Los Parques Caninos, una gran oportunidad para los parques urbanos.</li>
          <li>Desarrollos deportivos concesionables - Canchas de Futbol 7 y Bicicleta Recreativa.</li>
          <li>Entre el donador y el patrocinador. ¿Cómo crear una campaña de procuración de fondos exitosa para un parque urbano?</li>
          <li>¿Cómo organizar un evento exitoso en un espacio público?</li>
        </ul>
      </div>
      <div class="column medium-6 salud">
        <h4 class="text-center">Salud y Medio Ambiente</h4>
        <div class="text-center">
            <img src="img/salud-y-medio-ambiente-02.png" alt="" class="isesiones">
        </div>
        <ul class="lista-sesiones">
          <li>Proyectos de arborización en espacios públicos. MODERADOR: Leticia Roche.</li>
          <li>Huertos urbanos y composta en los parques urbanos.</li>
          <li>La importancia de la activación física en los parques</li>
          <li>Los Niños y el Parque. Activación física en pro de nuestra niñez.</li>
          <li>Centros deportivos y recreacionales, elementos vitales del espacio público.</li>
        </ul>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-6 servicio-publico">
        <h4 class="text-center">Servicio Público y Participación Ciudadana</h4>
        <div class="text-center">
            <img src="img/servicio-publico-02.png" alt="" class="isesiones">
        </div>
        <ul class="lista-sesiones">
          <li>¿Cómo construir un parque urbano en menos de 1 día? </li>
          <li>Parques Alegres, un modelo de transformación social en Culiacán.</li>
          <li>¿Qué es y cómo funciona una agencia de parques y recreación?</li>
          <li>Gestiones colaborativas. Gobierno y Sociedad Civil.</li>
          <li>Friends of the Parks: Transformando Chicago y sus parques.</li>
        </ul>
      </div>
      <div class="column medium-6 ">

      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
