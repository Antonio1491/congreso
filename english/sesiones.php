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
          <h4>Diseño y Planeación</h4>
          <p style="text-align:justify; color:#555;">El objetivo de esta temática es hablar sobre principios y
            procesos de diseño para parques; ahondando en temas específicos
            como: áreas infantiles, juegos de agua, parques de mascotas entre otros. Se
            brindará información sobre los procesos intelectuales y
            creativos de diseño y la importancia de la crrecta planeación
            de estos espacios para su éxito. </p>
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
          <h4>La Ciudad</h4>
          <p style="text-align:justify; color:#555;">Las ciudades están compuestas por elementos de gran complejidad
            que las hacen únicas. La peatonalidad, proyectos de bicicleta pública,
            datos abiertos, barrios seguros y la resiliencia serán algunos de
            los elementos tratados en esta temática. </p>
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
          <h4>Economía y Usos del Espacio Público</h4>
          <p style="text-align:justify; color:#555;">Además de ser espacios para la recreación, los parques
            impulsan la economía y generan empleos. Se presentarán modelos
            exitosos de administración, fomento económico y procuración de
            fondos mostrando la gran variedad de formas en las que un parque
            puede ser sostenible en el tiempo. </p>
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
          <h4>Salud y Medio Ambiente</h4>
          <p style="text-align:justify; color:#555;">Los parques traen infinidad de beneficios a la salud ya que,
            además de invitarnos a la activación física, son el lugar en
            donde nos encontramos con la naturaleza. Las áreas verdes
            disminuyen los índices de depresión, ansiedad y estrés laboral;
            limpian el aire, mejoran las circulaciones del viento y regulan
            los patrones de precipitaciones anuales.</p>
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
          <h4>Función Pública y Participación Ciudadana</h4>
          <p style="text-align:justify; color:#555;">Los parques necesitan servidores públicos comprometidos con
            el espacio público, con las mejores prácticas para su
            implementación y sostenimiento en conjunto con la ciudadanía,
            fomentando la participación ciudadana. En esta temática se
            presentarán modelos para fomentar la participación ciudadana
            y estructuras que mejoren el servicio público enfocado a los
            parques.</p>
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
          <li>Botanic and contemplative gardens as public spaces for all.</li>
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
          <li>Open data</li>
          <li>How to connect public spaces for pedestrians and bicycles?</li>
          <li>The park as an instrument of crime prevention</li>
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
          <li>Commercial concessions for sports developments - Soccer Fields and Recreational Bike Routes.</li>
          <li>Between the donor and the sponsor. How to create a successful fundraising campaign for urban parks?</li>
          <li>How to organize a successful event in a public space?</li>
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
          <li>Urban gardens and composite in parks.</li>
          <li>The importance of physical activity in parks.</li>
          <li>The Children and the Park. Physical activation for our childhood.</li>
          <li>- Sports and recreational centers, vital elements of public space.</li>
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
            <h4 class="text-center">Public Function and Citizen Participation</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>How to build an urban park in less than 1 day?</li>
          <li>Parques Alegres, a model of social transformation in Culiacán.</li>
          <li>What is a park and recreation agency and how does it works?</li>
          <li>Collaborative relationships. Government and Civil Society.</li>
          <li>Friends of the Parks: Transforming Chicago and its parks.</li>
        </ul>
      </div>
      <div class="column medium-6 ">

      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
