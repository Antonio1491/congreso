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
    <title>WORKSHOPS</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-4">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">WORKSHOPS</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column">
        <p><span class="letra-capital">T</span>he workshops will be unique learning experiences one day before the educational sessions begin; parks and iconic spaces of the city and the state will be visited along with experts in the subject and collaborators of our host city. Without doubt the workshops are a great opportunity to extend our knowledge about the public space. These activities will take place on Wednesday, April 25th. It includes: lunch, transportation and materials.</p>
      </div>
    </div>
    <div class="row contenido align-center">
      <div class="column small-8 medium-3 large-3">
        <figure class="carga">
          <img data-src="img/talleres/los-barrios-de-merida.png" alt="Barrios de Mérida" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column medium-8 large-7 contenido-talleres ">
        <h4 class="text-center">Downtown Neighborhoods</h4>
        <h6 class="text-center"></h6>
        <p>Tour through the 7 main districts of downtown Mérida, where you can be witness the architecture, composition, lifestyle, parks and plazas and the life dynamics of its inhabitants.The neighborhoods that will be visited are:
          <ul>
            <li>Santa Ana located in <a href="https://goo.gl/maps/Kp92nW8AboK2" target="_blank">47x60</a> street.</li>
            <li>Santiago located in <a href="https://goo.gl/maps/M6w4jguEzpP2" target="_blank">70 x 59</a> street. </li>
            <li>San Sebastián located in <a href="https://goo.gl/maps/ag4aCBpUVdA2" target="_blank">70 x 75</a> street. </li>
            <li>San Juan located in <a href="https://goo.gl/maps/vkn7Duav5uT2" target="_blank">62 x 69</a> street. </li>
            <li>Santa Isabel located in <a href="https://goo.gl/maps/8DPphsmVzZn" target="_blank">66 x 77</a> street.</li>
            <li>The neighborhood of San Cristóbal located at <a href="https://goo.gl/maps/N5LbaNoYUKQ2" target="_blank">59 x 69</a> and </li>
            <li>Mejorada located in <a href="https://goo.gl/maps/YHGBmGf391Q2" target="_blank">50 x 59 street</a>.</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">SUNKEN PARKS</h4>
        <h6 class="text-center"></h6>
        <p>The so-called " Sunken Parks" are a unique type of parks in Mérida, which are spaces that were previously sascaberas (material banks). These parks show us that a public space can be found even in the most unexpected places. This tour show us the most important sunken parks of the city, and you will be able to observe the different uses and activities that each one has.</p>
      </div>
      <div class="column small-8 small-order-1 medium-order-2 medium-3">
        <figure class="carga">
          <img data-src="img/talleres/parques-hundidos.png" alt="Parques Hundidos" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figura>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-8 medium-3 large-3">
        <figure class="carga">
          <img data-src="img/talleres/malecon-progreso.png" alt="Malecón de Puerto Progreso" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column small-12 medium-8 large-7 contenido-talleres ">
        <h4 class="text-center">PROGRESO PIER</h4>
        <h6 class="text-center"></h6>
        <p>This workshop will study a common public space on the coast, the pier; a space that links all kinds of people, from those who come to spend the day to Progreso, to the inhabitants of the city. All of the activities that are carried out and those that can be organized in these spaces, as well as the benefits that brings to the city will be a part of this workshop.</p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">PLACEMAKING IN PASEO DE MONTEJO AND COLÓN AVENUE</h4>
        <h6 class="text-center"></h6>
        <p>A Placemaking workshop in two of the most iconic avenues in Merida: Paseo de Montejo and Av. Colón. Placemaking is a methodology for the design of public spaces whose principles are observing, listening and asking people who use it or live close. In this workshop you will be able to know this methodology in depth and put it into practice in two of the main avenues of the city.</p>
      </div>
      <div class="column small-8 medium-3 small-order-1 medium-order-2">
        <figure class="carga">
          <img data-src="img/talleres/placemaking.png" alt="Placemaking" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-8 medium-3">
        <figure class="carga">
          <img data-src="img/talleres/la-plancha.png" alt="Ex estación de trenes" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column medium-8 large-7 contenido-talleres ">
        <h4 class="text-center">LA PLANCHA</h4>
        <h6 class="text-center"></h6>
        <p>A tour will be organized inside "La Plancha", the nickname of former train station of Mérida. We’ll get to know the history of the site, and the present citizen project that exists to transform it into the central park of Merida. With an area of more than 25 hectares, "La Plancha", is a space filled of history and industrial archeology. For over 2 years neighbors and social groups work hand in hand with the government to transform it into a large metropolitan park.</p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">LINEAR PARKS</h4>
        <h6 class="text-center"></h6>
        <p>How to use spaces that seem destined to be abandoned? This workshop will explain the history, master planning process, build and development of two linear parks located under the high voltage lines in the periphery of Mérida, delving into how these spaces that generated insecurity, are now important centers of interaction in the city.</p>
      </div>
      <div class="column small-8 medium-3 small-order-1 medium-order-2">
        <figure class="carga">
          <img data-src="img/talleres/parques-lineales.png" alt="Parque Líneal" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-8 medium-3">
        <figure class="carga">
          <img data-src="img/talleres/parques-de-merida.png" alt="Parques con historia" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column  medium-8 large-7 contenido-talleres ">
        <h4 class="text-center">PARKS WITH HISTORY</h4>
        <h6 class="text-center"></h6>
        <p>Each city has iconic parks. In this workshop, we will visit some of the most representative parks in Mérida, those that tell us the stories that the city has experienced. We will be able to see different designs and architectural styles, as well as the dynamics that are lived and the activities that are developed in these spaces, for example the park of "Las Americas" with more than 60 years of history in the Yucatecan community.</p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">BICYCLE RECREATION ROUTES</h4>
        <h6 class="text-center"></h6>
        <p>The Merida's bike recreation route is a successful 11 year old Sunday’s program. In this workshop you will be taught to plan a bike recreation route program that meets all the necessary requirements, from the suggested maintenance routes, the personnel needed, among others. We will have experts talking about their experiences; with them we’ll be able to walk through some of the streets that are part of this excellent program.</p>
      </div>
      <div class="column small-8 medium-3 small-order-1 medium-order-2">
        <figure class="carga">
          <img data-src="img/talleres/bici-ruta.png" alt="Bici-Ruta en Mérida" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-8 medium-3">
        <figure class="carga">
          <img data-src="img/talleres/huertos-hurbanos.png" alt="Huertos Urbanos" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column small-12 medium-8 large-7 contenido-talleres ">
        <h4 class="text-center">URBAN GARDENS</h4>
        <h6 class="text-center"></h6>
        <p>This is a great opportunity to learn everything you need to develop an urban garden in your park. The experts will teach you the best techniques to be able to have successful crops. In addition we will visit one of the most important nursery in the city, in charge of a civil association whose objective is the improvement of the environment through planting trees and environmental education.</p>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
