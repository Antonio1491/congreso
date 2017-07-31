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
    <title>EDUCATIONAL SESSIONS</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="slick/slick.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.cinta-ponentes').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          slidesToScroll: 1
          });
        });
      </script>
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2 sesiones">
  <article class="">
    <div class=" header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EDUCATIONAL SESSIONS</h3>
        </div>
      </div>
    </div>
    <!--<div class="action text-center">
      <a href="convocatoria-sesiones.php" class="button">CONVOCATORIA</a>
    </div>-->
    <!--==================== Contenidos de emergentes =======================-->
    <div class="small reveal" id="diseno-y-planeacion" data-reveal>
      <div class="row align-center fila-espacio">
        <div class="column small-12 medium-6">
          <figure >
            <img src="img/diseno-planeacion.png"  alt="Diseño y Planeación">
          </figure>
        </div>
        <div class="column small-12 medium-6 planeacion-diseno">
          <h4>Planning and Design</h4>
          <p style="text-align:justify; color:#555;">The objective of this theme is to talk about design processes and principles for parks; delving into specific topics such as: playgrounds, water games, dog parks, among others. It will provide information on the intellectual and creative processes of design and the importance of planning these spaces for its success.</p>
        </div>
      </div>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="small reveal" id="la-ciudad" data-reveal>
      <div class="row align-center fila-espacio">
        <div class="column small-12 medium-6">
          <figure >
            <img src="img/la-ciudad.png"  alt="La Ciudad">
          </figure>
        </div>
        <div class="column small-12 medium-6 la-ciudad">
          <h4>The City</h4>
          <p style="text-align:justify; color:#555;">The cities have elements of great complexity that make them unique. Public pedestrian and bicycle projects, open data, safe neighborhoods and resilience will be some of the elements addressed in this theme.</p>
        </div>
      </div>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="small reveal" id="economia" data-reveal>
      <div class="row align-center fila-espacio">
        <div class="column small-12 medium-6">
          <figure >
            <img src="img/economia.png"  alt="Economía y Usos del Espacio Público">
          </figure>
        </div>
        <div class="column small-12 medium-6 economia">
          <h4>Economy and Uses of Public Space</h4>
          <p style="text-align:justify; color:#555;">In addition to being spaces for recreation, parks boost the economy and generate jobs. Successful models of management, economic development and fundraising will be presented to show a wide variety of ways in which a park can be sustainable over time.</p>
        </div>
      </div>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="small reveal" id="salud" data-reveal>
      <div class="row align-center fila-espacio">
        <div class="column small-12 medium-6">
          <figure >
            <img src="img/salud-medio-ambiente.png" alt="Salud y Medio Ambiente" >
          </figure>
        </div>
        <div class="column medium-6 salud">
          <h4>Health and Environment </h4>
          <p style="text-align:justify; color:#555;">The parks bring an infinite number of benefits to health, in addition to inviting us to physical activation, they are the place where we find nature. Green areas decrease rates of depression, anxiety and stress; they clean the air, improve wind circulation and regulate annual rainfall patterns.</p>
        </div>
      </div>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="small reveal" id="servicio-publico" data-reveal>
      <div class="row align-center fila-espacio">
        <div class="column small-12 medium-6">
          <figure >
            <img src="img/participacion-ciudadana.png" alt="Salud y Medio Ambiente" >
          </figure>
        </div>
        <div class="column medium-6 servicio-publico">
          <h4>Public Function and Citizen Participation</h4>
          <p style="text-align:justify; color:#555;">The parks need public officials committed to public space, with the knowledge of best practices for their implementation and sustainability in conjunction with the citizens. In this theme, models to encourage citizen participation and structures that improve public service focused on parks will be presented. How to build an urban park in less than 1 day?</p>
        </div>
      </div>
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <!--==================== Contenido de la página ============-->
    <div class="row contenido">
      <div class="column">
        <p><span class="letra-capital">T</span>he educational sessions are the spine of the congress. They are the space in which we all can learn from our more than 75 speakers. More than 50 educational sessions will be schedule giving the attendees the opportunity to select the sessions of their interest.</p>
      </div>
    </div>

        <div class="hide-for-small-only">
        <section class="cinta-ponentes slider-ponentes">
          <div><img src="img/panelistas/sergio-martinez.png" alt=""></div>
          <div><img src="img/panelistas/guillermo-espinosa.png" alt=""></div>
          <div><img src="img/panelistas/edgardo-bolio.png" alt=""></div>
          <div><img src="img/panelistas/andrea.png" alt=""></div>
          <div><img src="img/panelistas/aldo.png" alt=""></div>
          <div><img src="img/panelistas/roberto.png" alt=""></div>
          <div><img src="img/panelistas/carlos-aubert.png" alt=""></div>
          <div><img src="img/panelistas/carlos-mourillo.png" alt=""></div>
          <div><img src="img/panelistas/charles.png" alt=""></div>
          <div><img src="img/panelistas/david.png" alt=""></div>
          <div><img src="img/panelistas/evelyn-hernandez.png" alt=""></div>
          <div><img src="img/panelistas/fernando-villareal.png" alt=""></div>
          <div><img src="img/panelistas/jayne.png" alt=""></div>
          <div><img src="img/panelistas/jayni.png" alt=""></div>
          <div><img src="img/panelistas/juanita.png" alt=""></div>
          <div><img src="img/panelistas/kathleen.png" alt=""></div>
          <div><img src="img/panelistas/luis.png" alt=""></div>
          <div><img src="img/panelistas/susan-chin.png" alt=""></div>
          <div><img src="img/panelistas/tom.png" alt=""></div>
        </section>

    </div>
    <div class="row fila-espacio">
      <div class="column small-12 medium-6 planeacion-diseno">
        <div class="text-center">
            <a data-open="diseno-y-planeacion">
              <img src="img/planeacion-y-diseno-02.png" alt="" class="isesiones">
            </a>
        </div>
        <a data-open="diseno-y-planeacion" style="color:white;">
          <span data-tooltip aria-haspopup="true" class="has-tip left" data-disable-hover="false" tabindex="2" title="Más información">
            <h4 class="text-center">Planning and Design</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>The ideal playground.</li>
          <li>Splash Pads, recreational solutions for hot climates.</li>
          <li>Linear parks, alternatives for residual public spaces.</li>
          <li>Why is a master plan important for urban parks?</li>
          <li>Women in landscape architecture.</li>
        </ul>
      </div>
      <div class="column small-12 medium-6 la-ciudad">
        <div class="text-center">
          <a data-open="la-ciudad">
            <img src="img/la-ciudad-02.png" alt="" class="isesiones">
          </a>
        </div>
        <a data-open="la-ciudad" style="color:white;">
          <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="2" title="Más información">
            <h4 class="text-center">The City</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>Whose park is it?</li>
          <li>Living culture in parks.</li>
          <li>Real estate developments and the park. Marriage of convenience?</li>
          <li>Design Trust for Public Space: How and Why?</li>
        </ul>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column small-12 medium-6 economia">
        <div class="text-center">
          <a data-open="economia">
            <img src="img/uso-del-espacio-publico-02.png" alt="" class="isesiones">
          </a>
        </div>
        <a data-open="economia" style="color:white;">
          <span data-tooltip aria-haspopup="true" class="has-tip left" data-disable-hover="false" tabindex="2" title="Más información">
            <h4 class="text-center">Economy and Uses of Public Space</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>Commercial concessions in urban parks. A taboo subject?</li>
          <li>Dog parks, a great opportunity for urban parks.</li>
          <li>Between the donor and the sponsor. How to create a successful fundraising campaign for urban parks?</li>
          <li>How to organize a successful event in a public space?</li>
          <li>Botanic and contemplative gardens as public spaces for all.</li>
        </ul>
      </div>
      <div class="column small-12 medium-6 salud">
        <div class="text-center">
          <a data-open="salud">
            <img src="img/salud-y-medio-ambiente-02.png" alt="" class="isesiones">
          </a>
        </div>
        <a data-open="salud" style="color:white;">
          <span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="2" title="Más información">
            <h4 class="text-center">Health and Environment </h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>Afforestation projects.</li>
          <li>Urban gardens, community spaces.</li>
          <li>Nearby Nature for Community Health and Economics.</li>
          <li>Rainwater harvesting in public spaces.</li>

        </ul>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column small-12 medium-6 servicio-publico">
        <div class="text-center">
          <a data-open="servicio-publico">
            <img src="img/servicio-publico-02.png" alt="" class="isesiones">
          </a>
        </div>
        <a data-open="servicio-publico" style="color:white;">
          <span data-tooltip aria-haspopup="true" class="has-tip left" data-disable-hover="false" tabindex="2" title="Más información">
            <h4 class="text-center">Public Service and Citizen Participation</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>How to build an urban park in less than 1 day?</li>
          <li>Parques Alegres, a model of social transformation in Culiacán.</li>
          <li>What is a park and recreation agency and how does it works?</li>
          <li>Collaborative relationships. Government and Civil Society.</li>
          <li>Friends of the Parks: Transforming Chicago and its parks.</li>
          <li>Minneapolis, the best park system in the United States.</li>
        </ul>
      </div>
      <div class="column medium-6 ">

      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
