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
        <img src="img/i_preguntas.png" alt="">
      </figure>
    </div>
      <hgroup class="titulo_pagina">
        <h1>preguntas</h1>
        <h2>frecuentes</h2>
      </hgroup>
  </header>
<main class="back-1">
  <article class="">
    <div class="row titulo_preguntas">
      <h2 class="subtitulo_verde">ANTES DEL CONGRESO?</h2>
    </div>
    <div class="row lista_preguntas">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Qué es el Congreso Parques?</a>
          <div class="accordion-content" data-tab-content>
            <p>El Congreso de Parques Urbanos es un evento que se realiza anualmente
              que tiene como objetivo reunir y capacitar a profesionales, funcionarios
              públicos, técnicos, tomadores de decisiones, académicos, estudiantes,
              sociedad civil y proveedores relacionados al espacio público en un mismo
              lugar, para impulsar la industria de los parques urbanos y la recreación
              en México. Es un espacio de cuatro días de capacitación, <a href="conferenciasMagistrales.php">conferencias</a>,
              <a href="talleres.php">talleres</a> y una <a href="expoParques.php">muestra comercial</a> con proveedores de México y de todo el mundo. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde es el Congreso Parques 2019?</a>
          <div class="accordion-content" data-tab-content>
            <p>En Monterrey, Nuevo León, México. El Congreso Parques te espera en uno de los centros de convenciones y exposiciones más importantes de México, CINTERMEX.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuándo es el Congreso Internacional
            de Parques Urbanos? </a>
          <div class="accordion-content" data-tab-content>
            <p>Del 14 al 17 de mayo del 2019. Contará con 2 días de talleres y 2 días y medio de exposición comercial.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Recinto </a>
          <div class="accordion-content" data-tab-content>
            <p>El evento se llevará a cabo en CINTERMEX localizado al noreste de México, en la ciudad de Monterrey, Nuevo León, México. Este importante centro de negocios ubicado dentro del Parque Fundidora, el parque urbano metropolitano más grande e importante de Monterrey.<br>
            <a href="https://goo.gl/pECDBC" target="_blank">Ubicación</a>.
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Por qué debo asistir?  </a>
          <div class="accordion-content" data-tab-content>
            <ul>
              <li>Conocerás más sobre los parques y espacios públicos; además aprenderás
                de los mejores conferencistas y talleristas del mundo.</li>
              <li>Ampliarás tus contactos y generarás grandes relaciones públicas.</li>
              <li>Conocerás a los proveedores de la industria más importantes de
                México y el mundo, pero sobre todo las tendencias del mercado,
                nuevos productos, precios, calidades y oportunidades.</li>
              <li>Aprenderás de historias de éxito sobre los parques y espacios
                públicos que están sucediendo en México y Latinoamérica.</li>
              <li>Llevarás a tu organización nuevas ideas para el desarrollo de
                proyectos.</li>
              <li>Obtendrás una constancia otorgada por la Asociación Nacional de
                Parques y Recreación de México.</li>
              <li>Podrás descargar todo el material de todas las conferencias al
                finalizar el congreso.</li>
              <li> Visitarás los parques y espacios públicos más emblemáticos de la
                ciudad sede, aprendiendo cómo los ciudadanos y el gobierno resolvieron las
                problemáticas y retos.</li>
              <li>Serás parte de la comunidad mexicana dedicada al cuidado, mantenimiento,
                administración y gestión de los parques urbanos para elevar la discusión del tema en México y Latinoamérica y con esto ayudar a mejorar el tejido social de las ciudades.</li>

            </ul>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Qué actividades estarán incluidas
            en el Congreso Parques? </a>
          <div class="accordion-content" data-tab-content>
            <p>El Congreso Parques, cuenta con diversas actividades, te invitamos a
              conocer la información de cada una dentro de nuestra página web. Recuerda
              que contamos con: </p>
              <ul>
                <li>Conferencias magistrales. </li>
                <li>Sesiones educativas. </li>
                <li>Talleres vivenciales. </li>
                <li>Talleres curriculares.</li>
                <li>Fiesta de bienvenida. </li>
                <li>Fiesta de clausura.</li>
                <li>Expo Parques.</li>
                <li>Glass room.</li>
                <li>Zona de recreación.</li>
                <li>Beer party.</li>
                <li>Agenda de negocios.</li>
              </ul>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Quién asistirá al Congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>El congreso reunirá a más de 3.000 líderes entre los que se encuentran:
              arquitectos, paisajistas, ingenieros, planeadores urbanos, funcionarios públicos,
              técnicos, tomadores de decisiones, académicos, estudiantes, sociedad
              civil y proveedores de equipamiento de todo México y el mundo. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cómo llegar al Monterrey? </a>
          <div class="accordion-content" data-tab-content>
            <p>La mejor manera de llegar a Monterrey es a través del Aeropuerto
              Internacional Mariano Escobedo (MTY). El Aeropuerto está ubicado al
              noreste de la ciudad en el municipio de Apodaca, Carretera Miguel Alemán km
              24, Apodaca, NL. C.P.66600 </p>
            <p>Cuenta con 30 destinos nacionales directos y 15 destinos internacionales directos. </p>
            <p>También encontrarás otra alternativa vía terrestre esta es la Central de Autobuses de Monterrey,
              ubicado en Avenida Cristóbal Colón 855, Industrial, 64440 Monterrey, N.L.
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde me puedo hospedar? </a>
          <div class="accordion-content" data-tab-content>
            <p>Cercanos a CINTERMEX se encuentran los siguientes <a href="hospedajes.php">hoteles</a>:</p>
            <ul>
              <li>	Antaris by Luxor Hotels</li>
              <li>Hotel Monterrey Macroplaza </li>
              <li>Four Points  by Sheraton </li>
              <li>Holiday Inn</li>
              <li>Crorwne Plaza </li>
              <li>iStay Hotel </li>
              <li>Travo Hotel </li>
              <li>Holiday Inn Express Galerías San Jerónimo </li>
              <li>Holiday Inn Hotel Tecnológico </li>
              <li>MS Milenium </li>
            </ul>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde y cuándo me puedo inscribir?	 </a>
          <div class="accordion-content" data-tab-content>
            <p>Puedes inscribirte al congreso desde nuestro sitio web; simplemente
              tendrás que hacer clic en el botón "Registrarse" y seguir las indicaciones.
              Podrás hacerlo a partir del 5 de octubre. </p>
              <p>Cualquier duda o comentario puedes escribir al correo: inscripciones@congresoparques.com
            </p>
            <p>Aprovecha nuestra promoción a meses sin intereses con tarjetas participantes. <img src="img/tarjestas-admitidas.png" alt="" class="tarjetas"></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuánto cuesta la inscripción al congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>Contamos con diversas categorías, estas incluyen precios especiales
              para miembros y no miembros de la Asociación Nacional de Parques y
              Recreación de México. Consulta el siguiente <a href="inscripcion.php">enlace</a> para información
              más concreta.  </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Qué incluye mi entrada al congreso al ser miembro de la ANPR México?</a>
          <div class="accordion-content" data-tab-content>
            <p>Durante el congreso:
              <ul>
                <li>Kit de bienvenida. </li>
                <li>Conferencias magistrales.</li>
                <li>Sesiones educativas.</li>
                <li>Admisión a Expo Parques. </li>
                <li>Glass room. </li>
                <li>Zona de recreación. </li>
                <li>Beer party.</li>
                <li>Fiesta de bienvenida. </li>
                <li>Fiesta de clausura. </li>
              </ul>
            </p>
            <p>Después del congreso:
              <ul>
                <li>Acceso a material del Congreso Parques descargable. </li>
              </ul>
            </p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Qué incluye mi entrada al congreso al no ser miembro de la ANPR México?</a>
          <div class="accordion-content" data-tab-content>
            <p>Durante el congreso:
              <ul>
                <li>Kit de bienvenida </li>
                <li>Conferencias magistrales</li>
                <li>Sesiones educativas</li>
                <li>Admisión a Expo Parques </li>
                <li>Glass room </li>
                <li>Zona de recreación </li>
                <li>Beer party</li>
                <li>Fiesta de bienvenida </li>
                <li>Fiesta de clausura </li>
              </ul>
            </p>
            <p>Después del congreso:
              <ul>
                <li>Acceso a material del Congreso Parques descargable </li>
              </ul>
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Es necesario inscribirme a los 4 días del congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>Para maximizar la experiencia de aprendizaje, te recomendamos inscribirte
              los cuatro días (incluyendo el martes 14 y miércoles 15 de mayo los días
              que se realizarán los talleres). Sin embargo, como la entrada a los talleres
               y al congreso se cobra de forma independiente, tú decides de qué forma participar. </p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cómo puedo hacer mi pago? </a>
          <div class="accordion-content" data-tab-content>
            <p>El pago para la inscripción al congreso se puede hacer a través de tarjeta de crédito, débito y PayPal. También contamos con otras opciones de pago que se muestran en el formulario de registro.
            </p>
            <!-- <p>Aprovecha nuestra promoción a meses sin intereses con tarjetas participantes.
            </p> -->
          </div>
        </li>
        <!-- <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuántas actividades en total debo
            realizar para contar con el 80% de participación y recibir mi constancia? </a>
          <div class="accordion-content" data-tab-content>

          </div>
        </li> -->
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Soy conferencista o ponente en las
            sesiones educativas ¿Cómo me inscribo para asistir al congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>Si fuiste invitado como conferencista magistral o como ponente en
              las sesiones educativas y no sabes si estás registrado para asistir
              al congreso o tienes alguna pregunta, por favor comunícate al correo:
              contenido@anpr.org con Cristina R. de León.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Quiero ser ponente en las sesiones educativas ¿Qué debo hacer? </a>
          <div class="accordion-content" data-tab-content>
            <p>Nuestra convocatoria para recibir propuestas de sesiones educativas se encontrará abierta hasta el 29 de octubre de 2018. Haz clic <a href="convocatoriaSesionesEducativas.php">aquí</a> para conocer las bases de participación. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Tengo que inscribirme al congreso con anterioridad o puedo hacerlo el día que empieza?  </a>
          <div class="accordion-content" data-tab-content>
            <p>Te recomendamos ampliamente que te inscribas previamente para asegurar tu participación al congreso. Para que puedas aprovechar los descuentos por inscripción anticipada y planear a qué sesiones educativas asistir para sacarle el mayor provecho al evento. Sin embargo, habrá módulos de inscripción durante los tres días del congreso. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+  ¿Con quién me dirijo si necesito mayores informes? </a>
          <div class="accordion-content" data-tab-content>
            <p>Puedes escribirnos a inscripciones@congresoparques.com o comunicarte
              con nosotros vía telefónica al 01 800 400 PARK (7275)	 o +52 (999) 944 40 60. </p>
          </div>
        </li>
      </ul>

      <div class="row column titulo_preguntas">
        <h2 class="subtitulo_verde">DURANTE EL CONGRESO?</h2>
      </div>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Llegando a la sede principal CINTERMEX ¿Dónde debo registrarme? </a>
          <div class="accordion-content" data-tab-content>
            <p>Una vez registrado, recibirás un gafete de identificación del congreso. Por favor, utilízalo durante todo el evento, sesiones educativas y eventos sociales. Si pierdes el gafete, el reemplazo tendrá un costo adicional. </p>

          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Puedo compartir mi gafete con alguna otra persona si no puedo asistir a alguna de las actividades? </a>
          <div class="accordion-content" data-tab-content>
            <p>No, compartir gafetes no está permitido.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuál es el código de vestimenta para el Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>El código de vestimenta es casual. Algunas experiencias del congreso
              tienen lugar al aire libre – como los talleres, sin embargo el recinto
              cuenta con aire acondicionado permanentemente. Los eventos sociales serán
              el momento para vestirse un poco más formal si así lo deseas, sin embargo,
              estos serán al aire libre. </p>
          </div>
        </li>


      </ul>
    </ul>
    <div class="row column titulo_preguntas">
      <h2 class="subtitulo_verde">DESPUÉS DEL CONGRESO?</h2>
    </div>
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde puedo obtener mi constancia de participación? </a>
          <div class="accordion-content" data-tab-content>
            <p>Te brindaremos un enlace al finalizar el Congreso Parques. Te pedimos que al realizar tu registro brindes la información completa para dar seguimiento con la entrega de la constancia digital.</p>
          </div>
        </li>
      </ul>
    </div>
  </article>
</main>
<?php include'assets/footer.php'; ?>
