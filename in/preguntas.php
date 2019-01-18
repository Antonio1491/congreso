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
    <title>Preguntas Frecuentes</title>
    <?php  require("assets/head_common.php") ?>

</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_preguntas">
    <?php include'assets/menu.php'; ?>
    <div class="figure_header">
      <figure class="">
        <img src="../img/i_preguntas.png" alt="">
      </figure>
    </div>
      <hgroup class="titulo_pagina">
        <h1>Frequently Asked </h1>
        <h2>Questions</h2>
      </hgroup>
  </header>
<main class="back-1">
  <article class="">
    <div class="row titulo_preguntas">
      <h2 class="subtitulo_verde">BEFORE THE CONGRESS</h2>
    </div>
    <div class="row lista_preguntas">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">+ What is Congreso Parques?</a>
          <div class="accordion-content" data-tab-content>
            <p>The Congress of Urban Parks is an annual event that aims to gather
              and train professionals, public officials, technicians, decision makers,
              academics, students, civil society and suppliers related to public space
              in one place, to promote the industry of urban parks and recreation
              in Mexico. It is a space of four days of training, conferences,
              workshops and a commercial exhibition with suppliers from Mexico
              and around the world.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Where is Congreso Parques 2019?</a>
          <div class="accordion-content" data-tab-content>
            <p>In Monterrey, Nuevo León, Mexico. The Congreso Parques is waiting for you
              in one of the most important convention and exhibition centers in Mexico, CINTERMEX</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ When is the International Congress of Urban Parks? </a>
          <div class="accordion-content" data-tab-content>
            <p>Congreso Parques will be held from May 14 to 17, 2019 in Monterrey, Nuevo León,
              Mexico. Its activities will be carried out in the following order:
              <ul>
                <li>Workshops from May 14 to 15.</li>
                <li>Expo Parques from May 15 to 17.</li>
                <li>Conferences from May 16 to 17</li>
              </ul>
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Venue </a>
          <div class="accordion-content" data-tab-content>
            <p>The event will be held in CINTERMEX located in the northeast of Mexico, in the city of
              Monterrey, Nuevo León, Mexico. This important business center located within Parque Fundidora,
              the largest and most important metropolitan urban park in Monterrey.<br>
            <a href="https://goo.gl/pECDBC" target="_blank">Location</a>.
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Why must I attend?   </a>
          <div class="accordion-content" data-tab-content>
            <ul>
              <li>You will expand your networking net and create great friendships.</li>
              <li>You will learn success stories about parks and public spaces that are
                happening in Mexico and around the world.</li>
              <li>You will be part of the Mexican community dedicated to the care,
                maintenance, and management of urban parks to raise awareness of this
                issue in Mexico and Latin America to help improve the social fabric in cities.</li>
            </ul>
            <p>Convince your boss! Here we tell you how: <a href="razonesParaAsistir.php">Reasons to Attend</a> </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ What activities will be included in Congreso Parques?</a>
          <div class="accordion-content" data-tab-content>
            <p>Congreso Parques, has various activities, we invite you to learn about each one on
              our website. We’ll have:</p>
              <ul>
                <li>Keynotes.</li>
                <li>Educational sessions.</li>
                <li>Experiential workshops.</li>
                <li>Curriculum workshops.</li>
                <li>Welcome party.</li>
                <li>Closing party.</li>
                <li>Expo Parques.</li>
                <li>Glass room.</li>
                <li>Recreation area.</li>
                <li>Beer party.</li>
                <li>Business agenda.</li>
              </ul>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Who will attend the congress? </a>
          <div class="accordion-content" data-tab-content>
            <p>The congress will bring together more than 3,000 leaders among: architects and
              landscaping architects, engineers, urban planners, public officials, technicians,
              decision makers, academics, students, civil society and equipment suppliers
              from all over Mexico and the world.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ How to arrive to Monterrey?</a>
          <div class="accordion-content" data-tab-content>
            <p>The best way to get to Monterrey is through the Mariano Escobedo International
              Airport (MTY). The airport is located northeast of the city in the Apodaca municipality,
              Miguel Alemanca highway 24, Apodaca, NL. C.P.66600</p>
            <p>It has 30 direct national destinations and 15 direct international destinations.</p>
            <p>You will also find another alternative through the Central de Autobuses de
              Monterrey, located at Avenida Cristóbal Colón 855, Industrial, 64440 Monterrey, N.L.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Where can I stay? </a>
          <div class="accordion-content" data-tab-content>
            <p>Close to CINTERMEX are the <a href="hospedajes.php">following hotels </a> with which
              the Congreso Parques has an understanding for attendees:</p>
            <ul>
              <li>Antaris by Luxor Hotels</li>
              <li>Hotel Monterrey Macroplaza</li>
              <li>Four Points by Sheraton</li>
              <li>Holiday Inn</li>
              <li>Crorwne Plaza </li>
              <li>iStay Hotel </li>
              <li>Travo Hotel </li>
              <li>Holiday Inn Express Galleries San Jerónimo </li>
              <li>Holiday Inn Hotel Tecnológico </li>
              <li>MS Milenium </li>
            </ul>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Where and when can I register?	 </a>
          <div class="accordion-content" data-tab-content>
            <p>You can register to the congress from our website; you simply have to
              click on the "Get tickets" button and follow the instructions. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ How much is the  registration fee for the congress?</a>
          <div class="accordion-content" data-tab-content>
            <p>We have different categories and different special prices por members and non-members of ANPR México.
               <a href="inscripcion.php"> . Click here to more information. </a></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ What does my entrance fee to the congress includes by being a member of the ANPR Mexico?</a>
          <div class="accordion-content" data-tab-content>
            <p>During the congress:
              <ul>
                <li>Welcome kit</li>
                <li>Conferencias magistrales.</li>
                <li>Educational sessions</li>
                <li>Admission to Expo Parques.</li>
                <li>Glass room. </li>
                <li>Recreation area.</li>
                <li>Beer party.</li>
                <li>Welcome party.</li>
                <li>Closing party.</li>
              </ul>
            </p>
            <p>After the congress:
              <ul>
                <li>Access to the downloadable material of  Congress Parques educational sessions</li>
              </ul>
            </p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ What does my entrance fee to the congress includes by not being a member of the ANPR Mexico?</a>
          <div class="accordion-content" data-tab-content>
            <p>During the congress:
              <ul>
                <li>Welcome kit</li>
                <li>Keynotes.</li>
                <li>Educational sessions</li>
                <li>Admission to Expo Parques.</li>
                <li>Glass room </li>
                <li>Recreation area.</li>
                <li>Beer party</li>
                <li>Welcome party.</li>
                <li>Closing party.</li>
              </ul>
            </p>
            <p>After the congress:
              <ul>
                <li>Access to the downloadable material of  Congress Parques educational sessions</li>
              </ul>
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Is it necessary to register for the four days of the congress? </a>
          <div class="accordion-content" data-tab-content>
            <p>To maximize the learning experience, we recommend that you sign up for the four days
              (including Tuesday, May 14 and Wednesday, May 15, the days the workshops will be held). However,
              as the entrance to the workshops and the congress is charged independently, you decide how to participate.</p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ How can I make my payment? </a>
          <div class="accordion-content" data-tab-content>
            <p>Payment for registration to the congress can be made through credit card,
              debit card and PayPal. We also have other payment options that are shown in the registration form.
            </p>
          </div>
        </li>
        <!-- <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuántas actividades en total debo
            realizar para contar con el 80% de participación y recibir mi constancia? </a>
          <div class="accordion-content" data-tab-content>

          </div>
        </li> -->
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ I am a  speaker at educational sessions. How do I sign up to attend the congress? </a>
          <div class="accordion-content" data-tab-content>
            <p>If you were invited as a keynote speaker or as a speaker at the educational sessions and you
               do not know if you are registered to attend the congress or have any questions,
               please contact us at: content@anpr.org with Cristina R. de León</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ I want to be a speaker in the educational sessions. What should I do? </a>
          <div class="accordion-content" data-tab-content>
            <p>Our call to receive proposals for educational sessions will be open until October 29, 2018.
               <a href="convocatoriaSesionesEducativas.php"> Click here to </a> know the bases for participation. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Do I have to register to the congress in advance or can I do it the day it starts?  </a>
          <div class="accordion-content" data-tab-content>
            <p>We strongly recommend that you register in advance to ensure your participation in the congress, so
              you can take advantage of the discounts for early registration and plan which educational sessions to
              attend to get the most out of the event. However, there will be registration modules during the three
              days of the congress. Do not forget that the quota is limited.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+  Who do I contact if I need more information? </a>
          <div class="accordion-content" data-tab-content>
            <p>You can write us at inscripciones@congresoparques.com or contact us by phone at 01 800 400 PARK (7275) or +52 (999) 944 40 60.</p>
          </div>
        </li>
      </ul>
    </div>

      <div class="row">
        <div class="column medium-12 titulo_preguntas">
          <h2 class="subtitulo_verde">DURING THE CONGRESS </h2>
        </div>
      </div>

      <div class="row">

        <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Arriving to CINTERMEX, where should I register? </a>
          <div class="accordion-content" data-tab-content>
            <p>Follow the signage on site.  </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Can I share my badge with someone else if I can not attend an  activity? </a>
          <div class="accordion-content" data-tab-content>
            <p>No, sharing badges is not allowed.</p>
          </div>
        </li>
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">+ What is the dress code for the congress?</a>
          <div class="accordion-content" data-tab-content>
            <p>The dress code is casual. Some experiences of the congress take place outside - like workshops,
              nevertheless CINTERMEX has air conditioning permanently. Social events could be the time to dress a
              little more formally if you wish, however, these events will be outdoors.</p>
          </div>
        </li>
      </ul>

    </div>
    </ul>

    <div class="row column titulo_preguntas">
      <h2 class="subtitulo_verde">After the congress</h2>
    </div>

    <div class="row">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">+ Where can I get my diploma of participation? </a>
          <div class="accordion-content" data-tab-content>
            <p>We will share a link by email at the end of Congreso Parques. We ask that you complete your registration
              accurate information to follow up on information emails.</p>
          </div>
        </li>
      </ul>
    </div>

    </div>
  </article>
</main>
<?php include'assets/footer.php'; ?>
