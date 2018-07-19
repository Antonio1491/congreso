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
          <h3 class="titulos">CALL FOR PROPOSALS 2019</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-6">
        <p>The call for proposals aims to receive information about projects from around the
          world to be presented at the <strong>International Congress of Urban Parks</strong>
          in its second edition.</p>
          <p>The proposals received that are most likely to be part of the program are those that follow our five <a href="http://congresoparques.com/EjesTematicos.php" class="link">themes.</a></p>
          <h4>PROFILE OF THE SPEAKER</h4>
            <ul>
              <li>Architects, urban planners, landscape architects.</li>
              <li>Sociologists, anthropologists, marketing professionals and managers.</li>
              <li>Public officials of the three levels of government.</li>
              <li>Environmentalists, leaders of organized civil society groups</li>
              <li>Any other person interested in sharing their knowledge and projects of public space with the attendees.</li>
        </div>
      <div class="column medium-6">
        <img src="img/propuesta-convocatoria.png" alt="">
      </div>
    </div>

    <!-- <div class="row medium-collapse">
      <div class="column small-12 medium-6">
        <img src="img/temas-convocatoria.png" alt="">
      </div>
      <div class="column small-12 medium-6">
        <img src="img/temas-convocatoria2.png" alt="">
      </div>
    </div> -->

    <div class="row column">
      <h4>ELECTIONS AND DATES</h4>
    </div>
    <div class="row column fila-espacio">
      <ul>
        <li>Deadline to submit proposals: October 29, 2018</li>
        <li>Results: January 7 * date susceptible to changes.</li>
      </ul>
    </div>
    <div class="row column">
      <h4>General considerations:</h4>
      <ul>
        <li>The educational sessions are a place for training and learning by sharing knowledge,
          experiences and projects in favor of public space. It is not a space for sale or promotion
          of products and services; for this reason, the proposals that are related to these activities
          cannot be part of the programmed educational sessions.</li>
        <li>If the proposal is accepted, when indicated, the speaker must sign the agreements, terms
          and conditions of privacy and share their presentation (visual support material), as this
          material will be made public on the web platform of the National Recreation and Park
          Association of México after the dates of the congress.</li>
        <li>The educational sessions in its two modalities have a duration of 45 and 75 minutes.
          The National Recreation and Park Association of Mexico reserves the right to designate
          the intervention time of the selected proposals. One could or could not, share the space
          the educational session with another speaker making the times of intervention to fluctuate
          between 20, 30, 45 or 75 minutes.</li>
      </ul>
    </div>

    <div class="cinta-morada">
      <div class="row column">
        <h4>BENEFITS </h4>
        <p>The selected speakers will be granted a general courtesy ticket for the two and a half
          days of the event that will take place at CINTERMEX Convention Center. The courtesy ticket
          includes access to: </P>
          <ul>
            <li>All keynotes and educational sessions.</li>
            <li>Entrance to the commercial exhibition "Expo Parques" since Wednesday may 15th.</li>
            <li>Social events.</li>
          </ul>
        </div>
      </div>

      <div class="row column">
          <p><strong>Note:</strong> The expenses related to workshops registration, air or land
            transportation, lodging, meals and speaker’s fees for presentation of the session,
            are not included in the benefits package and the organizing committee will not finance
            any of them.</p>
      </div>

      <div class="row column">
        <h4>INSTRUCTIONS</h4>
      </div>
      <div class="row column">
        <p>Sending a good proposal is in your hands! Before writing your proposal, take into
          consideration that we need the following information when submitting your proposal.</p>
        <ul>
          <li>Personal information: Email, institution and job position, address, among others.</li>
          <li>Brief resume: Include work experience, projects, research, collaborations and other relevant information - 550 words maximum.</li>
          <li>Professional head and shoulders color photography. It is very important that the photograph be of good quality.</li>
        </ul>
        <strong>ABOUT THE SESSION:</strong>
        <ul>
          <li>Title:  It must have 12 words or less and should reflect the essence of your session.</li>
          <li>Select the theme to which it is align to: Design and Planning, The City, Economy and Uses of
            Public Space, Health and Environment, Public Function and Citizen Participation.</li>
          <li>Description: Describe in a short and clear way your session. It should be 220 words or
            less. If selected, your session will appear on our website with this description, make sure
            it sounds attractive and invites people to be a part of it!.</li>
          <li>Justification: Justify the importance of your proposed educational session identifying how your
            project / initiative / research, etc. provides a solution to a problem related to public
            space and how it relates to one of the five <a href="http://congresoparques.com/EjesTematicos.php" class="link">themes</a> of the congress. There are no limitations
            on the number of words.</li>
          <li>Objectives: The session must have clear and measurable learning objectives. You will need to share 3.</li>
          <li>Modality: You can make a personal proposal or together with other participants. They can work in
            the same organization as you, but you can also make a session proposal with colleagues from
            social projects, other offices, universities - even from different cities or countries! It is
            important to have the personal information of all the speakers involved in the proposal with a
            maximum of three people.</li>
        </ul>
      </div>
      <div class="row column">
        <a href="../registro/RegistroSesionesEducativas2.php" id="link_registro"><h4 id="registraContribucion">Register your contribution here!</h4></a>
      </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
