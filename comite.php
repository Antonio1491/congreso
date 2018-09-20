
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
    <title>Eventos Sociales</title>
    <?php  require("assets/head_common.php") ?>
</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_comite">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina">
        <h2></h2><br>
        <h1>Comité Organizador </h1>
      </hgroup>
    </div>
  </header>
<main>
  <article class="">

    <div class="row contenido" >
      <p>El Congreso Internacional de Parques Urbanos, es un evento organizado
        por la Asociación Nacional de Parques y Recreación de México, organización
        dedicada a la formación y profesionalización sobre parques urbanos,
        recreación y espacios públicos a través de sus 5 ejes de acción. La ANPR
        México tiene diversos compromisos, entre ellos se encuentran:
        <ol>
          <li>Promover el ordenamiento de la industria, fomentando la interacción, capacitación y el desarrollo de los diferentes actores comprometidos con el espacio público en México.  </li>
          <li>Generar y comunicar información oportuna y confiable de la industria nacional e internacional.</li>
          <li>Crear un foro de participación para la red de profesionales de parques y recreación.</li>
          <li>Contribuir al involucramiento del gobierno de México e influenciar en el desarrollo y establecimiento de nuevas políticas públicas.</li>
          <li>Favorecer la regeneración del tejido social a través de la intervención de espacios públicos.</li>
        </ol>
        </p>
        <p>Durante la segunda edición del Congreso Parques se convoca a más de 3,500 profesionales a reunirse en Monterrey, Nuevo León, México. Con actividades enérgicas, conferencias magistrales, sesiones educativas, talleres, reuniones de networking, proyectos inspiradores y un vistazo a los productos y servicios para este campo. </p>
    </div>
    <br>

    <div class="row menu_sede">
      <div class="column medium-3">
        <a href="https://nuevoleon.travel/" target="_blank"><img src="img/turismo.png" alt=""></a>
      </div>
      <div class="column medium-3">
          <a href="https://nuevoleon.travel/" target="_blank"><img src="img/parques.png" alt="">
      </div>
      <div class="column medium-3">
          <a href="conectividad.php" target=""><img src="img/conectividad.png" alt="">
      </div>
      <div class="column medium-3">
          <a href="hospedajes.php" target=""><img src="img/hospedaje.png" alt="">
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
