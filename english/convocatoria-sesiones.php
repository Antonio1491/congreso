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
    <div class="row column contenido">
      <h5>SEND YOUR PROPOSAL AND BE A PART OF OUR SCHEDULED EDUCATIONAL SESSIONS!</h5>
      <p>Our goal is to meet the educational needs of our diverse audience by providing a selection of relevant topics and sessions led by national and international experts on the subject.</p>
      <p>The proposals most likely to be accepted to be part of the program of the First Congress of Urban Parks are those are the ones related to our 5 themes:</p>
      <div class="">
        <ul>
          <li>Planning and Design</li>
          <li>Public Function and Citizen Participation</li>
          <li>The City</li>
          <li>Health and Environment</li>
          <li>Economy and Uses of Public Space</li>
        </ul>
      </div>
      <div class="">
        <h6>PROFILE OF THE SPEAKER</h6>
          <ul>
            <li>Architects, urban planners, landscape architects.</li>
            <li>Sociologists, anthropologists, marketing professionals and managers.</li>
            <li>Public officials of the three levels of government.</li>
            <li>Environmentalists, leaders of organized civil society groups</li>
            <li>Any other person interested in sharing their knowledge and projects of public space with the attendees.</li>
          </ul>
      </div>
        <p>The participant must <a href="assets/formularios-sesiones-educativas-pre-aprobadas.pdf" target="_blank" class="">download</a> and fill out the form with the information of the proposal along with personal data requested. The form must be sent to the e-mail address: <a href="mailto:contenido@anpr.org.mx">contenido@anpr.org.mx</a> in the appropriate time and requested format.</p>

        <h6>DEAD LINE</h6>
        <p>The due date of proposal reception is October 15, 2017. The notifications of acceptance status will be shared at the beginning of December 2017.</p>
        <h6>General considerations:</h6>
        <ul>
          <li>The educational sessions are a space of training and learning by sharing knowledge, experiences and projects in favor of public space. It is not a space of sale or promotion of products and services; for this reason, proposals that are inclined to these activities will not be accepted to be a part of the scheduled educational sessions.</li>
          <li>If the proposal is accepted, the speaker should share his presentation (support material) with the content committee, as this material will be made public on the National Parks and Recreation Association of México’s website. </li>
        </ul>
        <h6>BENEFITS</h6>
        <p>The speakers selected for educational sessions will receive a benefits package that includes two full days of participation in the congress and all their activities such as:</P>
          <ul>
            <li>Keynote presentations and educational sessions.</li>
            <li>Entrance to the commercial exhibition Urban Parks Expo</li>
            <li>Social events.</li>
          </ul>
          <p><strong>Note:</strong> Expenses related to workshops registration, transportation, lodging, meals and speaker honorarium are not included in the benefits package.</p>

    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
