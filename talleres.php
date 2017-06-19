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
    <div class=" header header-4">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">TALLERES</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column">
        <p><span class="letra-capital">L</span>os talleres vivenciales serán experiencias únicas
          de aprendizaje un día previo a que las sesiones educativas comiencen. Se visitarán parques
          y espacios icónicos de la ciudad y del estado junto con expertos en el tema y colaboradores
          de nuestra ciudad anfitriona. Sin duda los talleres son una gran oportunidad para extender
          nuestro conocimiento sobre el espacio público. Estas actividades tendrán lugar el día
          miércoles <strong>25 de abril</strong>. Incluye: lunch, transporte, materiales y papelería.</p>
      </div>
    </div>
    <div class="row contenido align-center">
      <div class="column small-8 medium-3 large-3">
        <figure class="carga">
          <img data-src="img/talleres/los-barrios-de-merida.png" alt="Barrios de Mérida" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </figure>
      </div>
      <div class="column medium-8 large-7 contenido-talleres ">
        <h4 class="text-center">LOS BARRIOS DE MÉRIDA</h4>
        <h6 class="text-center"></h6>
        <p>Recorrido por los 7 barrios principales de la ciudad, en los cuales
           se podrá comparar la arquitectura, la composición, el estilo de vida, parques y
           plazas de cada uno, además de ser testigos de la dinámica de vida de sus habitantes. Dentro
           de los barrios que se visitarán se encuentran:
          <ul>
            <li>Santa Ana ubicado en la calle <a href="https://goo.gl/maps/Kp92nW8AboK2" target="_blank">47x60</a></li>
            <li>Santiago ubicado en la calle <a href="https://goo.gl/maps/M6w4jguEzpP2" target="_blank">70 x 59</a>, </li>
            <li>San Sebastián ubicado en la calle <a href="https://goo.gl/maps/ag4aCBpUVdA2" target="_blank">70 x 75</a>, </li>
            <li>San Juan ubicado en la calle <a href="https://goo.gl/maps/vkn7Duav5uT2" target="_blank">62 x 69</a>, </li>
            <li>Santa Isabel ubicado en la calle <a href="https://goo.gl/maps/8DPphsmVzZn" target="_blank">66 x 77</a>,</li>
            <li>El barrio de San Cristóbal ubicado en la calle <a href="https://goo.gl/maps/N5LbaNoYUKQ2" target="_blank">59 x 69</a> y </li>
            <li>Mejorada ubicado en la calle <a href="https://goo.gl/maps/YHGBmGf391Q2" target="_blank">50 x 59</a>.</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">PARQUES HUNDIDOS</h4>
        <h6 class="text-center"></h6>
        <p>Los llamados “Parques Hundidos” son un tipo de parques particulares de Mérida,
          los cuales son espacios que antes fueron sascaberas (bancos de materiales). Este tipo de parques nos
          demuestran que un espacio público puede encontrarse hasta en los lugares más
          inesperados. Haremos un recorrido por algunos de los principales Parques Hundidos de la ciudad, y
          se podrán observar los diferentes usos y actividades que tiene cada uno. </p>
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
        <h4 class="text-center">MALECÓN DE PUERTO PROGRESO</h4>
        <h6 class="text-center"></h6>
        <p>En este taller se estudiará un espacio público común en las costas, el <a href="https://goo.gl/maps/6nQNpJuvmpr" target="_blank">Malecón</a>;
          espacio que víncula a todo tipo de personas, desde los que llegan a pasar el día
          a Puerto Porgreso, hasta los habitantes de la ciudad. Se explicará todas las
          actividades que se realizan y que se pueden organizar en estos espacios así como
          los beneficios que le trae a la ciudad.</p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">PLACEMAKING</h4>
        <h6 class="text-center"></h6>
        <p>Haremos un proceso de placemaking en dos de las avenidas más icónicas de Mérida: <a href="https://goo.gl/maps/h2BaksEzEbS2" target="_blank">Paseo de Montejo</a> y <a href="https://goo.gl/maps/tLynEbEBA452" target="_blank">Av. Colón</a>: El Placemaking es una metodología
          para el diseño de espacios públicos que tiene como principios el  observar, escuchar
         y preguntar a las personas que lo utilizan y/o viven cerca del sitio. En este taller
         podrás conocer ésta metodología a profundidad y llevarla a la práctica en dos de las
         avenidas principales de la ciudad.</p>
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
        <p>Se organizará un recorrido dentro de “La Plancha”, como se le conoce a la <a href="https://goo.gl/maps/uKUo8LPD2nk" target="_blank">ex-estación de trenes</a> de la ciudad de Mérida.
          En el recorrido se contará la historia del sitio, y se presentará el proyecto ciudadano
          que existe para transformarlo en el parque central de Mérida. Con una superficie de más
          de 25 hectáreas, La Plancha es un espacio lleno de historia y arqueología industrial. Durante
          más de 2 años vecinos y grupos sociales trabajan de la mano con el gobierno para transformarlo
          en un gran parque metropolitano. </p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">PARQUES LINEALES</h4>
        <h6 class="text-center"></h6>
        <p>¿Cómo utilizar espacios que pareciera están destinados al abandono? En este
          taller se explicará la historia, el plan maestro, la construcción y desarrollo de dos <a href="https://goo.gl/maps/7FX52qxE4K82" target="_blank">parques lineales</a> ubicados en
          las líneas de alta tensión en la periferia de Mérida, ahondando en cómo estos
          espacios que generaban inseguridad, ahora son centros de convivencia de gran
          importancia en la ciudad.  </p>
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
        <h4 class="text-center">PARQUES CON HISTORIA</h4>
        <h6 class="text-center"></h6>
        <p>Cada ciudad cuenta con parques icónicos. En este taller, recorreremos algunos de
          los parques más representativos de Mérida, aquellos que nos cuentan la historia de la ciudad.
          Podremos ver diferentes diseños y estilos arquitectónicos, la dinámica que se vive y las actividades que se desarrollan en ellos.</p>
      </div>
    </div>
    <div class="row fila-espacio align-center">
      <div class="column small-order-2 medium-order-1 medium-8 large-7 medium-offset-1 large-offset-2 contenido-talleres ">
        <h4 class="text-center">BICI-RUTA</h4>
        <h6 class="text-center"></h6>
        <p>Desde hace 11 años el programa de la bici-ruta dominical de Mérida es un programa exitoso. En este taller
          se le enseñará a los asistentes a planear un programa de bici-ruta que cumpla con los requerimientos
          necesarios, desde las rutas sugeridas, mantenimiento, el personal necesario, entre otros. Expertos que
          nos contarán sus experiencias, y podremos recorrer algunas de las calles que forman parte de este excelente programa.</p>
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
        <h4 class="text-center">HUERTOS URBANOS Y VIVEROS</h4>
        <h6 class="text-center"></h6>
        <p>Esta es una gran oportunidad para aprender todo lo necesario y desarrollar un huerto urbano
          en tu parque ¡los expertos te enseñarán las mejores técnicas para poder tener cultivos exitosos!
          Además, visitaremos uno de los vivieron más importantes de la ciudad, a cargo de una asociación
          civil que tiene como objetivo la mejora del medio ambiente a través de la siembra de árboles y la educación ambiental. </p>
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
