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
    <title>Sesiones Educativas | Congreso Internacional de Parques Urbanos</title>
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
          <h3 class="titulos">SESIONES EDUCATIVAS</h3>
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
        <p><span class="letra-capital">L</span>as sesiones educativas son la médula espinal del congreso. Son el espacio en
          el cual el asistente podrá aprender de nuestros ponentes. Teniendo a su alcance más de  <span style="font-size:1.2em;">50</span>
          sesiones educativas, los asistentes podrán seleccionar en qué sesiones participar con base en sus intereses.</p>
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
            <h4 class="text-center">Diseño y Planeación</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>El Parque Infantil Ideal</li>
          <li>Juegos de agua, soluciones recreativas para climas calurosos.</li>
          <li>Los Parques lineales, alternativas para espacios públicos residuales.</li>
          <li>¿Por qué es importante un plan maestro para los parques urbanos?</li>
          <li>Las mujeres en la arquitectura de paisaje.</li>
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
            <h4 class="text-center">La Ciudad</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>¿De quién es el parque?</li>
          <li>Viviendo la cultura en el espacio público.</li>
          <li>Las desarrolladoras inmobiliarias y el parque. ¿Matrimonio por conveniencia? </li>
          <li>Design Trust for Public Space: ¿Cómo y por qué?</li>

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
            <h4 class="text-center">Economía y Usos del Espacio Público</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>Concesiones comerciales en parques urbanos ¿Un tema tabú?</li>
          <li>Los Parques Caninos, una gran oportunidad para los parques urbanos.</li>
          <li>Entre el donador y el patrocinador. ¿Cómo crear una campaña de procuración de fondos exitosa para un parque urbano?</li>
          <li>¿Cómo organizar un evento exitoso en un espacio público?</li>
          <li>Jardines Botánicos y Contemplativos, espacios públicos para todos.</li>
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
            <h4 class="text-center">Salud y Medio Ambiente</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>Proyectos de arborización.</li>
          <li>Huertos urbanos, espacios comunitarios.</li>
          <li>Naturaleza cercana, para la salud y la economía.</li>
          <li>Captación de agua de lluvia en espacios públicos</li>
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
            <h4 class="text-center">Función Pública y Participación Ciudadana</h4>
          </span>
        </a>
        <ul class="lista-sesiones">
          <li>¿Cómo construir un parque urbano en menos de 1 día? </li>
          <li>Parques Alegres, un modelo de transformación social en Culiacán.</li>
          <li>¿Qué es y cómo funciona una agencia de parques y recreación?</li>
          <li>Gestiones colaborativas. Gobierno y Sociedad Civil.</li>
          <li>Friends of the Parks: Transformando Chicago y sus parques.</li>
          <li>Minneapolis, el mejor sistema de parques de los Estado Unidos.</li>
        </ul>
      </div>
      <div class="column medium-6 ">

      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
