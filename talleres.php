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
    <title>Talleres</title>
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
    <div class=" header header-talleres">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">TALLERES</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <p><span class="letra-capital">L</span>os talleres vivenciales serán experiencias únicas de aprendizaje
        un día previo a que las sesiones educativas comiencen. Se visitarán
        parques y espacios icónicos de la ciudad y el estado impartidos por
        expertos en el tema y colaboradores de nuestra ciudad anfitriona. Los
        talleres son una gran oportunidad para extender nuestro conocimiento
        sobre el espacio público. Los talleres se impartirán el día 25 de Abril.</p>
    </div>
    <div class="row contenido">
      <div class="column medium-3">
        <img src="img/talleres/los-barrios-de-merida.png" alt="">
      </div>
      <div class="column medium-7 contenido-talleres ">
        <h4 class="text-center">LOS BARRIOS DE MÉRIDA</h4>
        <h6 class="text-center"></h6>
        <p>Recorrido por los 7 principales barrios del centro de la ciudad, en los cuales
           se podrá comparar la arquitectura, la composición, el estilo de vida, parques y
           plazas además de ser testigos de la dinámica de vida de sus habitantes. Dentro
           de los barrios que se visitarán se encuentran:
          <ul>
            <li>Santa Ana ubicado en la calle 47x60</li>
            <li>Santiago ubicado en la calle 70 x 59, </li>
            <li>San Sebastián ubicado en la calle 70 x 75, </li>
            <li>San Juan ubicado en la calle 62 x 69, </li>
            <li>Santa Isabel ubicado en la calle 66 x 77, el barrio de San Cristóbal ubicado en la calle 59 x 69 y </li>
            <li>Mejorada ubicado en la calle 50 x 59.</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-7 medium-offset-2 contenido-talleres ">
        <h4 class="text-center">PARQUES HUNDIDOS</h4>
        <h6 class="text-center"></h6>
        <p>Los llamados “Parques Hundidos” son un tipo de parques particulares de Mérida,
          los cuales son espacios que antes fueron sascaberas. Este tipo de parques nos
          demuestran que un espacio público puede encontrarse hasta en los lugares más
          inesperados. Se hará un recorrido por algunos de los principales Parques Hundidos
          de la ciudad, y se podrán observar los diferentes usos y actividades que tiene
          cada uno. </p>
      </div>
      <div class="column medium-3">
        <img src="img/parques-hundidos.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/malecon-progreso.png" alt="">
      </div>
      <div class="column medium-7 contenido-talleres ">
        <h4 class="text-center">MALECÓN DE PROGRESO</h4>
        <h6 class="text-center"></h6>
        <p>En este taller se estudiará un espacio público común en las costas, el Malecón;
          espacio que vincula a todo tipo de personas, desde los que llegan a pasar el día
          al puerto de Porgreso, hasta los habitantes de la ciudad. Se explicará todas las
          actividades que se realizan y que se pueden organizar en estos espacios así como
          los beneficios que le trae a la ciudad.</p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-7 medium-offset-2 contenido-talleres ">
        <h4 class="text-center">PLACEMAKING</h4>
        <h6 class="text-center"></h6>
        <p>Placemaking en Paseo de Montejo y Avenida Colón: El Placemaking es una metodología
          para el diseño de espacios públicos que tiene como principios el  observar, escuchar
         y preguntar a las personas que lo utilizan y/o viven cerca del sitio. En este taller
         podrás conocer ésta metodología a profundidad y llevarla a la práctica en dos de las
         avenidas principales de la ciudad.</p>
      </div>
      <div class="column medium-3">
        <img src="img/placemaking.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/la-plancha.png" alt="">
      </div>
      <div class="column medium-7 contenido-talleres ">
        <h4 class="text-center">LA PLANCHA</h4>
        <h6 class="text-center"></h6>
        <p>Se organizará un recorrido dentro de “La Plancha”, como se le conoce a la ex
          estación de trenes de la ciudad de Mérida. En el recorrido se contará la historia
          del sitio, y se presentará el proyecto ciudadano que existe para transformarlo
          en el nuevo pulmón verde de Mérida. </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-7 medium-offset-2 contenido-talleres ">
        <h4 class="text-center">PARQUES LINEALES</h4>
        <h6 class="text-center"></h6>
        <p>¿Cómo utilizar espacios que pareciera están destinados al abandono? En este
          taller se explicará la historia y desarrollo de dos parques lineales ubicados en
          las líneas de alta tensión en la periferia de Mérida, ahondando en cómo estos
          espacios que generaban inseguridad, ahora son centros de convivencia de gran
          importancia en la ciudad.  </p>
      </div>
      <div class="column medium-3">
        <img src="img/parques-lineales.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/parques-de-merida.png" alt="">
      </div>
      <div class="column medium-7 contenido-talleres ">
        <h4 class="text-center">PARQUES CON HISTORIA</h4>
        <h6 class="text-center"></h6>
        <p>Cada ciudad cuenta con parques icónicos. En este taller, recorreremos algunos de
          los parques más representativos de Mérida, aquellos que nos cuentan las historias que
          ha vivido la ciudad. Podremos ver diferentes diseños y estilos arquitectónicos, así
          como la dinámica que se vive y las actividades que se desarrollan en ellos. </p>
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-7 medium-offset-2 contenido-talleres ">
        <h4 class="text-center">BICI-RUTA</h4>
        <h6 class="text-center"></h6>
        <p>El programa de la bici-ruta de Mérida tiene 11 años siendo un programa dominical exitoso.
          En este taller se enseñará a planear un programa de bici-ruta que cumpla con todos los
          requerimientos necesarios, desde las rutas sugeridas mantenimiento, el personal que se
          necesita, entre otros. Tendremos expertos que nos contarán sus experiencias, y con los
          cuales podremos recorrer algunas de las calles de este excelente programa.</p>
      </div>
      <div class="column medium-3">
        <img src="img/bici-ruta.png" alt="">
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-3">
        <img src="img/huertos-hurbanos.png" alt="">
      </div>
      <div class="column medium-7 contenido-talleres ">
        <h4 class="text-center">HUERTOS URBANOS Y VIVEROS</h4>
        <h6 class="text-center"></h6>
        <p>Esta es una gran oportunidad para aprender todo lo necesario y desarrollar un huerto urbano en casa,
          escuelas, centros comunitarios, etc. y los expertos te enseñarán las mejores técnicas para poder tener
          cultivos exitosos. Además visitaremos uno de los vivieron más importantes de la ciudad, a cargo de una
          asociación civil que tiene como objetivo la mejora del medio ambiente a través de la siembra de árboles
          y la educación ambiental. </p>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
