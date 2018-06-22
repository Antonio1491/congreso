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
    <title>PARTICIPATE</title>
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
    <div class=" header header-convocatoria">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">CALL FOR PROPOSALS 2018</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-6">
        <img src="img/propuesta.png" alt="">
      </div>
      <div class="column medium-6">
        <img src="img/propuesta-convocatoria.png" alt="">
      </div>
    </div>
    <div class="row column fila-espacio">
      <p>The proposals most likely to be accepted to be part of the program of the First Congress of Urban Parks are those are the ones related to our 5 themes:</p>
    </div>
    <div class="row medium-collapse">
      <div class="column small-12 medium-6">
        <img src="img/temas-convocatoria.png" alt="">
      </div>
      <div class="column small-12 medium-6">
        <img src="img/temas-convocatoria2.png" alt="">
      </div>
    </div>

    <div class="row">
      <div class="column small-12  medium-6">
        <h4>PROFILE OF THE SPEAKER</h4>
          <ul>
            <li>Architects, urban planners, landscape architects.</li>
            <li>Sociologists, anthropologists, marketing professionals and managers.</li>
            <li>Public officials of the three levels of government.</li>
            <li>Environmentalists, leaders of organized civil society groups</li>
            <li>Any other person interested in sharing their knowledge and projects of public space with the attendees.</li>
      </div>
      <div class="column hide-for-small-only medium-6">
        <img src="img/perfil.png" alt="">
      </div>
    </div>
    <div class="row medium-collapse">
      <div class="small-8 small-push-2 medium-4 columns">
        <a href="assets/formulario.pdf"><img src="img/formulario.png" alt=""></a>
      </div>
      <div class="columns small-8 small-push-2 medium-4">
        <img src="img/formulario-2.png" alt="">
      </div>
      <div class="columns small-8 small-push-2 medium-4">
        <img src="img/formulario-3.png" alt="">
      </div>
    </div>
    <div class="row column fila-espacio">
      <h4>DEAD LINE</h4>
      <p>The due date of proposal reception is December 31st, 2017. The notifications of acceptance status will be shared at the beginning of February 2018.</p>
      <h4>General considerations:</h4>
      <ul>
        <li>The educational sessions are a space of training and learning by sharing knowledge, experiences and projects in favor of public space. It is not a space of sale or promotion of products and services; for this reason, proposals that are inclined to these activities will not be accepted to be a part of the scheduled educational sessions.</li>
        <li>If the proposal is accepted, the speaker should share his presentation (support material) with the content committee, as this material will be made public on the National Parks and Recreation Association of México’s website. </li>
      </ul>
    </div>
    <div class="cinta-morada">
      <div class="row column">
        <h4>BENEFITS</h4>
        <p>The speakers selected for educational sessions will receive a benefits package that includes two full days of participation in the congress and all their activities such as:</P>
          <ul>
            <li>Keynote presentations and educational sessions.</li>
            <li>Entrance to the commercial exhibition Urban Parks Expo</li>
            <li>Social events.</li>
          </ul>
        </div>
      </div>
      <div class="row column">
          <p><strong>Note:</strong> Expenses related to workshops registration, transportation, lodging, meals and speaker honorarium are not included in the benefits package.</p>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
