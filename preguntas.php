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
      <h2 class="subtitulo_verde">...ANTES DEL CONGRESO?</h2>
    </div>
    <div class="row lista_preguntas">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Qué es el Congreso Parques?</a>
          <div class="accordion-content" data-tab-content>
            <p>El Congreso de Parques Urbanos es un evento que se realizará anualmente que tiene como
              objetivo reunir y capacitar a profesionales, funcionarios públicos, técnicos, tomadores de
              decisiones, académicos, estudiantes, sociedad civil y proveedores relacionados al espacio público
              en un mismo lugar, para impulsar la industria de los parques urbanos y la recreación en México,
               en un espacio de tres días de capacitación, <a href="conferencias.php">conferencias</a>, <a href="talleres.php">talleres</a> y <a href="expo.php">muestra comercial</a>.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde es el Congreso Parques?</a>
          <div class="accordion-content" data-tab-content>
            <p>En <a href="ciudad-blanca.php">Mérida</a>, capital del estado de Yucatán y Capital de la Cultura en 2017.
              Ciudad nombrada por <strong>Forbes</strong> como una de las tres mejores ciudades de México para vivir, y
              con las mejores alternativas para invertir y hacer negocios; por el periódico español El País, elegida
              como una de las 10 ciudades para darle la bienvenida a 2017 y por la publicación internacional Lonely Planet
              calificada como una de las más atractivas internacionalmente. </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuándo es el Congreso Parques? </a>
          <div class="accordion-content" data-tab-content>
            <p>El <a href="participar.php">1er Congreso Internacional de Parques Urbanos</a> tendrá lugar en la ciudad de Mérida del <strong>25 al 27
              de abril del 2018</strong>. Durante estos tres días el asistente tendrá la oportunidad de visitar
              la ciudad en nuestros <a href="talleres.php">talleres vivenciales</a>, aprender en  nuestras <a href="conferencias.php">conferencias magistrales</a>
              y nuestras <a href="sesiones.php">sesiones educativas</a>, hacer networking durante el día y en los eventos sociales,
              además de tener acceso a la <a href="expo.php">Expo Parques Urbanos</a>.</p>
          </div>
        </li>
      </ul>

      <div class="row titulo_preguntas">
        <h2 class="subtitulo_verde">...DURANTE EL CONGRESO?</h2>
      </div>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Recinto </a>
          <div class="accordion-content" data-tab-content>
            <p>El evento se llevará a cabo en el nuevo <a href="https://www.google.com.mx/maps/place/Centro+Internacional+de+Congresos+de+Yucatan/@20.9865346,-89.6217773,15z/data=!4m5!3m4!1s0x0:0x754d8df3a5a5ba44!8m2!3d20.9865346!4d-89.6217773" target="_blank">Centro Internacional de Congresos de Yucatán</a>. Este se
              encuentra entre las avenidas Colón y Cupules con cruce en la calle 62 en la Colonia Centro. Se encuentra a una
              distancia caminable de múltiples <a href="hospedajes.php">hoteles</a> en la zona.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Por qué debo asistir?  </a>
          <div class="accordion-content" data-tab-content>
            <p>5.	Este evento hará que profesionales de la industria de los parques aumenten en número y conocimientos,
              para que amplíen sus negocios y desarrollen relaciones con otros asistentes.</p>
              <ul>
                <li>Elige a qué <a href="sesiones.php">sesiones educativas</a> asistir y obtén una certificación validando tu participación y conocimientos adquiridos con un <strong>80%</strong> de asistencia a las sesiones educativas y conferencias magistrales.</li>
                <li>Tendrás la oportunidad de conocer nuevos proyectos relacionados con el espacio público, además de conocer a líderes en la industria.</li>
                <li>Conocerás las experiencias de otros profesionales que se enfrentan a desafíos similares a los tuyos.</li>
              </ul>
              <p><a href="http://www.congresoparques.com/participar.php">¡Convence a tus directivos y ven al congreso!</a></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Qué actividades estarán incluidas en el Congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>El <a href="participar.php">1er Congreso Internacional de Parques</a> combina conocimientos técnicos en las <a href="sesiones.php">sesiones educativas</a>, pero también ofrece experiencias vivenciales a través de los <a href="talleres.php">talleres vivenciales</a>.</p>
            <p>Las actividades comienzan el miércoles 25 de Abril del 2018 con 10 talleres (estos tendrán un costo adicional al del congreso) en los que se visitarán parques de la ciudad, el malecón de Puerto Progreso, además de conocer un proyecto de biciruta dominical y huertos urbanos, entre otros que extenderán nuestros conocimientos sobre el espacio público.</p>
            <p>El jueves y viernes tendrán lugar las <a href="conferencias.php">8 conferencias magistrales</a> y más de <a href="sesiones.php">50 sesiones educativas</a> correspondientes a las temáticas desarrolladas: diseño y planeación, función pública y participación ciudadana, la ciudad, economía y usos del espacio público además de salud y medio ambiente, en el Centro Internacional de Congresos de Yucatán.</p>
            <p>El congreso ofrece dos eventos sociales, la inauguración que tendrá lugar el miércoles 25 y la clausura el viernes 27. Estos eventos son oportunidades únicas para que los asistentes al congreso se reúnan, intercambien conocimientos e información en un ambiente relajado, hagan networking y por supuesto, que se diviertan.</p>
            <p>Se tendrá acceso ilimitado a la muestra comercial, la <a href="expo.php">Expo Parques Urbanos</a> que tendrá lugar en el Centro Internacional de Congresos los días 26 y 27. El 26 de 9:00am a 8:00pm dy el 27 de 9:00am a 7:00pm  durante las conferencias magistrales y sesiones educativas; sin embargo, los asistentes tendrán horarios designados para visitas exclusivas a la muestra.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Quién asistirá al Congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>El congreso reunirá a más de 1.000 líderes entre los que se encuentran: planeadores urbanos, funcionarios públicos, técnicos, tomadores de decisiones, académicos, estudiantes, sociedad civil y proveedores de equipamiento de todo México y Latinoamérica.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cómo llegar al Congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>La mejor manera de llegar a Mérida es a través del Aeropuerto Internacional de la Ciudad, Manuel Crescencio Rejón (MID). Otras
              alternativas son; llegar al Aeropuerto Internacional de Cancún (CUN) y tomar un autobús a Mérida (el tiempo de traslado es de cuatro
              horas aproximadamente) o hacer una escala en el Aeropuerto Internacional de la Ciudad de México, Benito Juárez (MEX) llegando a Mérida
              en un vuelo con duración de una hora y media aproximadamente.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde me puedo hospedar? </a>
          <div class="accordion-content" data-tab-content>
            <p>Cercanos al Centro Internacional de Congresos de Yucatán se encuentran los <a href="hospedajes.php">hoteles</a>:</p>
            <ul>
              <li>Ibis Mérida</li>
              <li>Hotel Victoria</li>
              <li>Hotel las Américas Mérida</li>
              <li>Fiesta Americana Mérida</li>
              <li>Intercontinental Mérida</li>
              <li>El Conquistador</li>
              <li>Holiday Inn Mérida</li>
              <li>Wyndham Mérida</li>
              <li>Hayatt Recency Mérida</li>
              <li>Hotel el Marqués</li>
            </ul>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cómo me puedo inscribir para asistir al Congreso? </a>
          <div class="accordion-content" data-tab-content>
            <p>Puedes inscribirte al congreso desde nuestro <a href="inscripcion.php">sitio web</a>; simplemente tendrás que hacer
              click en el botón "COMPRAR" y seguir las indicaciones. Cualquier duda o comentario
              puede escribir al correo: <a href="mailto:inscripciones@anpr.org">inscripciones@anpr.org</a>
            </p>
            <p>Aprovecha nuestra promoción a meses sin intereses con tarjetas participantes. <img src="img/tarjestas-admitidas.png" alt="" class="tarjetas"></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuánto cuesta la inscripción al Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <h6><a href="inscripcion.php">Público en general</a></h6>
              <ul>
                <li>Antes del 31 de Diciembre, 2017: $3,900.00</li>
                <li>Del 1° de Enero al 1º de Marzo, 2018: $4,500.00</li>
                <li>Del 2º de Marzo al 27 de Abril, 2018: $4,900.00</li>
            </br>
            <h6><a href="inscripcion.php">Estudiantes (Con credencial vigente):</a></h6>
                <li>Antes del 1º de Febrero, 2018: $1,500.00</li>
                <li>Del 2º de Febrero al 27 de Abril, 2018: $1,900.00 </li>
                <p class="fecha-precio">* No válido para estudiantes de posgrados.<br>* Presentar constancia de estudios el día del evento.</p>
            </br>
            <h6><a href="talleres.php">Talleres</a></h6>
                <li>Todos los talleres que tendrán lugar el miércoles 25 de Abril se cobran de forma independiente al costo del congreso.</li>
                <li>La inversión total de cada taller es de: $750.00 </li>
              </ul><br>
              <p>Aprovecha nuestra promoción a meses sin intereses con tarjetas participantes. <img src="img/tarjestas-admitidas.png" alt="" class="tarjetas"></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Tengo que inscribirme por los tres días del Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>Para maximizar la experiencia de aprendizaje, te recomendamos inscribirte los tres días (incluyendo el miércoles 25, día de <a href="talleres.php">talleres</a>). Sin embargo, como la entrada a los <a href="talleres.php">talleres</a> y a los dos días se <a href="sesiones.php">sesiones educativas</a> y <a href="conferencias">conferencias magistrales</a> se cobra de forma independiente, tú decides si participas tres o dos días.</p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Soy conferencista magistral o ponente en las sesiones educativas ¿Cómo me inscribo para asistir al Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>Si fuiste invitado como conferencista magistral o como ponente en las sesiones educativas y no sabes si estás registrado para asistir al congreso o tienes alguna pregunta, por favor comunícate al correo: contenido@anpr.org con Cristina R. de León.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ Quiero ser ponente en las Sesiones Educativas ¿Qué debo hacer?</a>
          <div class="accordion-content" data-tab-content>
            <p>Nuestra convocatoria para recibir propuestas de sesiones educativas cierra el 31 de Diciembre del 2017. Haz click en el siguiente link: <a href="expositor.php">convocatoria</a> y sigue las instrucciones.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Me tengo que inscribir con anterioridad o puedo hacerlo el día que inicia el Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>Te recomendamos ampliamente que te <a href="inscripcion.php">inscribas</a> previamente para asegurar tu participación al Congreso, para que puedas aprovechar los descuentos por inscripción anticipada y planear a qué <a href="sesiones.php">sesiones educativas</a> asistir para sacarle el mayor provecho al Congreso.
            Sin embargo, habrá módulos de inscripción durante los tres días del congreso.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Con quién me puedo comunicar para solicitar ayuda sobre la inscripción?</a>
          <div class="accordion-content" data-tab-content>
            <p>Cualquier miembro de nuestro equipo podrá ayudarte comunicándote al teléfono: 01 99 99 44 40 60 / 01 800 400 PARK (7275) de lunes a viernes de 8:00am a 6:00pm.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Dónde me puedo registrar durante el Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>Podrás registrarte en el primer nivel del Centro Internacional de Congreso de Yucatán siguiendo la señalética en sitio.</p>
            <h6>Horarios</h6>
            <ul>
              <li>Miércoles, 25/04/17: 8 am – 8 pm</li>
              <li>Jueves, 26/04/17: 7 am – 5 pm</li>
              <li>Viernes, 27/04/17: 7 am – 5 pm</li>
            </ul>
            <p>Por favor, lleva tu correo de confirmación con el código de barras claramente impreso y una identificación oficial válida para recoger tu kit de registro.</p>
            <p>Una vez registrado, recibirás un gafete de identificación del congreso. Por favor, utilízala durante todo el evento, <a href="sesiones.php">sesiones educativas</a> y eventos sociales. </p>
            <p>Si pierdes el gafete, el reemplazo tendrá un costo adicional.</p>
            <p>Para inscripciones (compra de entradas al congreso y/o Expo Parques Urbanos) sigue la señalética en sitio durante los horarios señalados anteriormente.</p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Puedo compartir mi gafete con alguna otra persona si no puedo asistir a alguna de las actividades? </a>
          <div class="accordion-content" data-tab-content>
            <p>No, compartir gafetes no está permitido.</p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cómo puedo hacer mi pago?</a>
          <div class="accordion-content" data-tab-content>
            <p>El pago para la inscripción al congreso se puede hacer a través de tarjeta de crédito, debido, paypal y otras opciones que se muestran en el formulario de registro, al cual puede acceder haciendo click en éste <a href="https://www.ticketopolis.com/congresoparques/tickets.aspx">enlace</a>.</p>
            <p>Aprovecha nuestra promoción a meses sin intereses con tarjetas participantes. <img src="img/tarjestas-admitidas.png" alt="" class="tarjetas"></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cómo es el clima del lugar sede?</a>
          <div class="accordion-content" data-tab-content>
            <p>En general el clima es tropical, cálido y húmedo. La temperatura durante el mes de abril se encuentra entre los 30 y 35 ºC.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">+ ¿Cuál es el código de vestimenta para el Congreso?</a>
          <div class="accordion-content" data-tab-content>
            <p>El código de vestimenta es casual. Algunas experiencias del congreso tienen lugar al aire libre – como los talleres, sin embargo el recinto cuenta con aire acondicionado permanentemente.
                Los eventos sociales serán el momento para vestirse un poco más formal si así lo deseas, sin embargo, estos serán al aire libre. ¡Te invitamos a estar preparado para un poco de calor!.</p>
          </div>
        </li>
      </ul>
    </ul>
    <!-- <div class="row titulo_preguntas">
      <h2 class="subtitulo_verde">...DESPUÉS DEL CONGRESO?</h2>
    </div>
      <ul class="accordion" data-accordion data-allow-all-closed="true"> -->

    </div>
  </article>
</main>
<?php include'assets/footer.php'; ?>
