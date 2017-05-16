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
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-actividades">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">PREGUNTAS FRECUENTES</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <ul class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item is-active" data-accordion-item>
          <a href="#" class="accordion-title">1.- ¿QUÉ ES EL PRIMER CONGRESO DE PARQUES URBANOS?</a>
          <div class="accordion-content" data-tab-content>
            <p>El Primer Congreso de Parques Urbanos es la primera edición de un evento que se realizará
              anualmente que tendrá como objetivo reunir y capacitar a profesionales, funcionarios públicos,
              técnicos, tomadores de decisiones, académicos, estudiantes, sociedad civil y proveedores
              relacionados al espacio público en un mismo lugar, para impulsar la industria de los parques
              urbanos y la recreación en México, creando un espacio de  tres días de capacitación,
              <a href="conferencias.php">conferencias</a>, <a href="talleres.php">talleres</a> y <a href="expo.php">muestra comercial</a>.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">2.- ¿DÓNDE ES EL PRIMER CONGRESO DE PARQUES URBANOS?</a>
          <div class="accordion-content" data-tab-content>
            <p>En <a href="ciudad-blanca.php">Mérida</a>, capital del estado de Yucatán y Capital de la Cultura de las Américas en 2017.
              Ciudad nombrada por Forbes como una de las tres mejores ciudades de México para vivir, y con
              las mejores alternativas para invertir y hacer negocios, por el suplemento El Viajero, del
              periódico español El País, elegida como una de las 10 ciudades para darle la bienvenida a 2017
              y por la publicación internacional Lonely Planet calificada como una de las más atractivas
              internacionalmente.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">3.- ¿CUÁNDO ES EL PRIMER CONGRESO DE PARQUES URBANOS? </a>
          <div class="accordion-content" data-tab-content>
            <p>El <a href="participar.php">Primer Congreso de Parques Urbanos</a> tendrá lugar en la ciudad de Mérida del 25 al 27
              de abril del 2018. Durante estos tres días el asistente tendrá la oportunidad de visitar
              la ciudad en nuestros <a href="talleres.php">talleres vivenciales</a>, aprender en  nuestras <a href="conferencias.php">conferencias magistrales</a>
              y nuestras <a href="sesiones.php">sesiones educativas</a>, hacer networking durante el día y en los eventos sociales,
              además de tener acceso a la <a href="expo.php">muestra comercial</a>.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">4.- RECINTO </a>
          <div class="accordion-content" data-tab-content>
            <p>El evento se llevará a cabo en el nuevo Centro Internacional de Congresos. Este se encuentra entre las avenidas
              Colón y Cupules con cruce de las calles 60 y 62 en la Colonia Centro. Está a una
              distancia caminable de multiples <a href="hospedajes.php">hoteles</a>.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">5.- ¿POR QUÉ DEBO ASISTIR?  </a>
          <div class="accordion-content" data-tab-content>
            <p>Este evento impulsará a que profesionales de la industria de parques aumenten
              en número y conocimientos, para que amplíen sus negocios y desarrollen relaciones con
              otros asistentes.</p>
              <ul>
                <li>El congreso contará con: 8 <a href="conferencias.php">conferencias magistrales</a>, más de 50 <a href="sesiones.php">sesiones educativas</a> y 9 <a href="talleres.php">talleres vivenciales</a>.</li>
                <li>Iniciarás relaciones duraderas con otros profesionales nacionales e internacionales con intereses e ideas similares.</li>
                <li>Serás parte del inicio del gran movimiento social de los parques en México.</li>
                <li>Aprenderás acerca de temas clave sobre los parques y la industria de recreación, con la oportunidad de especializarte en alguno de nuestros temas de <a href="sesiones.php">sesiones educativas</a>.</li>
                <li>Elige a que <a href="sesiones.php">sesiones educativas</a> asistir y obtén una certificación validando la participación y conocimientos adquiridos con un 80% de asistencia.</li>
                <li>Obtén un año de membresía a la <a href="http://anpr.org.mx/">Asociación Nacional de Parques y Recreación</a> incluida en tu cuota de registro.</li>
                <li>Conoce a la gran gama de <a href="proveedores.php">proveedores</a> de equipamiento de espacio público y haz negocios con ellos.</li>
                <li>Tendrás la oportunidad de conocer nuevos proyectos relacionados con el espacio público, además de conocer a algunos de los líderes en la industria.</li>
                <li>Eventos sociales en lugares atractivos de la ciudad.</li>
                <li>Conocerás las experiencias de otros que se enfrentan a desafíos similares a los tuyos.</li>
              </ul>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">6.- ¿QUÉ ACTIVIDADES ESTARÁN INCLUIDAS EN EL CONGRESO? </a>
          <div class="accordion-content" data-tab-content>
            <p>El Primer <a href="participar.php">Congreso Internacional de Parques</a> combina conocimientos técnicos en las <a href="sesiones.php">sesiones educativas</a>, pero también ofrece experiencias vivenciales a través de los <a href="talleres.php">talleres vivenciales</a>.</p>
            <p>Las actividades comienzan el miércoles 25 de Abril del 2018 con 9 <a href="talleres.php">talleres</a> (tendrán un costo adicional al costo del congreso) en los que se visitarán parques de la ciudad, el malecón de Puerto Progreso, se aprenderá a desarrollar un proyecto de biciruta, huertos urbanos, entre otros que extenderán los conocimientos sobre el espacio público. </p>
            <p>El jueves y viernes tendrán lugar las 8 <a href="conferencias.php">conferencias magistrales</a> y más de 50 <a href="sesiones.php">sesiones educativas</a> correspondientes a las <a href="tematicas.php">temáticas</a> desarrolladas: diseño y planeación, servicio público y participación ciudadana, la ciudad, economía y usos del espacio público además de salud y medio ambiente, en el Centro Internacional de Convenciones.</p>
            <p>El congreso ofrece dos eventos sociales, la inauguración que tendrá lugar el miércoles 25 por la tarde en el Remate de la avenida Paseo de Montejo y la clausura el viernes 27 en la explanada del Gran Museo del Mundo Maya de Mérida. Estos eventos son oportunidades únicas para que los asistentes al congreso se reúnan, intercambien conocimientos e información en un ambiente relajado, hagan networking y se diviertan.</p>
            <p>Se tendrá acceso ilimitado a la muestra comercial que se encontrará en Centro de Convenciones en el horario de las <a href="conferencias.php">conferencias magistrales</a> y <a href="sesiones.php">sesiones educativas</a>. Sin embargo se tendrán horarios designados para visitas exclusivas a la muestra.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">7.- ¿QUIÉN ASISITIRÁ AL CONGRESO? </a>
          <div class="accordion-content" data-tab-content>
            <p>Este congreso reunirá a más de 1.000 líderes entre los que se encuentrán: planeadores urbanos, funcionarios públicos, técnicos, tomadores de decisiones, académicos, estudiantes, sociedad civil y proveedores de equipamiento de todo México y Latinoamérica.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">8.- ¿CÓMO LLEGAR A MÉRIDA? </a>
          <div class="accordion-content" data-tab-content>
            <p>La mejor manera de <a href="conectividad.php">llegar a Mérida</a> es a través del Aeropuerto Internacional de la Ciudad, Manuel Crescencio Rejón (MID). Otras alternativas son; llegar al Aeropuerto internacional de Cancún (CUN) y tomar un autobús a Mérida (el tiempo de traslado es de cuatro horas aproximadamente)  o hacer una escala en el Aeropuerto Internacional de la Ciudad de México, Benito Juárez (MEX) llegando a Mérida en un vuelo con duración de una hora y media aproximadamente.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">9.- ¿DÓNDE ME PUEDO HOSPEDAR? </a>
          <div class="accordion-content" data-tab-content>
            <p>Cercanos al Centro Internacional de Convenciones se encuentran los <a href="hospedajes.php">hoteles</a>:</p>
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
          <a href="#" class="accordion-title">10.- ¿CÓMO ME PUEDO INSCRIBIR PARA ASISTIR AL CONGRESO? </a>
          <div class="accordion-content" data-tab-content>
            <p>Puedes inscribirte al Congreso desde nuestro sitio web; simplemente tendrás que hacer click en el botón <a href="inscripcion.php">"Registrarse"</a> y seguir las indicaciones.
            Cualquier duda o comentario puede escribir al correo: registro@anpr.org
            </p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">11.- ¿CUANTO CUESTA LA INSCRIPCIÓN AL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <h6><a href="inscripcion.php">Público en general</a></h6>
              <ul>
                <li>Antes del 1º de Agosto, 2017: $3,900.00</li>
                <li>Antes del 1º de Febrero, 2018: $4,500.00</li>
                <li>Del 1º de Febrero, 2018 hasta el 27 de Abril, 2018: $4,900.00</li>
            </br>
            <h6><a href="inscripcion.php">Estudiantes (Con credencial vigente):</a></h6>
                <li>Antes del 1º de Febrero, 2018: $1,500.00</li>
                <li>Del 1º de Febrero, 2018 hasta el 27 de Abril, 2018: $1,900.00</li>
            </br>
            <h6><a href="talleres.php">Talleres</a></h6>
                <li>Todos los talleres que tendrán lugar el miércoles 25 de Abril se cobran de forma
                independiente al costo del congreso.</li>
                <li>La inversión total de cada taller es de: $750.00</li>
              </ul>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">12.- ¿TENGO QUE INSCRIBIRME POR LOS TRES DÍAS DEL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <p>Para maximizar la experiencia de aprendizaje, te recomendamos inscribirte los tres días (incluyendo el miércoles 25, día de <a href="talleres.php">talleres</a>). Sin embargo, como la entrada a los <a href="talleres.php">talleres</a> y a los dos días se <a href="sesiones.php">sesiones educativas</a> y <a href="conferencias">conferencias magistrales</a> se cobra de forma independiente, tú decides si participas tres o dos días.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">13.- SOY CONFERENCISTA MAGISTRAL O PONENETE EN LAS SESIONES EDUCATIVAS ¿CÓMO ME INSCRIBO PARA ASISISTIR AL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <p>Si fuiste invitado como conferencia magistral o como ponente en las <a href="sesiones.php">sesiones educativas</a> y no sabes si estás registrado para asistir al congreso o tienes  alguna pregunta, por favor comunícate al correo: contenido@anpr.org con Cristina R. de León.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">14.- QUIERO SER PONENETE EN LAS SESIONES EDUCATIVAS. ¿QUÉ DEBO DE HACER?</a>
          <div class="accordion-content" data-tab-content>
            <p>Nuestra convocatoria para recibir propuestas de <a href="sesiones.php">sesiones educativas</a> cierra el 14 de Agosto del 2017. Haz click en el siguiente link: <a href="expositor.php">convocatoria</a> y sigue las instrucciones.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">15.- ¿ME TENGO QUE INSCIRBIR CON ANTERIORIDAD O PUEDO HACERLO EL DÍA QUE INICA EL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <p>Te recomendamos ampliamente que te <a href="inscripcion.php">inscribas</a> previamente para asegurar tu participación al Congreso, para que puedas aprovechar los descuentos por inscripción anticipada y planear a qué <a href="sesiones.php">sesiones educativas</a> asistir para sacarle el mayor provecho al Congreso.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">16.- ¿CON QUIÉN ME PUEDO COMUNICAR PARA SOLICITAR AYUDA SOBRE LA INSCRIPCIÓN?</a>
          <div class="accordion-content" data-tab-content>
            <p>Cualquier miembro de nuestro equipo podrá ayudarte comunicándote al teléfono: 01 99 99 44 40 60 / 01 800 400 PARK (7275) de lunes a viernes de 8:00am a 6:00pm.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">17.- ¿DÓNDE ME PUEDO REGISTAR DURANTE EL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <p>Podrás registrarte en el primer nivel del Centro Internacional de Convenciones de Yucatán siguiendo la señalética en sitio.</p>
            <h6>Horarios</h6>
            <ul>
              <li>Miércoles, 25/04/17: 8 am – 6 pm</li>
              <li>Jueves, 26/04/17: 7 am – 6 pm</li>
              <li>Viernes, 27/04/17: 7 am – 6 pm</li>
            </ul>
            <p>Por favor lleve su correo de confirmación con el código de barras claramente impreso y una identificación oficial válida para recoger sus kit de registro. </p>
            <p>Una vez registrado, recibirás un gafete de identificación del Congreso. Por favor, utilízala durante todo el Congreso, <a href="sesiones.php">sesiones educativas</a> y eventos sociales. </p>
            <p>Si pierdes el gafete, el reemplazo tendrá un costo adicional.</p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">18.- ¿PUEDO COMAPARTIR MI GAFETE CON ALGUNA OTRA PERSONA SI NO PUEDO ASISITIR A ALGUNA DE LAS ACTIVIDADES? </a>
          <div class="accordion-content" data-tab-content>
            <p>No, compartir gafetes no está permitido.</p>
          </div>
        </li>

        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">19.- ¿CÓMO PUEDO HACER MI PAGO?</a>
          <div class="accordion-content" data-tab-content>
            <p>El pago para la inscripción al congreso se puede hacer a través de tarjeta de crédito, debido, paypal y otras opciones que se muestran en el formulario de registro, al cual puede acceder haciendo click en éste link: XXX</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">20.- SOY MIEMBRO DE LA PRENSA. ¿CÓMO PUEDO SOLICITAR UN PASE DE PRENSA PARA ACCEDER AL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <p></p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">21.- ¿CÓMO ES EL CLIMA EN MÉRIDA?</a>
          <div class="accordion-content" data-tab-content>
            <p>En general el clima es tropical, cálido y húmedo. La temperatura durante el mes de abril se encuentra entre los 30 y 35 ºC.</p>
          </div>
        </li>
        <li class="accordion-item" data-accordion-item>
          <a href="#" class="accordion-title">22.- ¿CUÁL ES EL CÓDIGO DE VESTIMENTA PARA EL CONGRESO?</a>
          <div class="accordion-content" data-tab-content>
            <p>El código de vestimenta de la conferencia es casual. Algunas experiencias de la conferencia tienen lugar al aire libre – como los talleres. El recinto cuenta con aire acondicionado permanentemente.</br>
            Los eventos sociales podrían ser el momento para vestirse un poco más formal si así lo desea, sin embargo estos serán al aire libre. ¡Te invitamos a estar preparado para un poco de calor!.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </article>
</main>
<?php include'assets/footer.php'; ?>
