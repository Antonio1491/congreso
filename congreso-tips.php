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
    <title>Congreso Tips</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main>
  <article class="">
    <div class=" header header-8">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">Congreso Tips</h1>
        </div>
      </div>
    </div>
    <div class=" contenido">
      <section id="congresoTips">
        <div class="row align-center" >
          <h3>¿Listo para el Congreso?</h3>
        </div>
        <div class="row align-center">
          <h5> ¡Aquí información que necesitas saber!</h5>
        </div>
        <div class="row">
          <div class="column small-12 medium-6">
            <img src="img/recepcion del congreso.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <ul>
              <li>Si te inscribiste con anterioridad debes tener ya, tu clave de reservación y
                 tu boleto electrónico. De no haber recibido esta información escribe
                 a: inscripciones@congresoparques.com </li>
              <li>Para tener acceso a todas las actividades del congreso: talleres,
                   eventos sociales, sesiones educativas, conferencias magistrales y Expo
                   Parques Urbanos, es indispensable tener tu gafete de asistente. </li>
              <li>¿Cómo conseguir tu gafete? Muy fácil:
                  <ol>
                    <li>IMPRIME el boleto electrónico que llegó a tu correo.</li>
                    <li>Ya con tu boleto impreso, deberás dirigirte al
                        Centro Internacional de Congresos de Yucatán (Calle 62 No. 294 ente Av.
                        Cupules y Av. Colón. <a href="https://goo.gl/maps/KE71QHZ6NRm" target="_blank">Ver mapa</a>) y seguir la
                        señalética para llegar a los módulos de registro. Ahí, nuestro equipo te
                        ayudará y entregará tu gafete. </li>
                  </ol>
              </li>
              <li>Horario de módulos de registro durante los días del congreso:
                <span>Miércoles 25 - 8:00 a.m. a 8:00 p.m.</span> <br>
                <span>Jueves 26 - 7:00 a.m. a 8:00 p.m.</span><br>
                <span>Viernes 27 - 8:00 a.m. a 8:00 p.m.</span>
              </li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="column small-12 medium-6">
            <img src="img/inscribete el 25.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <br><ul>
              <li>Aún si no te inscribiste con anterioridad en el sitio web, te recomendamos llegar a Mérida
                e inscribirte desde el miércoles 25. El evento social de
                inauguración será ese día por la tarde y necesitarás tu gafete para entrar.</li>
                <li>Si eres participante en alguno de nuestros talleres, es muy importante que llegues antes de las 10 a.m. para registrarte a tiempo.</li>
              <!-- <li>Aún si no te inscribiste a algún taller, te recomendamos llegar a Mérida
                e inscribirte desde el miércoles 25 – aún si eres local. El evento social de
                inauguración será ese día por la tarde y necesitarás tu gafete para entrar.</li> -->
              <li>El jueves 26 comienzan las actividades en el Centro de Convenciones muy
                temprano por la mañana. Para evitar filas y ser de los primeros en entrar
                a las conferencias magistrales recomendamos hacer el registro desde el día anterior. </li>
              <li>Durante el <span>miércoles 25</span> el horario de los módulos de registro será de <span>8:00 a.m. a 8:00 p.m.</span></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="column smll-12 medium-6">
            <img src="img/no pierdas el camion.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <br>
            <ul>
              <li>Si te inscribiste a alguno de nuestros talleres, recuerda que estos tendrán lugar el <span>miércoles 25 de 10:00 a.m. a 3:00 p.m.</span></li>
              <li>Deberás presentarte en el Centro Internacional de Congresos de Yucatán con anticipación para registrarte y obtener tu gafete de acceso. Las actividades comienzan en punto de las <span>10:00 a.m.</span> </li>
              <li>Cuando las actividades concluyan, los camiones regresarán a las instalaciones del Centro Internacional de Congresos. </li>
              <li>El taller: <em>“Estudiando la vida pública en parques urbanos y espacios públicos”</em> tendrá un horario de <span>3:00 p.m. a 7:00 p.m.</span></li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="column small-12 medium-6">
            <img src="img/diviertete.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <ul>
              <li><span>Fiesta de Inauguración:</span> Mérida te da bienvenida con una gran fiesta regional.
                ¡Vive esta experiencia llena de tradiciones! Prueba comida yucateca - patrimonio
                cultural de la humanidad, y baila al ritmo de la jarana con la interpretación de
                la Orquesta Jaranera y el Ballet Folclórico de Mérida.<br>
                 Día: Miércoles 25 de abril. <br>
                 Horario: 7:30 p.m. – 11:30 p.m.<br>
                 Lugar: Remate de Montejo. Calle 47, entre 58 y 56, Colonia Centro.<br>
                 <a href="https://goo.gl/maps/nhMKs6VG5M42" target="_blank">Ubicación </a><br>
                 *Servicio de transportación de cortesía. Camiones disponibles desde las 7:15 p.m. a 8:15 p.m. saliendo desde el Centro Internacional de Congresos y de regreso, saliendo del Remate de Montejo, camiones disponibles desde las 10:30 p.m. hasta las 11:30 p.m.
              </li>
              <li>
                <span>Fiesta de Clausura:</span> Celebremos lo aprendido y las nuevas amistades en nuestra fiesta de clausura. Una última oportunidad para convivir, compartir conocimientos y despedirse de todos los que hicieron nuestra experiencia en el congreso, única. Acompáñanos en una tarde de fiesta.
                 Día: Viernes, 27 de abril.<br>
                 Horario: 7:30 p.m. – 12:00 a.m. <br>
                 Lugar: Centro Internacional de Congresos de Yucatán. Calle 62, entre Avenida Colón y Avenida Cupules.<br>
                 <a href="https://goo.gl/maps/F7dSdQ2PbtD2" target="_blank">Ubicación</a><br>
              </li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="column small-12 medium-6">
            <img src="img/sesiones eductivas.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <br><ul>
              <li>Haz click <a href="http://www.congresoparques.com/programa.php" target="_blank">aquí</a> y conoce el programa completo. </li>
              <li>Habrán 7 bloques de sesiones educativas con 8 sesiones paralelas que tienen
                el mismo horario, pero tienen lugar en distintos salones. En total habrán 56
                sesiones educativas disponibles.</li>
              <li>¡Conoce las opciones, encuentra la sesión de tu interés, ubica su salón y llega puntual!</li>
              <li>No importa cual sea tu área de expertise profesional, puedes entrar a las sesiones que quieras.</li>
              <li>Los salones tienen una capacidad máxima de 150 personas; una vez alcanzada, los salones se cierran y no habrá acceso. ¡Ubica el número de salón de la sesión de tu interés y llega puntual para tener un lugar!</li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="column small-12 medium-6">
            <img src="img/magistrales.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <br><ul>
              <li>¡AHORA SON 9! – Llévate las mejores experiencias de nuestros conferencistas internacionales.</li>
              <li>Tú y todos los asistentes tendrán acceso a todas las conferencias magistrales. Es el momento
                en donde los más de 1,000 personas de todo el mundo se juntarán en un mismo salón para escuchar a nuestros expertos. </li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="column small-12 medium-6">
            <img src="img/proveedores.png" alt="">
          </div>
          <div class="column small-12 medium-6">
            <br><ul>
              <li>Expo Parques Urbanos, la exposición comercial más especializada de la industria de los parques urbanos y espacios públicos en México y Latinoamérica.</li>
              <li>La Expo Parques Urbanos tendrá lugar el 26 y 27 de abril. </li>
              <li>Lugar: salón 1, salón 2 y salón 3, del Centro Internacional de Congresos.</li>
              <li>Ver <a href="http://congresoparques.com/expo.php">directorio</a> de expositores.</li>
            </ul>
          </div>
        </div>
        <hr>
      </section>

        </div>



    </div>
    <br>
    <div class="row">
      <div class="column small-3 medium-3">
        <a href="http://www.merida.gob.mx/capitalcultural/" target="_blank"><img src="img/turismo.png" alt=""></a>
      </div>
      <div class="column small-3 medium-3">
          <a href="http://www.yucatan.travel/" target="_blank"><img src="img/turismo-yuc.png" alt="">
      </div>
      <div class="column small-3 medium-3">
          <a href="conectividad.php" target=""><img src="img/conectividad.png" alt="">
      </div>
      <div class="column small-3 medium-3">
          <a href="hospedajes.php" target=""><img src="img/hospedaje.png" alt="">
      </div>

    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
