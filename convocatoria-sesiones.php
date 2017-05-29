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
    <title>Sesiones Educativas</title>
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
    <div class=" header header-1">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">CONVOCATORIA</h3>
        </div>
      </div>
    </div>
    <div class="row column contenido">
      <h5>¡ENVIA TU PROPUESTA Y FORMA PARTE DE NUESTRAS SESIONES EDUCATIVAS!</h5>
      <p>Nuestro objetivo es satisfacer las necesidades educativas de nuestra diversa
        audiencia proporcionando una selección de temas y sesiones relevantes dirigidas
        por expertos en el tema a nivel nacional e internacional.</p>
      <p>Las propuestas recibidas con más probabilidad de ser aceptadas para formar parte
      del programa del Primer Congreso de Parques Urbanos son, aquellas que se apeguen
      a nuestras 5 temáticas:</p>
      <div class="">
        <ul>
          <li>Diseño y Planeación</li>
          <li>Función Pública y participación Ciudadana</li>
          <li>La Ciudad</li>
          <li>Salud y medio Ambiente</li>
          <li>Economía y Usos del Espacio Público</li>
        </ul>
      </div>
      <div class="">
        <h6>PERFIL DEL PONENTE</h6>
          <ul>
            <li>Arquitectos, urbanistas, arquitectos paisajistas, diseñador del hábitat </li>
            <li>Sociólogos, antropólogos, mercadólogos y administradores.</li>
            <li>Funcionarios públicos de los tres niveles de gobierno.</li>
            <li>Ambientalistas, líderes de grupos de la sociedad civil organizada</li>
            <li>Cualquier otra persona interesada en compartir sus conocimientos y proyectos sobre el espacio público con los asistentes.</li>
          </ul>
      </div>
        <p>El participante deberá <a href="assets/formularios-sesiones-educativas-pre-aprobadas.pdf" target="_blank" class="">descargar el formulario</a>, llenarlo con la información de su propuesta y los datos personales que se solicitan.
          El formulario deberá ser enviado a la dirección de correo: <a href="mailto:contenido@anpr.org.mx">contenido@anpr.org.mx</a> en el tiempo adecuado y en el formato solicitado. </p>

        <h6>SELECCIÓN Y FECHAS</h6>
        <p>La fecha máxima de recepción es el 15 de septiembre del 2017 dando resultados a principios del mes de noviembre del 2017.</p>
        Consideraciones generales:
        <ul>
          <li>Las sesiones educativas están destinadas a la capacitación y el aprendizaje
            al compartir conocimientos, experiencias y proyectos en los que se haya colaborado
            en pro del espacio público. No es un espacio de venta o promoción de productos y
            servicios; por tal motivo, las propuestas que estén inclinadas a estas actividades
            no podrán formar parte de las sesiones educativas programadas. </li>
          <li>Si la propuesta es aceptada, cuando se le indique, el ponente deberá compartir su presentación (material visual de apoyo)
            con el comité de contenido, ya que ese material se hará público en la plataforma web de la Asociación Nacional de Parques y
            Recreación. </li>
        </ul>
        <h6>BNEFICIOS</h6>
        <p>Los ponentes seleccionados para las sesiones educativas recibirán un paquete de beneficios que incluye dos días completos
          de participación en el congreso y todas sus actividades como lo son:</P>
          <ul>
            <li>Conferencias magistrales y sesiones educativas.</li>
            <li>Entrada a la muestra comercial “Expo Parques Urbanos”</li>
            <li>Eventos sociales.</li>
          </ul>
          <p>NOTA: Los gastos relacionados con inscripción a talleres, traslado, hospedaje, comidas y honorarios por presentación de
            la sesión no están incluidos en el paquete de beneficios.</p>

    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
